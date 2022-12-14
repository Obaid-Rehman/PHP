<?php

declare(strict_types=1);

/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib\Models;

use stdClass;

class PrepaidCardDataTokenResponse implements \JsonSerializable
{
    /**
     * @var PrepaidCardDataToken|null
     */
    private $token;

    /**
     * Returns Token.
     * Token assigned to the prepaid card
     */
    public function getToken(): ?PrepaidCardDataToken
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * Token assigned to the prepaid card
     *
     * @maps token
     */
    public function setToken(?PrepaidCardDataToken $token): void
    {
        $this->token = $token;
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
        if (isset($this->token)) {
            $json['token'] = $this->token;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
