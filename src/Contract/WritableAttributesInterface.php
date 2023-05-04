<?php

declare(strict_types=1);

namespace Takeoto\Attributable\Contract;

interface WritableAttributesInterface
{
    /**
     * Sets the attribute value.
     *
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function setAttr(string $name, $value);

    /**
     * Unsets the attribute value.
     *
     * @param string $name
     * @return void
     */
    public function unsetAttr(string $name): void;
}