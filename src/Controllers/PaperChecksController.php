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

class PaperChecksController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * Retrieve a list of paper checks that supports filtering, sorting, and pagination through existing
     * mechanisms.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param int|null $page Page number of specific page to return
     * @param int|null $pageSize Number of items to be displayed per page
     * @param string|null $filter Filter request results by specific criteria.
     * @param string|null $sort Sort request results by specific attribute.
     * @param string|null $language Filter results by language type.
     *
     * @return Models\PaperCheckCollectionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listPaperChecks(
        string $userToken,
        string $xMyPayQuickerVersion,
        ?int $page = null,
        ?int $pageSize = 20,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): Models\PaperCheckCollectionResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/paperchecks';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PaperCheckCollectionResponse');
    }

    /**
     * Create a quote for a paper check.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param Models\PaperCheckBase|null $body
     *
     * @return Models\PaperCheckResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function orderPaperCheck(
        string $userToken,
        string $xMyPayQuickerVersion,
        ?Models\PaperCheckBase $body = null
    ): Models\PaperCheckResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/paperchecks';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
        ]);

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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PaperCheckResponse');
    }

    /**
     * Retrieve a list of paper checks by destination token that supports filtering, sorting, and
     * pagination through existing mechanisms.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
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
     * @return Models\PaperCheckResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrievePaperCheck(
        string $userToken,
        string $xferToken,
        string $xMyPayQuickerVersion,
        ?int $page = null,
        ?int $pageSize = 20,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): Models\PaperCheckResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/paper-checks/{xfer-token}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PaperCheckResponse');
    }

    /**
     * Create a quote for a paper check.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
     * @param string $xferToken Auto-generated unique identifier representing an individual transfer
     *        transaction, prefixed with <i>xfer-</i>.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param array|null $body
     *
     * @return Models\PaperCheckResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePaperCheck(
        string $userToken,
        string $xferToken,
        string $xMyPayQuickerVersion,
        ?array $body = null
    ): Models\PaperCheckResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/paper-checks/{xfer-token}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
            'xfer-token'             => $xferToken,
        ]);

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

        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::put($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PaperCheckResponse');
    }

    /**
     * Delete a paper check by destination token.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
     * @param string $xferToken Auto-generated unique identifier representing an individual transfer
     *        transaction, prefixed with <i>xfer-</i>.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cancelPaperCheck(string $userToken, string $xferToken, string $xMyPayQuickerVersion): void
    {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/paper-checks/{xfer-token}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
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
}