<?php
/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib\Tests;

use PQAPIV2Lib\Exceptions\ApiException;
use PQAPIV2Lib\Exceptions;
use PQAPIV2Lib\ApiHelper;
use PQAPIV2Lib\Models;
use PHPUnit\Framework\TestCase;

class TransfersControllerTest extends TestCase
{
    /**
     * @var \PQAPIV2Lib\Controllers\TransfersController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected static $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$httpResponse = new HttpCallBackCatcher();
        self::$controller = ClientFactory::create(self::$httpResponse)->getTransfersController();
    }


    /**
     * Retrieve details of a specific transfer represented by a transfer token.
     */
    public function testTestRetrieveTransfer()
    {
        // Parameters for the API call
        $xferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';
        $xMyPayQuickerVersion = '2020.02.24';
        $page = null;
        $pageSize = 20;
        $filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
        $sort = '-name';
        $language = Models\LanguageTypesEnum::ENUS;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveTransfer($xferToken, $xMyPayQuickerVersion, $page, $pageSize, $filter, $sort, $language);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'application/json' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, self::$httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }

    /**
     * Accept a transfer quote
     */
    public function testTestAcceptTransferQuote()
    {
        // Parameters for the API call
        $xferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';
        $xMyPayQuickerVersion = '2020.02.24';

        // Set callback and perform API call
        try {
            self::$controller->acceptTransferQuote($xferToken, $xMyPayQuickerVersion);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Optional cancellation that auto-cancels after a period organically expires or when account activity invalidates the quote.
     */
    public function testTestCancelTransferQuote()
    {
        // Parameters for the API call
        $xferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';
        $xMyPayQuickerVersion = '2020.02.24';

        // Set callback and perform API call
        try {
            self::$controller->cancelTransferQuote($xferToken, $xMyPayQuickerVersion);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Retrieve a list of all transfers that supports filtering, sorting, and pagination through existing mechanisms.
     */
    public function testTestListTransfers()
    {
        // Parameters for the API call
        $xMyPayQuickerVersion = '2020.02.24';
        $page = null;
        $pageSize = 20;
        $filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
        $sort = '-name';
        $language = Models\LanguageTypesEnum::ENUS;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->listTransfers($xMyPayQuickerVersion, $page, $pageSize, $filter, $sort, $language);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['X-TimeZone'] = null ;
        $headers['X-Paging-PageNo'] = null ;
        $headers['X-Paging-PageCount'] = null ;
        $headers['X-Paging-PageSize'] = null ;
        $headers['X-Paging-TotalRecordCount'] = null ;
        $headers['Content-Type'] = 'application/json' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, self::$httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }
}
