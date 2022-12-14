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

class SpendBackControllerTest extends TestCase
{
    /**
     * @var \PQAPIV2Lib\Controllers\SpendBackController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getSpendBackController();
    }


    /**
     * Retrieve a single spendback quote using the spendback token.
     */
    public function testTestRetrieveSpendback()
    {
        // Parameters for the API call
        $spndToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
        $xMyPayQuickerVersion = '2020.02.24';
        $page = null;
        $pageSize = 20;
        $filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
        $sort = '-name';
        $language = Models\LanguageTypesEnum::ENUS;

        // Set callback and perform API call
        try {
            self::$controller->retrieveSpendback($spndToken, $xMyPayQuickerVersion, $page, $pageSize, $filter, $sort, $language);
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
     * Accept an open spendback quote.
     */
    public function testTestAcceptSpendbackQuote()
    {
        // Parameters for the API call
        $spndToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
        $xMyPayQuickerVersion = '2020.02.24';

        // Set callback and perform API call
        try {
            self::$controller->acceptSpendbackQuote($spndToken, $xMyPayQuickerVersion);
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
     * Cancel an open spendback quote.
     */
    public function testTestCancelSpendbackQuote()
    {
        // Parameters for the API call
        $spndToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
        $xMyPayQuickerVersion = '2020.02.24';

        // Set callback and perform API call
        try {
            self::$controller->cancelSpendbackQuote($spndToken, $xMyPayQuickerVersion);
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
     * Perform a spendback refund for the full amount.
     */
    public function testTestRefundSpendbackFull()
    {
        // Parameters for the API call
        $spndToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
        $xMyPayQuickerVersion = '2020.02.24';

        // Set callback and perform API call
        try {
            self::$controller->refundSpendbackFull($spndToken, $xMyPayQuickerVersion);
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
     * Perform a spendback refund for a partial amount.
     */
    public function testTestRefundSpendbackPartial()
    {
        // Parameters for the API call
        $spndToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
        $xMyPayQuickerVersion = '2020.02.24';

        // Set callback and perform API call
        try {
            self::$controller->refundSpendbackPartial($spndToken, $xMyPayQuickerVersion);
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
     * Retrieve a list of all spendbacks that supports filtering, sorting, and pagination through existing mechanisms.
     */
    public function testTestListSpendBacks()
    {
        // Parameters for the API call
        $xMyPayQuickerVersion = '2020.02.24';
        $page = null;
        $pageSize = 20;
        $filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
        $sort = '-name';
        $language = Models\LanguageTypesEnum::ENUS;

        // Set callback and perform API call
        try {
            self::$controller->listSpendBacks($xMyPayQuickerVersion, $page, $pageSize, $filter, $sort, $language);
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
     * Create a spendback quote. <i>*Spendbacks can be automatically accepted by setting the `autoAcceptQuote` flag. If not automatically accepted, a POST is required to the spendback endpoint using the token returned in the response. Quotes can be accepted, cancelled, or allowed to expire.</i>
     */
    public function testTestQuoteSpendback()
    {
        // Parameters for the API call
        $xMyPayQuickerVersion = '2020.02.24';
        $body = null;

        // Set callback and perform API call
        try {
            self::$controller->quoteSpendback($xMyPayQuickerVersion, $body);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }
}
