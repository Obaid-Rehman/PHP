<?php

declare(strict_types=1);

/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib\Models;

use stdClass;

class PrepaidCardPin implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cardPin;

    /**
     * Returns Card Pin.
     * Card PIN for ATM and Debit usage
     */
    public function getCardPin(): ?string
    {
        return $this->cardPin;
    }

    /**
     * Sets Card Pin.
     * Card PIN for ATM and Debit usage
     *
     * @maps cardPin
     */
    public function setCardPin(?string $cardPin): void
    {
        $this->cardPin = $cardPin;
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
        if (isset($this->cardPin)) {
            $json['cardPin'] = $this->cardPin;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
