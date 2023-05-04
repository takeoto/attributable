<?php

declare(strict_types=1);

namespace Takeoto\Attributable\Contract;

interface ReadableAttributesInterface
{
    /**
     * Gets the attribute by the value.
     *
     * @param string $name
     * @return mixed
     * @throws \Throwable
     */
    public function getAttr(string $name);

    /**
     * Checks the attribute for availability.
     *
     * @param string $name
     * @return bool
     */
    public function hasAttr(string $name): bool;

    /**
     * Gets all available attributes.
     *
     * @return mixed[]
     */
    public function getAttrs(): array;
}