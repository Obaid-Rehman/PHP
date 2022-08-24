<?php

declare(strict_types=1);

/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib\Controllers;

use PQAPIV2Lib\Exceptions\ApiException;
use PQAPIV2Lib\ApiHelper;
use PQAPIV2Lib\ConfigurationInterface;
use PQAPIV2Lib\Models;
use PQAPIV2Lib\Http\HttpRequest;
use PQAPIV2Lib\Http\HttpResponse;
use PQAPIV2Lib\Http\HttpMethod;
use PQAPIV2Lib\Http\HttpContext;
use PQAPIV2Lib\Http\HttpCallBack;
use Unirest\Request;

class TransfersController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * Retrieve details of a specific transfer represented by a transfer token.
     *
     * @param string $xferToken Auto-generated unique identifier representing an individual transfer
     *        transaction, prefixed with <i>xfer-</i>.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param int|null $page Page number of specific page to return
     * @param int|null $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return Models\TransferResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveTransfer(
        string $xferToken,
        string $xMyPayQuickerVersion,
        ?int $page = null,
        ?int $pageSize = 20,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): Models\TransferResponse {
        //prepare query string for API call
        $_queryBuilder = '/transfers/{xfer-token}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'xfer-token'             => $xferToken,
        ]);

        //process optional query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryBuilder, [
            'page'                   => $page,
            'pageSize'               => (null != $pageSize) ?
                $pageSize : 20,
            'filter'                 => $filter,
            'sort'                   => $sort,
            'language'               => $language,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'           => self::$userAgent,
            'Accept'               => 'application/json',
            'X-MyPayQuicker-Version' => $xMyPayQuickerVersion
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'TransferResponse');
    }

    /**
     * Accept a transfer quote
     *
     * @param string $xferToken Auto-generated unique identifier representing an individual transfer
     *        transaction, prefixed with <i>xfer-</i>.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function acceptTransferQuote(string $xferToken, string $xMyPayQuickerVersion): void
    {
        //prepare query string for API call
        $_queryBuilder = '/transfers/{xfer-token}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'xfer-token'             => $xferToken,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'           => self::$userAgent,
            'X-MyPayQuicker-Version' => $xMyPayQuickerVersion
        ];

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
    }

    /**
     * Optional cancellation that auto-cancels after a period organically expires or when account activity
     * invalidates the quote.
     *
     * @param string $xferToken Auto-generated unique identifier representing an individual transfer
     *        transaction, prefixed with <i>xfer-</i>.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cancelTransferQuote(string $xferToken, string $xMyPayQuickerVersion): void
    {
        //prepare query string for API call
        $_queryBuilder = '/transfers/{xfer-token}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'xfer-token'             => $xferToken,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'           => self::$userAgent,
            'X-MyPayQuicker-Version' => $xMyPayQuickerVersion
        ];

        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::delete($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
    }

    /**
     * Retrieve a list of all transfers that supports filtering, sorting, and pagination through existing
     * mechanisms.
     *
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param int|null $page Page number of specific page to return
     * @param int|null $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return Models\TransferCollectionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listTransfers(
        string $xMyPayQuickerVersion,
        ?int $page = null,
        ?int $pageSize = 20,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): Models\TransferCollectionResponse {
        //prepare query string for API call
        $_queryBuilder = '/transfers';

        //process optional query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryBuilder, [
            'page'                   => $page,
            'pageSize'               => (null != $pageSize) ?
                $pageSize : 20,
            'filter'                 => $filter,
            'sort'                   => $sort,
            'language'               => $language,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'           => self::$userAgent,
            'Accept'               => 'application/json',
            'X-MyPayQuicker-Version' => $xMyPayQuickerVersion
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'TransferCollectionResponse');
    }

    /**
     * Create a new quote. <i>*This can be a non-payment card-to-card transfer, prepaid card from Flex
     * (wallet), bank account, or user-to-user transfer.</i>
     *
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param Models\TransferRequest $body
     *
     * @return Models\TransferResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function quoteTransfer(string $xMyPayQuickerVersion, Models\TransferRequest $body): Models\TransferResponse
    {
        //prepare query string for API call
        $_queryBuilder = '/transfers';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'           => self::$userAgent,
            'Accept'               => 'application/json',
            'X-MyPayQuicker-Version' => $xMyPayQuickerVersion,
            'Content-Type'           => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'TransferResponse');
    }
}
