<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Pdf
 */

namespace ZendPdf\Outline;

use ZendPdf as Pdf;
use ZendPdf\Action;
use ZendPdf\Destination;
use ZendPdf\Exception;
use ZendPdf\InternalStructure;
use ZendPdf\InternalType;
use ZendPdf\ObjectFactory;

/**
 * PDF outline representation class
 *
 * @todo Implement an ability to associate an outline item with a structure element (PDF 1.3 feature)
 *
 * @package    Zend_PDF
 * @subpackage Zend_PDF_Outline
 */
class Created extends AbstractOutline
{
    /**
     * Outline title.
     *
     * @var string
     */
    protected $_title;

    /**
     * Color to be used for the outline entry’s text.

     * It uses the DeviceRGB color space for color representation.
     * Null means default value - black ([0.0 0.0 0.0] in RGB representation).
     *
     * @var \ZendPdf\Color\Rgb
     */
    protected $_color = null;

    /**
     * True if outline item is displayed in italic.
     * Default value is false.
     *
     * @var boolean
     */
    protected $_italic = false;

    /**
     * True if outline item is displayed in bold.
     * Default value is false.
     *
     * @var boolean
     */
    protected $_bold = false;

    /**
     * Target destination or action.
     * String means named destination
     *
     * Null means no target.
     *
     * @var \ZendPdf\InternalStructure\NavigationTarget
     */
    protected $_target = null;


    /**
     * Get outline title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * Set outline title
     *
     * @param string $title
     * @return \ZendPdf\Outline\AbstractOutline
     */
    public function setTitle($title)
    {
        $this->_title = $title;
        return $this;
    }

    /**
     * Returns true if outline item is displayed in italic
     *
     * @return boolean
     */
    public function isItalic()
    {
        return $this->_italic;
    }

    /**
     * Sets 'isItalic' outline flag
     *
     * @param boolean $isItalic
     * @return \ZendPdf\Outline\AbstractOutline
     */
    public function setIsItalic($isItalic)
    {
        $this->_italic = $isItalic;
        return $this;
    }

    /**
     * Returns true if outline item is displayed in bold
     *
     * @return boolean
     */
    public function isBold()
    {
        return $this->_bold;
    }

    /**
     * Sets 'isBold' outline flag
     *
     * @param boolean $isBold
     * @return \ZendPdf\Outline\AbstractOutline
     */
    public function setIsBold($isBold)
    {
        $this->_bold = $isBold;
        return $this;
    }


    /**
     * Get outline text color.
     *
     * @return \ZendPdf\Color\Rgb
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * Set outline text color.
     * (null means default color which is black)
     *
     * @param \ZendPdf\Color\Rgb $color
     * @return \ZendPdf\Outline\AbstractOutline
     */
    public function setColor(Pdf\Color\Rgb $color)
    {
        $this->_color = $color;
        return $this;
    }

    /**
     * Get outline target.
     *
     * @return \ZendPdf\InternalStructure\NavigationTarget
     */
    public function getTarget()
    {
        return $this->_target;
    }

    /**
     * Set outline target.
     * Null means no target
     *
     * @param \ZendPdf\InternalStructure\NavigationTarget|string $target
     * @return \ZendPdf\Outline\AbstractOutline
     * @throws \ZendPdf\Exception\ExceptionInterface
     */
    public function setTarget($target = null)
    {
        if (is_string($target)) {
            $target = new Pdf\Destination\Named($target);
        }

        if ($target === null  ||  $target instanceof InternalStructure\NavigationTarget) {
            $this->_target = $target;
        } else {
            throw new Exception\InvalidArgumentException('Outline target has to be \ZendPdf\Destination or \ZendPdf\Action object or string');
        }

        return $this;
    }


    /**
     * Object constructor
     *
     * @param array $options
     * @throws \ZendPdf\Exception\ExceptionInterface
     */
    public function __construct($options = array())
    {
        if (!isset($options['title'])) {
            throw new Exception\InvalidArgumentException('Title is required.');
        }

        $this->setOptions($options);
    }

    /**
     * Dump Outline and its child outlines into PDF structures
     *
     * Returns dictionary indirect object or reference
     *
     * @internal
     * @param \ZendPdf\ObjectFactory    $factory object factory for newly created indirect objects
     * @param boolean $updateNavigation  Update navigation flag
     * @param \ZendPdf\InternalType\AbstractTypeObject $parent   Parent outline dictionary reference
     * @param \ZendPdf\InternalType\AbstractTypeObject $prev     Previous outline dictionary reference
     * @param SplObjectStorage $processedOutlines  List of already processed outlines
     * @return \ZendPdf\InternalType\AbstractTypeObject
     * @throws \ZendPdf\Exception\ExceptionInterface
     */
    public function dumpOutline(ObjectFactory $factory,
                                              $updateNavigation,
              InternalType\AbstractTypeObject $parent,
              InternalType\AbstractTypeObject $prev = null,
                            \SplObjectStorage $processedOutlines = null)
    {
        if ($processedOutlines === null) {
            $processedOutlines = new \SplObjectStorage();
        }
        $processedOutlines->attach($this);

        $outlineDictionary = $factory->newObject(new InternalType\DictionaryObject());

        $outlineDictionary->Title = new InternalType\StringObject($this->getTitle());

        $target = $this->getTarget();
        if ($target === null) {
            // Do nothing
        } elseif ($target instanceof Pdf\Destination\AbstractDestination) {
            $outlineDictionary->Dest = $target->getResource();
        } elseif ($target instanceof Action\AbstractAction) {
            $outlineDictionary->A    = $target->getResource();
        } else {
            throw new Exception\CorruptedPdfException('Outline target has to be \ZendPdf\Destination, \ZendPdf\Action object or null');
        }

        $color = $this->getColor();
        if ($color !== null) {
            $components = $color->getComponents();
            $colorComponentElements = array(new InternalType\NumericObject($components[0]),
                                            new InternalType\NumericObject($components[1]),
                                            new InternalType\NumericObject($components[2]));
            $outlineDictionary->C = new InternalType\ArrayObject($colorComponentElements);
        }

        if ($this->isItalic()  ||  $this->isBold()) {
            $outlineDictionary->F = new InternalType\NumericObject(($this->isItalic()? 1 : 0)  |   // Bit 1 - Italic
                                                                   ($this->isBold()?   2 : 0));    // Bit 2 - Bold
        }


        $outlineDictionary->Parent = $parent;
        $outlineDictionary->Prev   = $prev;

        $lastChild = null;
        foreach ($this->childOutlines as $childOutline) {
            if ($processedOutlines->contains($childOutline)) {
                throw new Exception\CorruptedPdfException('Outlines cyclyc reference is detected.');
            }

            if ($lastChild === null) {
                $lastChild = $childOutline->dumpOutline($factory, true, $outlineDictionary, null, $processedOutlines);
                $outlineDictionary->First = $lastChild;
            } else {
                $childOutlineDictionary = $childOutline->dumpOutline($factory, true, $outlineDictionary, $lastChild, $processedOutlines);
                $lastChild->Next = $childOutlineDictionary;
                $lastChild       = $childOutlineDictionary;
            }
        }
        $outlineDictionary->Last = $lastChild;

        if (count($this->childOutlines) != 0) {
            $outlineDictionary->Count = new InternalType\NumericObject(($this->isOpen()? 1 : -1)*count($this->childOutlines));
        }

        return $outlineDictionary;
    }
}
