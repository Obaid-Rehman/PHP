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
 * Three- or four-digit Card Verification Value (CVV) number displayed on the back of a credit or
 * debit card
 */
class Cvv implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cvv;

    /**
     * Returns Cvv.
     * Card Verification Value (CVV) on the credit card or debit card. (3-digit number on VISA®,
     * MasterCard® branded credit and debit cards)
     */
    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    /**
     * Sets Cvv.
     * Card Verification Value (CVV) on the credit card or debit card. (3-digit number on VISA®,
     * MasterCard® branded credit and debit cards)
     *
     * @maps cvv
     */
    public function setCvv(?string $cvv): void
    {
        $this->cvv = $cvv;
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
        if (isset($this->cvv)) {
            $json['cvv'] = $this->cvv;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
