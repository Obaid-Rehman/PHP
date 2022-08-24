<?php

declare(strict_types=1);

/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib\Models;

use stdClass;

class UserKycInformation implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $driverLicenseId;

    /**
     * @var string|null
     */
    private $passportId;

    /**
     * @var string|null
     */
    private $governmentIdType;

    /**
     * @var string|null
     */
    private $governmentId;

    /**
     * Returns Driver License Id.
     * User's driver's license number
     */
    public function getDriverLicenseId(): ?string
    {
        return $this->driverLicenseId;
    }

    /**
     * Sets Driver License Id.
     * User's driver's license number
     *
     * @maps driverLicenseId
     */
    public function setDriverLicenseId(?string $driverLicenseId): void
    {
        $this->driverLicenseId = $driverLicenseId;
    }

    /**
     * Returns Passport Id.
     * User's passport number
     */
    public function getPassportId(): ?string
    {
        return $this->passportId;
    }

    /**
     * Sets Passport Id.
     * User's passport number
     *
     * @maps passportId
     */
    public function setPassportId(?string $passportId): void
    {
        $this->passportId = $passportId;
    }

    /**
     * Returns Government Id Type.
     * User's government ID type
     */
    public function getGovernmentIdType(): ?string
    {
        return $this->governmentIdType;
    }

    /**
     * Sets Government Id Type.
     * User's government ID type
     *
     * @maps governmentIdType
     */
    public function setGovernmentIdType(?string $governmentIdType): void
    {
        $this->governmentIdType = $governmentIdType;
    }

    /**
     * Returns Government Id.
     * User's government ID number, such as a <i>SSN</i>, <i>EIN</i>, or <i>SIN</i>
     */
    public function getGovernmentId(): ?string
    {
        return $this->governmentId;
    }

    /**
     * Sets Government Id.
     * User's government ID number, such as a <i>SSN</i>, <i>EIN</i>, or <i>SIN</i>
     *
     * @maps governmentId
     */
    public function setGovernmentId(?string $governmentId): void
    {
        $this->governmentId = $governmentId;
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
        if (isset($this->driverLicenseId)) {
            $json['driverLicenseId']  = $this->driverLicenseId;
        }
        if (isset($this->passportId)) {
            $json['passportId']       = $this->passportId;
        }
        if (isset($this->governmentIdType)) {
            $json['governmentIdType'] = $this->governmentIdType;
        }
        if (isset($this->governmentId)) {
            $json['governmentId']     = $this->governmentId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
