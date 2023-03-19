<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Pdf
 */

namespace ZendPdf\Destination;

use ZendPdf as Pdf;
use ZendPdf\Exception;
use ZendPdf\InternalType;

/**
 * \ZendPdf\Destination\FitHorizontally explicit detination
 *
 * Destination array: [page /FitH top]
 *
 * Display the page designated by page, with the vertical coordinate top positioned
 * at the top edge of the window and the contents of the page magnified
 * just enough to fit the entire width of the page within the window.
 *
 * @package    Zend_PDF
 * @subpackage Zend_PDF_Destination
 */
class FitHorizontally extends AbstractExplicitDestination
{
    /**
     * Create destination object
     *
     * @param \ZendPdf\Page|integer $page  Page object or page number
     * @param float $top  Top edge of displayed page
     * @return \ZendPdf\Destination\FitHorizontally
     * @throws \ZendPdf\Exception\ExceptionInterface
     */
    public static function create($page, $top)
    {
        $destinationArray = new InternalType\ArrayObject();

        if ($page instanceof Pdf\Page) {
            $destinationArray->items[] = $page->getPageDictionary();
        } elseif (is_integer($page)) {
            $destinationArray->items[] = new InternalType\NumericObject($page);
        } else {
            throw new Exception\InvalidArgumentException('$page parametr must be a \ZendPdf\Page object or a page number.');
        }

        $destinationArray->items[] = new InternalType\NameObject('FitH');
        $destinationArray->items[] = new InternalType\NumericObject($top);

        return new self($destinationArray);
    }

    /**
     * Get top edge of the displayed page
     *
     * @return float
     */
    public function getTopEdge()
    {
        return $this->_destinationArray->items[2]->value;
    }

    /**
     * Set top edge of the displayed page
     *
     * @param float $top
     * @return \ZendPdf\Action\FitHorizontally
     */
    public function setTopEdge($top)
    {
        $this->_destinationArray->items[2] = new InternalType\NumericObject($top);

        return $this;
    }
}
