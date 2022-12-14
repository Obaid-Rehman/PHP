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
 * Preferred language for the user's account. <i>Defaults to English</i>
 */
class Language implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $language;

    /**
     * Returns Language.
     * Language type in IETF's BCP 47 format
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Sets Language.
     * Language type in IETF's BCP 47 format
     *
     * @maps language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
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
        if (isset($this->language)) {
            $json['language'] = $this->language;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
