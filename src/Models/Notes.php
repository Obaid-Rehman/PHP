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
 * Optional comments visible to the user
 */
class Notes implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $notes;

    /**
     * Returns Notes.
     * Optional comments visible to the user.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Sets Notes.
     * Optional comments visible to the user.
     *
     * @maps notes
     */
    public function setNotes(?string $notes): void
    {
        $this->notes = $notes;
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
        if (isset($this->notes)) {
            $json['notes'] = $this->notes;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
