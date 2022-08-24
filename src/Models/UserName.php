<?php

declare(strict_types=1);

/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib\Models;

use stdClass;

class UserName implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * Returns First Name.
     * User's first name. <i>Required</i> if the user is registered as an individual.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * User's first name. <i>Required</i> if the user is registered as an individual.
     *
     * @maps firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * User's last name. <i>Required</i> if the user is registered as an individual.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * User's last name. <i>Required</i> if the user is registered as an individual.
     *
     * @maps lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
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
        if (isset($this->firstName)) {
            $json['firstName'] = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['lastName']  = $this->lastName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
