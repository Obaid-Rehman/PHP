<?php

declare(strict_types=1);

/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib\Models;

use stdClass;

/**
 * Base class for the payment
 */
class PaymentBase implements \JsonSerializable
{
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
     * @var string|null
     */
    private $notes;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $purpose;

    /**
     * @var string|null
     */
    private $clientPaymentId;

    /**
     * @var bool|null
     */
    private $autoAcceptQuote;

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
     * Returns Notes.
     * Optional comments visible to the user.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Sets Notes.
     * Optional comments visible to the user.
     *
     * @maps notes
     */
    public function setNotes(?string $notes): void
    {
        $this->notes = $notes;
    }

    /**
     * Returns Memo.
     * Optional internal memo not visible to the user.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * Optional internal memo not visible to the user.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Purpose.
     * Used to identify the purpose of a payment and impacts reporting and calculated taxable earnings (if
     * utilizing tax services)
     */
    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    /**
     * Sets Purpose.
     * Used to identify the purpose of a payment and impacts reporting and calculated taxable earnings (if
     * utilizing tax services)
     *
     * @maps purpose
     */
    public function setPurpose(?string $purpose): void
    {
        $this->purpose = $purpose;
    }

    /**
     * Returns Client Payment Id.
     * Unique value provided by the client for the payment.
     */
    public function getClientPaymentId(): ?string
    {
        return $this->clientPaymentId;
    }

    /**
     * Sets Client Payment Id.
     * Unique value provided by the client for the payment.
     *
     * @maps clientPaymentId
     */
    public function setClientPaymentId(?string $clientPaymentId): void
    {
        $this->clientPaymentId = $clientPaymentId;
    }

    /**
     * Returns Auto Accept Quote.
     * Determines whether the quote is automatically accepted or if a POST utilizing the token for the
     * quote is required.
     */
    public function getAutoAcceptQuote(): ?bool
    {
        return $this->autoAcceptQuote;
    }

    /**
     * Sets Auto Accept Quote.
     * Determines whether the quote is automatically accepted or if a POST utilizing the token for the
     * quote is required.
     *
     * @maps autoAcceptQuote
     */
    public function setAutoAcceptQuote(?bool $autoAcceptQuote): void
    {
        $this->autoAcceptQuote = $autoAcceptQuote;
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
        $json['amount']               = $this->amount;
        $json['currency']             = $this->currency;
        if (isset($this->sourceToken)) {
            $json['sourceToken']      = $this->sourceToken;
        }
        if (isset($this->destinationToken)) {
            $json['destinationToken'] = $this->destinationToken;
        }
        if (isset($this->notes)) {
            $json['notes']            = $this->notes;
        }
        if (isset($this->memo)) {
            $json['memo']             = $this->memo;
        }
        if (isset($this->purpose)) {
            $json['purpose']          = $this->purpose;
        }
        if (isset($this->clientPaymentId)) {
            $json['clientPaymentId']  = $this->clientPaymentId;
        }
        if (isset($this->autoAcceptQuote)) {
            $json['autoAcceptQuote']  = $this->autoAcceptQuote;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
