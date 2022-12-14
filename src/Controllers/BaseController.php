<?php

declare(strict_types=1);

/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib\Controllers;

use PQAPIV2Lib\Http\HttpCallBack;
use PQAPIV2Lib\Http\HttpResponse;
use PQAPIV2Lib\ApiHelper;
use PQAPIV2Lib\Http\HttpRequest;
use PQAPIV2Lib\Exceptions\ApiException;
use PQAPIV2Lib\ConfigurationInterface;
use PQAPIV2Lib\AuthManagerInterface;
use Unirest\Request;

/**
 * Base controller
 */
class BaseController
{
    /**
     * Configuration instance
     *
     * @var ConfigurationInterface
     */
    protected $config;

    /**
     * List of auth managers for this controller.
     *
     * @var array
     */
    private $authManagers = [];

    /**
     * HttpCallBack instance associated with this controller
     *
     * @var HttpCallBack|null
     */
    private $httpCallBack;

    /**
     * User-Agent header value to be sent with API calls.
     *
     * @var string
     */
    protected static $userAgent = 'APIMATIC 3.0';

    /**
     * Constructor that sets the timeout of requests
     */
    protected function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        $this->config = $config;
        $this->authManagers = $authManagers;
        $this->httpCallBack = $httpCallBack;

        Request::timeout($config->getTimeout());
        Request::enableRetries($config->shouldEnableRetries());
        Request::maxNumberOfRetries($config->getNumberOfRetries());
        Request::retryInterval($config->getRetryInterval());
        Request::backoffFactor($config->getBackOffFactor());
        Request::maximumRetryWaitTime($config->getMaximumRetryWaitTime());
        Request::retryOnTimeout($config->shouldRetryOnTimeout());
        Request::httpMethodsToRetry($config->getHttpMethodsToRetry());
        Request::httpStatusCodesToRetry($config->getHttpStatusCodesToRetry());
    }

    /**
     * Get auth manager for the provided namespace key.
     *
     * @param  string   $key         Namespace key
     * @return AuthManagerInterface  The AuthManager set for this key.
     */
    protected function getAuthManager(string $key): AuthManagerInterface
    {
        return $this->authManagers[$key];
    }

    /**
     * Get HttpCallBack for this controller
     *
     * @return HttpCallBack|null The HttpCallBack object set for this controller
     */
    public function getHttpCallBack(): ?HttpCallBack
    {
        return $this->httpCallBack;
    }

    /**
     * Validate response or throw exception based on the status code
     */
    protected function validateResponse(HttpResponse $response, HttpRequest $request): void
    {
        if (($response->getStatusCode() < 200) || ($response->getStatusCode() > 208)) { //[200,208] = HTTP OK
            throw new ApiException('HTTP Response Not OK', $request, $response);
        }
    }

    /**
     * Create and get ApiException-derived exception instance
     */
    protected function createExceptionFromJson(
        string $type,
        string $reason,
        HttpRequest $request,
        HttpResponse $response
    ) {
        $body = json_decode($response->getRawBody());

        if ($body === null) {
            return new ApiException($reason, $request, $response);
        } else {
            $body->reason = $reason;
            $body->request = $request;
            $body->response = $response;
        }

        return ApiHelper::getJsonMapper()->mapClass($body, $type);
    }
}
