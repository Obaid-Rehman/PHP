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

/**
 * Unique identifier for the bank account
 */
class BankAccount implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var string|null
     */
    private $bankAccountOwnershipType;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var KeyValuePairBankFieldTypesString[]|null
     */
    private $fields;

    /**
     * @var string|null
     */
    private $bankCurrency;

    /**
     * @var string|null
     */
    private $bankCountry;

    /**
     * @var string|null
     */
    private $description;

    /**
     * Returns Token.
     * Token representing the resource, prefixed with <i>user-</i>, <i>dest-</i>, <i>xfer-</i>, <i>acct-
     * </i>, <i>pmnt-</i>, or <i>docu-</i>.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * Token representing the resource, prefixed with <i>user-</i>, <i>dest-</i>, <i>xfer-</i>, <i>acct-
     * </i>, <i>pmnt-</i>, or <i>docu-</i>.
     *
     * @maps token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    /**
     * Returns Status.
     * Current verification status type of the bank account
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Current verification status type of the bank account
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Created On.
     * Time at which the object was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Time at which the object was created.
     *
     * @maps createdOn
     * @factory \PQAPIV2Lib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Bank Account Ownership Type.
     * Account ownership types
     */
    public function getBankAccountOwnershipType(): ?string
    {
        return $this->bankAccountOwnershipType;
    }

    /**
     * Sets Bank Account Ownership Type.
     * Account ownership types
     *
     * @maps bankAccountOwnershipType
     */
    public function setBankAccountOwnershipType(?string $bankAccountOwnershipType): void
    {
        $this->bankAccountOwnershipType = $bankAccountOwnershipType;
    }

    /**
     * Returns Type.
     * Financial purpose of the bank account (<i>Savings</i>, <i>Investment</i>)
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Financial purpose of the bank account (<i>Savings</i>, <i>Investment</i>)
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Fields.
     *
     * @return KeyValuePairBankFieldTypesString[]|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * Sets Fields.
     *
     * @maps fields
     *
     * @param KeyValuePairBankFieldTypesString[]|null $fields
     */
    public function setFields(?array $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * Returns Bank Currency.
     * Currency code type for the object
     */
    public function getBankCurrency(): ?string
    {
        return $this->bankCurrency;
    }

    /**
     * Sets Bank Currency.
     * Currency code type for the object
     *
     * @maps bankCurrency
     */
    public function setBankCurrency(?string $bankCurrency): void
    {
        $this->bankCurrency = $bankCurrency;
    }

    /**
     * Returns Bank Country.
     * Two-digit country code types
     */
    public function getBankCountry(): ?string
    {
        return $this->bankCountry;
    }

    /**
     * Sets Bank Country.
     * Two-digit country code types
     *
     * @maps bankCountry
     */
    public function setBankCountry(?string $bankCountry): void
    {
        $this->bankCountry = $bankCountry;
    }

    /**
     * Returns Description.
     * User-supplied description of the bank account for reference
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * User-supplied description of the bank account for reference
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
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
            $json['token']                    = $this->token;
        }
        if (isset($this->status)) {
            $json['status']                   = $this->status;
        }
        if (isset($this->createdOn)) {
            $json['createdOn']                = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->bankAccountOwnershipType)) {
            $json['bankAccountOwnershipType'] = $this->bankAccountOwnershipType;
        }
        if (isset($this->type)) {
            $json['type']                     = $this->type;
        }
        if (isset($this->fields)) {
            $json['fields']                   = $this->fields;
        }
        if (isset($this->bankCurrency)) {
            $json['bankCurrency']             = $this->bankCurrency;
        }
        if (isset($this->bankCountry)) {
            $json['bankCountry']              = $this->bankCountry;
        }
        if (isset($this->description)) {
            $json['description']              = $this->description;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
