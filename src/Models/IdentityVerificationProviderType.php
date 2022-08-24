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
 * Provider type of verification that can be used for performing identity checks
 */
class IdentityVerificationProviderType implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $idvProvider;

    /**
     * Returns Idv Provider.
     * Provider types of verification that can be used for performing identity checks
     */
    public function getIdvProvider(): ?string
    {
        return $this->idvProvider;
    }

    /**
     * Sets Idv Provider.
     * Provider types of verification that can be used for performing identity checks
     *
     * @maps idvProvider
     */
    public function setIdvProvider(?string $idvProvider): void
    {
        $this->idvProvider = $idvProvider;
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
        if (isset($this->idvProvider)) {
            $json['idvProvider'] = $this->idvProvider;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}