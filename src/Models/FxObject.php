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
 * Currency conversion object details
 */
class FxObject implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $destinationAmount;

    /**
     * @var string|null
     */
    private $destinationCurrency;

    /**
     * @var float|null
     */
    private $sourceAmount;

    /**
     * @var string|null
     */
    private $sourceCurrency;

    /**
     * @var float|null
     */
    private $rate;

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
     * Returns Rate.
     * Exchange rate
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }

    /**
     * Sets Rate.
     * Exchange rate
     *
     * @maps rate
     */
    public function setRate(?float $rate): void
    {
        $this->rate = $rate;
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
        if (isset($this->destinationAmount)) {
            $json['destinationAmount']   = $this->destinationAmount;
        }
        if (isset($this->destinationCurrency)) {
            $json['destinationCurrency'] = $this->destinationCurrency;
        }
        if (isset($this->sourceAmount)) {
            $json['sourceAmount']        = $this->sourceAmount;
        }
        if (isset($this->sourceCurrency)) {
            $json['sourceCurrency']      = $this->sourceCurrency;
        }
        if (isset($this->rate)) {
            $json['rate']                = $this->rate;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
