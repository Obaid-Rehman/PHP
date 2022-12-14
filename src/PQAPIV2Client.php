<?php

declare(strict_types=1);

/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib;


use PQAPIV2Lib\Controllers;

/**
 * PQAPIV2Lib client class
 */
class PQAPIV2Client implements ConfigurationInterface
{
    private $payments;
    private $transfers;
    private $spendBack;
    private $prepaidCards;
    private $paperChecks;
    private $bankAccounts;
    private $balances;
    private $receipts;
    private $users;
    private $documents;
    private $webhooks;
    private $program;

    private $timeout = ConfigurationDefaults::TIMEOUT;
    private $enableRetries = ConfigurationDefaults::ENABLE_RETRIES;
    private $numberOfRetries = ConfigurationDefaults::NUMBER_OF_RETRIES;
    private $retryInterval = ConfigurationDefaults::RETRY_INTERVAL;
    private $backOffFactor = ConfigurationDefaults::BACK_OFF_FACTOR;
    private $maximumRetryWaitTime = ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    private $retryOnTimeout = ConfigurationDefaults::RETRY_ON_TIMEOUT;
    private $httpStatusCodesToRetry = ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    private $httpMethodsToRetry = ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    private $environment = ConfigurationDefaults::ENVIRONMENT;
    private $authManagers = [];
    private $httpCallback;

    public function __construct(array $configOptions = null)
    {
        
        if (isset($configOptions['timeout'])) {
            $this->timeout = $configOptions['timeout'];
        }
        if (isset($configOptions['enableRetries'])) {
            $this->enableRetries = $configOptions['enableRetries'];
        }
        if (isset($configOptions['numberOfRetries'])) {
            $this->numberOfRetries = $configOptions['numberOfRetries'];
        }
        if (isset($configOptions['retryInterval'])) {
            $this->retryInterval = $configOptions['retryInterval'];
        }
        if (isset($configOptions['backOffFactor'])) {
            $this->backOffFactor = $configOptions['backOffFactor'];
        }
        if (isset($configOptions['maximumRetryWaitTime'])) {
            $this->maximumRetryWaitTime = $configOptions['maximumRetryWaitTime'];
        }
        if (isset($configOptions['retryOnTimeout'])) {
            $this->retryOnTimeout = $configOptions['retryOnTimeout'];
        }
        if (isset($configOptions['httpStatusCodesToRetry'])) {
            $this->httpStatusCodesToRetry = $configOptions['httpStatusCodesToRetry'];
        }
        if (isset($configOptions['httpMethodsToRetry'])) {
            $this->httpMethodsToRetry = $configOptions['httpMethodsToRetry'];
        }
        if (isset($configOptions['environment'])) {
            $this->environment = $configOptions['environment'];
        }
        if (isset($configOptions['httpCallback'])) {
            $this->httpCallback = $configOptions['httpCallback'];
        }
    }

    /**
     * Get the client configuration as an associative array
     */
    public function getConfiguration(): array
    {
        $configMap = [];

        if (isset($this->timeout)) {
            $configMap['timeout'] = $this->timeout;
        }
        if (isset($this->enableRetries)) {
            $configMap['enableRetries'] = $this->enableRetries;
        }
        if (isset($this->numberOfRetries)) {
            $configMap['numberOfRetries'] = $this->numberOfRetries;
        }
        if (isset($this->retryInterval)) {
            $configMap['retryInterval'] = $this->retryInterval;
        }
        if (isset($this->backOffFactor)) {
            $configMap['backOffFactor'] = $this->backOffFactor;
        }
        if (isset($this->maximumRetryWaitTime)) {
            $configMap['maximumRetryWaitTime'] = $this->maximumRetryWaitTime;
        }
        if (isset($this->retryOnTimeout)) {
            $configMap['retryOnTimeout'] = $this->retryOnTimeout;
        }
        if (isset($this->httpStatusCodesToRetry)) {
            $configMap['httpStatusCodesToRetry'] = $this->httpStatusCodesToRetry;
        }
        if (isset($this->httpMethodsToRetry)) {
            $configMap['httpMethodsToRetry'] = $this->httpMethodsToRetry;
        }
        if (isset($this->environment)) {
            $configMap['environment'] = $this->environment;
        }
        if (isset($this->httpCallback)) {
            $configMap['httpCallback'] = $this->httpCallback;
        }

        return $configMap;
    }

    /**
     * Clone this client and override given configuration options
     */
    public function withConfiguration(array $configOptions): self
    {
        return new self(\array_merge($this->getConfiguration(), $configOptions));
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->enableRetries;
    }

    public function getNumberOfRetries(): int
    {
        return $this->numberOfRetries;
    }

    public function getRetryInterval(): float
    {
        return $this->retryInterval;
    }

    public function getBackOffFactor(): float
    {
        return $this->backOffFactor;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->maximumRetryWaitTime;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->retryOnTimeout;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->httpStatusCodesToRetry;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->httpMethodsToRetry;
    }

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * Get the base uri for a given server in the current environment
     *
     * @param  string $server Server name
     *
     * @return string         Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return static::ENVIRONMENT_MAP[$this->environment][$server];
    }

    /**
     * Returns Payments Controller
     */
    public function getPaymentsController(): Controllers\PaymentsController
    {
        if ($this->payments == null) {
            $this->payments = new Controllers\PaymentsController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->payments;
    }

    /**
     * Returns Transfers Controller
     */
    public function getTransfersController(): Controllers\TransfersController
    {
        if ($this->transfers == null) {
            $this->transfers = new Controllers\TransfersController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->transfers;
    }

    /**
     * Returns Spend Back Controller
     */
    public function getSpendBackController(): Controllers\SpendBackController
    {
        if ($this->spendBack == null) {
            $this->spendBack = new Controllers\SpendBackController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->spendBack;
    }

    /**
     * Returns Prepaid Cards Controller
     */
    public function getPrepaidCardsController(): Controllers\PrepaidCardsController
    {
        if ($this->prepaidCards == null) {
            $this->prepaidCards = new Controllers\PrepaidCardsController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->prepaidCards;
    }

    /**
     * Returns Paper Checks Controller
     */
    public function getPaperChecksController(): Controllers\PaperChecksController
    {
        if ($this->paperChecks == null) {
            $this->paperChecks = new Controllers\PaperChecksController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->paperChecks;
    }

    /**
     * Returns Bank Accounts Controller
     */
    public function getBankAccountsController(): Controllers\BankAccountsController
    {
        if ($this->bankAccounts == null) {
            $this->bankAccounts = new Controllers\BankAccountsController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->bankAccounts;
    }

    /**
     * Returns Balances Controller
     */
    public function getBalancesController(): Controllers\BalancesController
    {
        if ($this->balances == null) {
            $this->balances = new Controllers\BalancesController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->balances;
    }

    /**
     * Returns Receipts Controller
     */
    public function getReceiptsController(): Controllers\ReceiptsController
    {
        if ($this->receipts == null) {
            $this->receipts = new Controllers\ReceiptsController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->receipts;
    }

    /**
     * Returns Users Controller
     */
    public function getUsersController(): Controllers\UsersController
    {
        if ($this->users == null) {
            $this->users = new Controllers\UsersController($this, $this->authManagers, $this->httpCallback);
        }
        return $this->users;
    }

    /**
     * Returns Documents Controller
     */
    public function getDocumentsController(): Controllers\DocumentsController
    {
        if ($this->documents == null) {
            $this->documents = new Controllers\DocumentsController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->documents;
    }

    /**
     * Returns Webhooks Controller
     */
    public function getWebhooksController(): Controllers\WebhooksController
    {
        if ($this->webhooks == null) {
            $this->webhooks = new Controllers\WebhooksController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->webhooks;
    }

    /**
     * Returns Program Controller
     */
    public function getProgramController(): Controllers\ProgramController
    {
        if ($this->program == null) {
            $this->program = new Controllers\ProgramController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->program;
    }

    /**
     * A map of all baseurls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::PRODUCTION => [
            Server::DEFAULT_ => 'https://platform.mypayquicker.build/api/v2',
            Server::ACCESS_TOKEN_SERVER => 'https://identity.mypayquicker.build/core/connect',
        ],
    ];
}
