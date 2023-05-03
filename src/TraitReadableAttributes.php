<?php

namespace Takeoto\Attributable;

trait TraitReadableAttributes
{
    /**
     * @var array<string,mixed>
     */
    private array $attributes;

    public function getAttr(string $name): mixed
    {
        if (!isset($this->attributes[$name])) {
            throw new \Exception(sprintf('Attribute "%" does not exists!', $name));
        }

        return $this->attributes[$name];
    }

    public function hasAttr(string $name): bool
    {
        return isset($this->attributes[$name]);
    }

    public function getAttrs(): array
    {
        return $this->attributes;
    }
}
