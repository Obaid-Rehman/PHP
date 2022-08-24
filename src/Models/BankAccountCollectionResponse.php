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
 * Collection response to the bank account request
 */
class BankAccountCollectionResponse implements \JsonSerializable
{
    /**
     * @var BankAccountResponse[]|null
     */
    private $payload;

    /**
     * @var HaetosParams[]|null
     */
    private $links;

    /**
     * Returns Payload.
     *
     * @return BankAccountResponse[]|null
     */
    public function getPayload(): ?array
    {
        return $this->payload;
    }

    /**
     * Sets Payload.
     *
     * @maps payload
     *
     * @param BankAccountResponse[]|null $payload
     */
    public function setPayload(?array $payload): void
    {
        $this->payload = $payload;
    }

    /**
     * Returns Links.
     *
     * @return HaetosParams[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Sets Links.
     *
     * @maps links
     *
     * @param HaetosParams[]|null $links
     */
    public function setLinks(?array $links): void
    {
        $this->links = $links;
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
        if (isset($this->payload)) {
            $json['payload'] = $this->payload;
        }
        if (isset($this->links)) {
            $json['links']   = $this->links;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}