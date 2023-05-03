<?php

namespace Takeoto\Attributable\Contract;

interface WritableAttributesInterface
{
    /**
     * Sets the attribute value.
     *
     * @param string $name
     * @param mixed $value
     * @return static
     */
    public function setAttr(string $name, mixed $value): static;

    /**
     * Unsets the attribute value.
     *
     * @param string $name
     * @return void
     */
    public function unsetAttr(string $name): void;
}