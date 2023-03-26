<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Pdf
 */

namespace ZendPdfTest;

use ZendPdf as Pdf;
use ZendPdf\InternalType;
use ZendPdf\Destination;

/** \ZendPdf\Destination */


/** Zend_PDF */


/** PHPUnit Test Case */

/**
 * @category   Zend
 * @package    Zend_PDF
 * @subpackage UnitTests
 * @group      Zend_PDF
 */
class DestinationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Stores the original set timezone
     * @var string
     */
    private $_originaltimezone;

    public function setUp()
    {
        $this->_originaltimezone = date_default_timezone_get();
        date_default_timezone_set('GMT');
    }

    /**
     * Teardown environment
     */
    public function tearDown()
    {
        date_default_timezone_set($this->_originaltimezone);
    }

    public function testLoad()
    {
        $pdf = new Pdf\PdfDocument();
        $page1 = $pdf->newPage(Pdf\Page::SIZE_A4);
        $page2 = $pdf->newPage(Pdf\Page::SIZE_A4);


        // \ZendPdf\Destination\Zoom
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('XYZ');
        $destArray->items[] = new InternalType\NumericObject(0);    // left
        $destArray->items[] = new InternalType\NumericObject(842);  // top
        $destArray->items[] = new InternalType\NumericObject(1);    // zoom

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertTrue($destination instanceof Destination\Zoom);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /XYZ 0 842 1 ]');


        // \ZendPdf\Destination\Fit
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('Fit');

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertTrue($destination instanceof Destination\Fit);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /Fit ]');


        // \ZendPdf\Destination\FitHorizontally
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('FitH');
        $destArray->items[] = new InternalType\NumericObject(842);  // top

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertTrue($destination instanceof Destination\FitHorizontally);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /FitH 842 ]');


        // \ZendPdf\Destination\FitVertically
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('FitV');
        $destArray->items[] = new InternalType\NumericObject(0);    // left

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertTrue($destination instanceof Destination\FitVertically);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /FitV 0 ]');


        // \ZendPdf\Destination\FitRectangle
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('FitR');
        $destArray->items[] = new InternalType\NumericObject(0);    // left
        $destArray->items[] = new InternalType\NumericObject(10);   // bottom
        $destArray->items[] = new InternalType\NumericObject(595);  // right
        $destArray->items[] = new InternalType\NumericObject(842);  // top

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertTrue($destination instanceof Destination\FitRectangle);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /FitR 0 10 595 842 ]');


        // \ZendPdf\Destination\FitBoundingBox
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('FitB');

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertTrue($destination instanceof Destination\FitBoundingBox);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /FitB ]');


        // \ZendPdf\Destination\FitBoundingBoxHorizontally
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('FitBH');
        $destArray->items[] = new InternalType\NumericObject(842);  // top

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertTrue($destination instanceof Destination\FitBoundingBoxHorizontally);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /FitBH 842 ]');


        // \ZendPdf\Destination\FitBoundingBoxVertically
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('FitBV');
        $destArray->items[] = new InternalType\NumericObject(0);    // left

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertTrue($destination instanceof Destination\FitBoundingBoxVertically);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /FitBV 0 ]');
    }

    public function testGettersSetters()
    {
        $pdf = new Pdf\PdfDocument();
        $page1 = $pdf->newPage(Pdf\Page::SIZE_A4);
        $page2 = $pdf->newPage(Pdf\Page::SIZE_A4);


        // \ZendPdf\Destination\Zoom
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('XYZ');
        $destArray->items[] = new InternalType\NumericObject(0);    // left
        $destArray->items[] = new InternalType\NumericObject(842);  // top
        $destArray->items[] = new InternalType\NumericObject(1);    // zoom

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertEquals($destination->getLeftEdge(), 0);
        $destination->setLeftEdge(5);
        $this->assertEquals($destination->getLeftEdge(), 5);

        $this->assertEquals($destination->getTopEdge(), 842);
        $destination->setTopEdge(825);
        $this->assertEquals($destination->getTopEdge(), 825);

        $this->assertEquals($destination->getZoomFactor(), 1);
        $destination->setZoomFactor(0.5);
        $this->assertEquals($destination->getZoomFactor(), 0.5);


        // \ZendPdf\Destination\FitHorizontally
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('FitH');
        $destArray->items[] = new InternalType\NumericObject(842);  // top

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertEquals($destination->getTopEdge(), 842);
        $destination->setTopEdge(825);
        $this->assertEquals($destination->getTopEdge(), 825);


        // \ZendPdf\Destination\FitVertically
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('FitV');
        $destArray->items[] = new InternalType\NumericObject(0);    // left

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertEquals($destination->getLeftEdge(), 0);
        $destination->setLeftEdge(5);
        $this->assertEquals($destination->getLeftEdge(), 5);


        // \ZendPdf\Destination\FitRectangle
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('FitR');
        $destArray->items[] = new InternalType\NumericObject(0);    // left
        $destArray->items[] = new InternalType\NumericObject(10);   // bottom
        $destArray->items[] = new InternalType\NumericObject(595);  // right
        $destArray->items[] = new InternalType\NumericObject(842);  // top

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertEquals($destination->getLeftEdge(), 0);
        $destination->setLeftEdge(5);
        $this->assertEquals($destination->getLeftEdge(), 5);

        $this->assertEquals($destination->getBottomEdge(), 10);
        $destination->setBottomEdge(20);
        $this->assertEquals($destination->getBottomEdge(), 20);

        $this->assertEquals($destination->getRightEdge(), 595);
        $destination->setRightEdge(590);
        $this->assertEquals($destination->getRightEdge(), 590);

        $this->assertEquals($destination->getTopEdge(), 842);
        $destination->setTopEdge(825);
        $this->assertEquals($destination->getTopEdge(), 825);


        // \ZendPdf\Destination\FitBoundingBoxHorizontally
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('FitBH');
        $destArray->items[] = new InternalType\NumericObject(842);  // top

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertEquals($destination->getTopEdge(), 842);
        $destination->setTopEdge(825);
        $this->assertEquals($destination->getTopEdge(), 825);


        // \ZendPdf\Destination\FitBoundingBoxVertically
        $destArray = new InternalType\ArrayObject();
        $destArray->items[] = $page2->getPageDictionary();
        $destArray->items[] = new InternalType\NameObject('FitBV');
        $destArray->items[] = new InternalType\NumericObject(0);    // left

        $destination = Destination\AbstractDestination::load($destArray);

        $this->assertEquals($destination->getLeftEdge(), 0);
        $destination->setLeftEdge(5);
        $this->assertEquals($destination->getLeftEdge(), 5);
    }

    public function testCreate()
    {
        $pdf = new Pdf\PdfDocument();
        $page1 = $pdf->newPage(Pdf\Page::SIZE_A4);
        $page2 = $pdf->newPage(Pdf\Page::SIZE_A4);

        $destination = Destination\Zoom::create($page2, 0, 842, 0.5);
        $this->assertTrue($destination instanceof Destination\Zoom);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /XYZ 0 842 0.5 ]');

        $destination = Destination\Fit::create($page2);
        $this->assertTrue($destination instanceof Destination\Fit);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /Fit ]');

        $destination = Destination\FitHorizontally::create($page2, 842);
        $this->assertTrue($destination instanceof Destination\FitHorizontally);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /FitH 842 ]');

        $destination = Destination\FitVertically::create(2, 0);
        $this->assertTrue($destination instanceof Destination\FitVertically);
        $this->assertEquals($destination->getResource()->toString(), '[2 /FitV 0 ]');

        $destination = Destination\FitRectangle::create($page1, 0, 10, 595, 842);
        $this->assertTrue($destination instanceof Destination\FitRectangle);
        $this->assertEquals($destination->getResource()->toString(), '[3 0 R /FitR 0 10 595 842 ]');

        $destination = Destination\FitBoundingBox::create(1);
        $this->assertTrue($destination instanceof Destination\FitBoundingBox);
        $this->assertEquals($destination->getResource()->toString(), '[1 /FitB ]');

        $destination = Destination\FitBoundingBoxHorizontally::create($page2, 842);
        $this->assertTrue($destination instanceof Destination\FitBoundingBoxHorizontally);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /FitBH 842 ]');

        $destination = Destination\FitBoundingBoxVertically::create($page2, 0);
        $this->assertTrue($destination instanceof Destination\FitBoundingBoxVertically);
        $this->assertEquals($destination->getResource()->toString(), '[4 0 R /FitBV 0 ]');
    }
}
