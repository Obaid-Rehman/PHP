<?php

declare(strict_types=1);

/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib\Models;

use PQAPIV2Lib\Utils\DateTimeHelper;
use stdClass;

class Dob implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $dateOfBirth;

    /**
     * Returns Date of Birth.
     * User's date of birth
     */
    public function getDateOfBirth(): ?\DateTime
    {
        return $this->dateOfBirth;
    }

    /**
     * Sets Date of Birth.
     * User's date of birth
     *
     * @maps dateOfBirth
     * @factory \PQAPIV2Lib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDateOfBirth(?\DateTime $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
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
        if (isset($this->dateOfBirth)) {
            $json['dateOfBirth'] = DateTimeHelper::toSimpleDate($this->dateOfBirth);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
