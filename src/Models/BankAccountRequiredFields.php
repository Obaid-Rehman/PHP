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
 * Classifies the required account field objects
 */
class BankAccountRequiredFields implements \JsonSerializable
{
    /**
     * @var BankAccountRequirementFormat|null
     */
    private $format;

    /**
     * @var string|null
     */
    private $requirement;

    /**
     * @var KeyValuePairLanguageTypeString[]|null
     */
    private $description;

    /**
     * @var BankAccountRequirementValidator[]|null
     */
    private $validators;

    /**
     * Returns Format.
     * Classifies the format of the required information for a bank account
     */
    public function getFormat(): ?BankAccountRequirementFormat
    {
        return $this->format;
    }

    /**
     * Sets Format.
     * Classifies the format of the required information for a bank account
     *
     * @maps format
     */
    public function setFormat(?BankAccountRequirementFormat $format): void
    {
        $this->format = $format;
    }

    /**
     * Returns Requirement.
     * Classifies account field types
     */
    public function getRequirement(): ?string
    {
        return $this->requirement;
    }

    /**
     * Sets Requirement.
     * Classifies account field types
     *
     * @maps requirement
     */
    public function setRequirement(?string $requirement): void
    {
        $this->requirement = $requirement;
    }

    /**
     * Returns Description.
     * Localized requirement description for display purposes
     *
     * @return KeyValuePairLanguageTypeString[]|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Localized requirement description for display purposes
     *
     * @maps description
     *
     * @param KeyValuePairLanguageTypeString[]|null $description
     */
    public function setDescription(?array $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Validators.
     *
     * @return BankAccountRequirementValidator[]|null
     */
    public function getValidators(): ?array
    {
        return $this->validators;
    }

    /**
     * Sets Validators.
     *
     * @maps validators
     *
     * @param BankAccountRequirementValidator[]|null $validators
     */
    public function setValidators(?array $validators): void
    {
        $this->validators = $validators;
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
        if (isset($this->format)) {
            $json['format']      = $this->format;
        }
        if (isset($this->requirement)) {
            $json['requirement'] = $this->requirement;
        }
        if (isset($this->description)) {
            $json['description'] = $this->description;
        }
        if (isset($this->validators)) {
            $json['validators']  = $this->validators;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}