<?php

declare(strict_types=1);

/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib\Models;

use PQAPIV2Lib\Utils\DateTimeHelper;
use stdClass;

/**
 * Base for the receipt
 */
class ReceiptBase implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $formattedAmount;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string|null
     */
    private $sourceToken;

    /**
     * @var string|null
     */
    private $destinationToken;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @param float $amount
     * @param string $currency
     */
    public function __construct(float $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * Returns Formatted Amount.
     * Formatted monetary amount
     */
    public function getFormattedAmount(): ?string
    {
        return $this->formattedAmount;
    }

    /**
     * Sets Formatted Amount.
     * Formatted monetary amount
     *
     * @maps formattedAmount
     */
    public function setFormattedAmount(?string $formattedAmount): void
    {
        $this->formattedAmount = $formattedAmount;
    }

    /**
     * Returns Amount.
     * Amount of the transfer in the specified currency.
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount of the transfer in the specified currency.
     *
     * @required
     * @maps amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     * Currency code type for the object
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * Currency code type for the object
     *
     * @required
     * @maps currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Source Token.
     * Unique identifier representing the source of funds.
     */
    public function getSourceToken(): ?string
    {
        return $this->sourceToken;
    }

    /**
     * Sets Source Token.
     * Unique identifier representing the source of funds.
     *
     * @maps sourceToken
     */
    public function setSourceToken(?string $sourceToken): void
    {
        $this->sourceToken = $sourceToken;
    }

    /**
     * Returns Destination Token.
     * Unique identifier representing the destination of funds.
     */
    public function getDestinationToken(): ?string
    {
        return $this->destinationToken;
    }

    /**
     * Sets Destination Token.
     * Unique identifier representing the destination of funds.
     *
     * @maps destinationToken
     */
    public function setDestinationToken(?string $destinationToken): void
    {
        $this->destinationToken = $destinationToken;
    }

    /**
     * Returns Created On.
     * Time at which the object was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Time at which the object was created.
     *
     * @maps createdOn
     * @factory \PQAPIV2Lib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Token.
     * Token representing the resource, prefixed with <i>user-</i>, <i>dest-</i>, <i>xfer-</i>, <i>acct-
     * </i>, <i>pmnt-</i>, or <i>docu-</i>.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * Token representing the resource, prefixed with <i>user-</i>, <i>dest-</i>, <i>xfer-</i>, <i>acct-
     * </i>, <i>pmnt-</i>, or <i>docu-</i>.
     *
     * @maps token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    /**
     * Returns Status.
     * Current status of a transfer
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Current status of a transfer
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->formattedAmount)) {
            $json['formattedAmount']  = $this->formattedAmount;
        }
        $json['amount']               = $this->amount;
        $json['currency']             = $this->currency;
        if (isset($this->sourceToken)) {
            $json['sourceToken']      = $this->sourceToken;
        }
        if (isset($this->destinationToken)) {
            $json['destinationToken'] = $this->destinationToken;
        }
        if (isset($this->createdOn)) {
            $json['createdOn']        = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->token)) {
            $json['token']            = $this->token;
        }
        if (isset($this->status)) {
            $json['status']           = $this->status;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
