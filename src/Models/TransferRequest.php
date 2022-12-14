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
 * Request for the transfer
 */
class TransferRequest implements \JsonSerializable
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
     * @var string|null
     */
    private $clientTransferId;

    /**
     * @var float|null
     */
    private $destinationAmount;

    /**
     * @var string|null
     */
    private $destinationCurrency;

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
        if (isset($this->clientTransferId)) {
            $json['clientTransferId']    = $this->clientTransferId;
        }
        if (isset($this->destinationAmount)) {
            $json['destinationAmount']   = $this->destinationAmount;
        }
        if (isset($this->destinationCurrency)) {
            $json['destinationCurrency'] = $this->destinationCurrency;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
