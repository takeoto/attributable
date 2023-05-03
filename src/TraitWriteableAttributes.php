<?php

namespace Takeoto\Attributable;

trait TraitWriteableAttributes
{
    /**
     * @var array<string,mixed>
     */
    private array $attributes;

    public function setAttr(string $name, mixed $value): static
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    public function unsetAttr(string $name): void
    {
        unset($this->attributes[$name]);
    }
}