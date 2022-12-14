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
 * Unique identifier representing the destination of funds.
 */
class DestinationToken implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $destinationToken;

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
        if (isset($this->destinationToken)) {
            $json['destinationToken'] = $this->destinationToken;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
