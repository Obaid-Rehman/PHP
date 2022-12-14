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
 * Determines whether the quote is automatically accepted or if a POST utilizing the token for the
 * quote is required.
 */
class AutoAcceptQuote implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $autoAcceptQuote;

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
        if (isset($this->autoAcceptQuote)) {
            $json['autoAcceptQuote'] = $this->autoAcceptQuote;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
