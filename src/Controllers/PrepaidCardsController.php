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

class PrepaidCardsController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * Replace an existing Prepaid Card specifying the replacement reason and the card package for the
     * replacement card.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
     * @param string $destToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with <i>dest->.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param array|null $body
     *
     * @return Models\PrepaidCardResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function replacePrepaidCard(
        string $userToken,
        string $destToken,
        string $xMyPayQuickerVersion,
        ?array $body = null
    ): Models\PrepaidCardResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/prepaid-cards/{dest-token}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
            'dest-token'             => $destToken,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PrepaidCardResponse');
    }

    /**
     * Retrieve Prepaid Card details by destination token.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
     * @param string $destToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with <i>dest->.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     *
     * @return Models\PrepaidCardResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrievePrepaidCard(
        string $userToken,
        string $destToken,
        string $xMyPayQuickerVersion
    ): Models\PrepaidCardResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/prepaid-cards/{dest-token}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
            'dest-token'             => $destToken,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PrepaidCardResponse');
    }

    /**
     * Partial Prepaid Card update typically used when modifying card status. <i>*Does not require the
     * entire object be passed in the request</i>
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
     * @param string $destToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with <i>dest->.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param Models\PrepaidCardStatus|null $body
     *
     * @return Models\PrepaidCardResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePrepaidCardPartial(
        string $userToken,
        string $destToken,
        string $xMyPayQuickerVersion,
        ?Models\PrepaidCardStatus $body = null
    ): Models\PrepaidCardResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/prepaid-cards/{dest-token}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
            'dest-token'             => $destToken,
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

        $_httpRequest = new HttpRequest(HttpMethod::PATCH, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::patch($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PrepaidCardResponse');
    }

    /**
     * Retrieve one part of a two-part token required to reveal or set a client side PIN. <i>*Not all
     * programs support a reveal or set PIN operation.</i>
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
     * @param string $destToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with <i>dest->.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     *
     * @return Models\PrepaidCardPinToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function generatePINOperationToken(
        string $userToken,
        string $destToken,
        string $xMyPayQuickerVersion
    ): Models\PrepaidCardPinToken {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/prepaid-cards/{dest-token}/pin';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
            'dest-token'             => $destToken,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PrepaidCardPinToken');
    }

    /**
     * Allows the setting of a PIN if supported by program.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
     * @param string $destToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with <i>dest->.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param string $token Token used as part of a two-leg card PIN reveal request sent directly
     *        from the client, generally involving a second piece of data such as the CVV code on
     *        the back of a card.
     * @param string $cardPin Prepaid card PIN for ATM and Debit usage
     *
     * @return Models\UsersPrepaidCardsPinResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function setPINIfSupported(
        string $userToken,
        string $destToken,
        string $xMyPayQuickerVersion,
        string $token,
        string $cardPin
    ): Models\UsersPrepaidCardsPinResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/prepaid-cards/{dest-token}/pin';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
            'dest-token'             => $destToken,
        ]);

        //process optional query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryBuilder, [
            'token'                  => $token,
            'cardPin'                => $cardPin,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'           => self::$userAgent,
            'Accept'               => 'application/json',
            'X-MyPayQuicker-Version' => $xMyPayQuickerVersion
        ];

        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::put($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'UsersPrepaidCardsPinResponse');
    }

    /**
     * Reveals the PIN for a card where PIN reveal functionality is supported in the program and hosted by
     * PayQuicker.
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
     * @param string $destToken Auto-generated unique identifier representing a transfer
     *        destination, including prepaid cards, bank accounts, paper checks, and other users,
     *        prefixed with <i>dest->.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param string $token Token used as part of a two-leg card PIN reveal request sent directly
     *        from the client, generally involving a second piece of data such as the CVV code on
     *        the back of a card.
     * @param string $cvc2 Card Verification Value (CVV) located on the back of your credit card or
     *        debit card is a 3-digit number on VISA?? and MasterCard?? branded credit cards, and
     *        debit cards.
     * @param array|null $body
     *
     * @return Models\PrepaidCardPin Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function revealPINIfSupported(
        string $userToken,
        string $destToken,
        string $xMyPayQuickerVersion,
        string $token,
        string $cvc2,
        ?array $body = null
    ): Models\PrepaidCardPin {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/prepaid-cards/{dest-token}/pin';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
            'dest-token'             => $destToken,
        ]);

        //process optional query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryBuilder, [
            'token'                  => $token,
            'cvc2'                   => $cvc2,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PrepaidCardPin');
    }

    /**
     * Retrieve a list of all pre-paid cards by user token that supports filtering, sorting, and
     * pagination through existing mechanisms.
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
     * @return Models\PrepaidCardCollectionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listPrepaidCards(
        string $userToken,
        string $xMyPayQuickerVersion,
        ?int $page = null,
        ?int $pageSize = 20,
        ?string $filter = null,
        ?string $sort = null,
        ?string $language = null
    ): Models\PrepaidCardCollectionResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/prepaid-cards';

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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PrepaidCardCollectionResponse');
    }

    /**
     * Order a pre-paid card for the user by specifying a cardPackage. <i>*A package defines the type of
     * card, currency, artwork utilized, and often the method of delivery.</i>
     *
     * @param string $userToken Auto-generated unique identifier representing a user, prefixed with
     *        <i>user-</i>.
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param Models\PrepaidCardBase|null $body
     *
     * @return Models\PrepaidCardRequestResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function orderPrepaidCard(
        string $userToken,
        string $xMyPayQuickerVersion,
        ?Models\PrepaidCardBase $body = null
    ): Models\PrepaidCardRequestResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/prepaid-cards';

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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PrepaidCardRequestResponse');
    }

    /**
     * Generate a token used to reveal prepaid card information in the form of image data (base64) or JSON.
     *
     * @param string $userToken
     * @param string $destToken
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param string $format Desired format for the prepaid card data.
     * @param string|null $side Side to specify when retrieving a prepaid card's image data.
     *        *Required if IMAGE format specified.
     *
     * @return Models\PrepaidCardDataTokenResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function generatePrepaidCardDataToken(
        string $userToken,
        string $destToken,
        string $xMyPayQuickerVersion,
        string $format,
        ?string $side = null
    ): Models\PrepaidCardDataTokenResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/prepaid-cards/{dest-token}/pci';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
            'dest-token'             => $destToken,
        ]);

        //process optional query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryBuilder, [
            'format'                 => $format,
            'side'                   => $side,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PrepaidCardDataTokenResponse');
    }

    /**
     * Return prepaid card data in the form of image data, text, or both.
     *
     * @param string $userToken
     * @param string $destToken
     * @param string $xMyPayQuickerVersion Date-based API Version specified in the header
     *        <i>required</i> on all calls.
     * @param string $format Desired format for the prepaid card data.
     * @param string $token Token used as part of a two-leg card PIN reveal request sent directly
     *        from the client, generally involving a second piece of data such as the CVV code on
     *        the back of a card.
     * @param string|null $side Side to specify when retrieving a prepaid card's image data.
     *        *Required if IMAGE format specified.
     *
     * @return Models\PrepaidCardDataResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getPrepaidCardData(
        string $userToken,
        string $destToken,
        string $xMyPayQuickerVersion,
        string $format,
        string $token,
        ?string $side = null
    ): Models\PrepaidCardDataResponse {
        //prepare query string for API call
        $_queryBuilder = '/users/{user-token}/prepaid-cards/{dest-token}/pci';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'user-token'             => $userToken,
            'dest-token'             => $destToken,
        ]);

        //process optional query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryBuilder, [
            'format'                 => $format,
            'token'                  => $token,
            'side'                   => $side,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'           => self::$userAgent,
            'Accept'               => 'application/json',
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PrepaidCardDataResponse');
    }
}
