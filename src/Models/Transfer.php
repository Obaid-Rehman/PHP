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
 * Description of the transfer request
 */
class Transfer implements \JsonSerializable
{
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
     * @var float|null
     */
    private $destinationAmount;

    /**
     * @var string|null
     */
    private $destinationCurrency;

    /**
     * @var string|null
     */
    private $clientTransferId;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var float|null
     */
    private $sourceAmount;

    /**
     * @var string|null
     */
    private $sourceCurrency;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var FxObject|null
     */
    private $fx;

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
     * Returns Destination Amount.
     * Amount transferred to the destination
     */
    public function getDestinationAmount(): ?float
    {
        return $this->destinationAmount;
    }

    /**
     * Sets Destination Amount.
     * Amount transferred to the destination
     *
     * @maps destinationAmount
     */
    public function setDestinationAmount(?float $destinationAmount): void
    {
        $this->destinationAmount = $destinationAmount;
    }

    /**
     * Returns Destination Currency.
     * Currency code type for the object
     */
    public function getDestinationCurrency(): ?string
    {
        return $this->destinationCurrency;
    }

    /**
     * Sets Destination Currency.
     * Currency code type for the object
     *
     * @maps destinationCurrency
     */
    public function setDestinationCurrency(?string $destinationCurrency): void
    {
        $this->destinationCurrency = $destinationCurrency;
    }

    /**
     * Returns Client Transfer Id.
     * Unique value provided by the client for the transfer.
     */
    public function getClientTransferId(): ?string
    {
        return $this->clientTransferId;
    }

    /**
     * Sets Client Transfer Id.
     * Unique value provided by the client for the transfer.
     *
     * @maps clientTransferId
     */
    public function setClientTransferId(?string $clientTransferId): void
    {
        $this->clientTransferId = $clientTransferId;
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
     * Returns Source Amount.
     * Amount of the transfer in the specified currency.
     */
    public function getSourceAmount(): ?float
    {
        return $this->sourceAmount;
    }

    /**
     * Sets Source Amount.
     * Amount of the transfer in the specified currency.
     *
     * @maps sourceAmount
     */
    public function setSourceAmount(?float $sourceAmount): void
    {
        $this->sourceAmount = $sourceAmount;
    }

    /**
     * Returns Source Currency.
     * Currency code type for the object
     */
    public function getSourceCurrency(): ?string
    {
        return $this->sourceCurrency;
    }

    /**
     * Sets Source Currency.
     * Currency code type for the object
     *
     * @maps sourceCurrency
     */
    public function setSourceCurrency(?string $sourceCurrency): void
    {
        $this->sourceCurrency = $sourceCurrency;
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
     * Returns Fx.
     * Currency conversion object details
     */
    public function getFx(): ?FxObject
    {
        return $this->fx;
    }

    /**
     * Sets Fx.
     * Currency conversion object details
     *
     * @maps fx
     */
    public function setFx(?FxObject $fx): void
    {
        $this->fx = $fx;
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
        if (isset($this->sourceToken)) {
            $json['sourceToken']         = $this->sourceToken;
        }
        if (isset($this->destinationToken)) {
            $json['destinationToken']    = $this->destinationToken;
        }
        if (isset($this->notes)) {
            $json['notes']               = $this->notes;
        }
        if (isset($this->memo)) {
            $json['memo']                = $this->memo;
        }
        if (isset($this->destinationAmount)) {
            $json['destinationAmount']   = $this->destinationAmount;
        }
        if (isset($this->destinationCurrency)) {
            $json['destinationCurrency'] = $this->destinationCurrency;
        }
        if (isset($this->clientTransferId)) {
            $json['clientTransferId']    = $this->clientTransferId;
        }
        if (isset($this->token)) {
            $json['token']               = $this->token;
        }
        if (isset($this->sourceAmount)) {
            $json['sourceAmount']        = $this->sourceAmount;
        }
        if (isset($this->sourceCurrency)) {
            $json['sourceCurrency']      = $this->sourceCurrency;
        }
        if (isset($this->status)) {
            $json['status']              = $this->status;
        }
        if (isset($this->fx)) {
            $json['fx']                  = $this->fx;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
