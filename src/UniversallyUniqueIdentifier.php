<?php

namespace Devorto\UniversallyUniqueIdentifier;

use InvalidArgumentException;

/**
 * Class UniversallyUniqueIdentifier
 *
 * @package Devorto\UniversallyUniqueIdentifier
 */
class UniversallyUniqueIdentifier
{
    /**
     * @var string
     */
    protected $uuid;

    /**
     * GloballyUniqueIdentifier constructor.
     *
     * @param string $uuid
     */
    public function __construct(string $uuid)
    {
        $regex = '/^\{?[A-F0-9]{8}-[A-F0-9]{4}-[A-F0-9]{4}-[A-F0-9]{4}-[A-F0-9]{12}\}?$/i';

        if (preg_match($regex, $uuid) !== 1) {
            throw new InvalidArgumentException('Invalid universally unique identifier provided.');
        }

        $this->uuid = $uuid;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->uuid;
    }
}
