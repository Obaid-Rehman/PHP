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

class PrepaidCard implements \JsonSerializable
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
     * @var string
     */
    private $country;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $cardPersonalization;

    /**
     * @var string|null
     */
    private $cardPackage;

    /**
     * @var string|null
     */
    private $cardNetwork;

    /**
     * @var \DateTime|null
     */
    private $expires;

    /**
     * @var string|null
     */
    private $cardNumber;

    /**
     * @var string|null
     */
    private $cvv;

    /**
     * @param string $country
     */
    public function __construct(string $country)
    {
        $this->country = $country;
    }

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
     * Current status of the prepaid card
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Current status of the prepaid card
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
     * Returns Country.
     * Two-digit country code types
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * Two-digit country code types
     *
     * @required
     * @maps country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Currency.
     * Currency code type for the object
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * Currency code type for the object
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Card Personalization.
     * Specifies a card is <i>Personalized</i> or <i>Non-personalized</i> (i.e., issued to Preferred
     * Customer)
     */
    public function getCardPersonalization(): ?string
    {
        return $this->cardPersonalization;
    }

    /**
     * Sets Card Personalization.
     * Specifies a card is <i>Personalized</i> or <i>Non-personalized</i> (i.e., issued to Preferred
     * Customer)
     *
     * @maps cardPersonalization
     */
    public function setCardPersonalization(?string $cardPersonalization): void
    {
        $this->cardPersonalization = $cardPersonalization;
    }

    /**
     * Returns Card Package.
     * Package for the card being displayed (<i>Virtual<,i>) or <i>Produced (physical)</i>
     */
    public function getCardPackage(): ?string
    {
        return $this->cardPackage;
    }

    /**
     * Sets Card Package.
     * Package for the card being displayed (<i>Virtual<,i>) or <i>Produced (physical)</i>
     *
     * @maps cardPackage
     */
    public function setCardPackage(?string $cardPackage): void
    {
        $this->cardPackage = $cardPackage;
    }

    /**
     * Returns Card Network.
     * Major credit card network types
     */
    public function getCardNetwork(): ?string
    {
        return $this->cardNetwork;
    }

    /**
     * Sets Card Network.
     * Major credit card network types
     *
     * @maps cardNetwork
     */
    public function setCardNetwork(?string $cardNetwork): void
    {
        $this->cardNetwork = $cardNetwork;
    }

    /**
     * Returns Expires.
     * Quote expiration, ISO-8601 format, UTC by default unless overridden.
     */
    public function getExpires(): ?\DateTime
    {
        return $this->expires;
    }

    /**
     * Sets Expires.
     * Quote expiration, ISO-8601 format, UTC by default unless overridden.
     *
     * @maps expires
     * @factory \PQAPIV2Lib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpires(?\DateTime $expires): void
    {
        $this->expires = $expires;
    }

    /**
     * Returns Card Number.
     * Masked card number with only the first 6 and last 4 digits visible
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * Sets Card Number.
     * Masked card number with only the first 6 and last 4 digits visible
     *
     * @maps cardNumber
     */
    public function setCardNumber(?string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * Returns Cvv.
     * Card Verification Value (CVV) on the credit card or debit card. (3-digit number on VISA®,
     * MasterCard® branded credit and debit cards)
     */
    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    /**
     * Sets Cvv.
     * Card Verification Value (CVV) on the credit card or debit card. (3-digit number on VISA®,
     * MasterCard® branded credit and debit cards)
     *
     * @maps cvv
     */
    public function setCvv(?string $cvv): void
    {
        $this->cvv = $cvv;
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
            $json['token']               = $this->token;
        }
        if (isset($this->status)) {
            $json['status']              = $this->status;
        }
        if (isset($this->createdOn)) {
            $json['createdOn']           = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        $json['country']                 = $this->country;
        if (isset($this->currency)) {
            $json['currency']            = $this->currency;
        }
        if (isset($this->cardPersonalization)) {
            $json['cardPersonalization'] = $this->cardPersonalization;
        }
        if (isset($this->cardPackage)) {
            $json['cardPackage']         = $this->cardPackage;
        }
        if (isset($this->cardNetwork)) {
            $json['cardNetwork']         = $this->cardNetwork;
        }
        if (isset($this->expires)) {
            $json['expires']             = DateTimeHelper::toRfc3339DateTime($this->expires);
        }
        if (isset($this->cardNumber)) {
            $json['cardNumber']          = $this->cardNumber;
        }
        if (isset($this->cvv)) {
            $json['cvv']                 = $this->cvv;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}