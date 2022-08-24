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
 * Response to the prepaid card data request
 */
class PrepaidCardDataResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cardImage;

    /**
     * @var float|null
     */
    private $cardNumber;

    /**
     * @var string|null
     */
    private $cvvNumber;

    /**
     * @var string|null
     */
    private $expiration;

    /**
     * @var string|null
     */
    private $nameOnCard;

    /**
     * @var string|null
     */
    private $side;

    /**
     * @var string|null
     */
    private $token;

    /**
     * Returns Card Image.
     */
    public function getCardImage(): ?string
    {
        return $this->cardImage;
    }

    /**
     * Sets Card Image.
     *
     * @maps cardImage
     */
    public function setCardImage(?string $cardImage): void
    {
        $this->cardImage = $cardImage;
    }

    /**
     * Returns Card Number.
     */
    public function getCardNumber(): ?float
    {
        return $this->cardNumber;
    }

    /**
     * Sets Card Number.
     *
     * @maps cardNumber
     */
    public function setCardNumber(?float $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * Returns Cvv Number.
     */
    public function getCvvNumber(): ?string
    {
        return $this->cvvNumber;
    }

    /**
     * Sets Cvv Number.
     *
     * @maps cvvNumber
     */
    public function setCvvNumber(?string $cvvNumber): void
    {
        $this->cvvNumber = $cvvNumber;
    }

    /**
     * Returns Expiration.
     */
    public function getExpiration(): ?string
    {
        return $this->expiration;
    }

    /**
     * Sets Expiration.
     *
     * @maps expiration
     */
    public function setExpiration(?string $expiration): void
    {
        $this->expiration = $expiration;
    }

    /**
     * Returns Name on Card.
     */
    public function getNameOnCard(): ?string
    {
        return $this->nameOnCard;
    }

    /**
     * Sets Name on Card.
     *
     * @maps nameOnCard
     */
    public function setNameOnCard(?string $nameOnCard): void
    {
        $this->nameOnCard = $nameOnCard;
    }

    /**
     * Returns Side.
     */
    public function getSide(): ?string
    {
        return $this->side;
    }

    /**
     * Sets Side.
     *
     * @maps side
     */
    public function setSide(?string $side): void
    {
        $this->side = $side;
    }

    /**
     * Returns Token.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     *
     * @maps token
     */
    public function setToken(?string $token): void
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
        if (isset($this->cardImage)) {
            $json['cardImage']  = $this->cardImage;
        }
        if (isset($this->cardNumber)) {
            $json['cardNumber'] = $this->cardNumber;
        }
        if (isset($this->cvvNumber)) {
            $json['cvvNumber']  = $this->cvvNumber;
        }
        if (isset($this->expiration)) {
            $json['expiration'] = $this->expiration;
        }
        if (isset($this->nameOnCard)) {
            $json['nameOnCard'] = $this->nameOnCard;
        }
        if (isset($this->side)) {
            $json['side']       = $this->side;
        }
        if (isset($this->token)) {
            $json['token']      = $this->token;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
