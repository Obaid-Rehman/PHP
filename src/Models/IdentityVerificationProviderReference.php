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
 * Provider reference used for performing identity checks for the provider
 */
class IdentityVerificationProviderReference implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $idvProviderReference;

    /**
     * Returns Idv Provider Reference.
     * IDV provider unique ID for the IDV check performed
     */
    public function getIdvProviderReference(): ?string
    {
        return $this->idvProviderReference;
    }

    /**
     * Sets Idv Provider Reference.
     * IDV provider unique ID for the IDV check performed
     *
     * @maps idvProviderReference
     */
    public function setIdvProviderReference(?string $idvProviderReference): void
    {
        $this->idvProviderReference = $idvProviderReference;
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
        if (isset($this->idvProviderReference)) {
            $json['idvProviderReference'] = $this->idvProviderReference;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}