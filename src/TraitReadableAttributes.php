<?php

declare(strict_types=1);

namespace Takeoto\Attributable;

trait TraitReadableAttributes
{
    /**
     * @var array<string,mixed>
     */
    private array $attributes;

    /**
     * @see Takeoto\Attributable\Contract\ReadableAttributesInterface::getAttr()
     */
    public function getAttr(string $name): mixed
    {
        if (!isset($this->attributes[$name])) {
            throw new \RuntimeException(sprintf('Attribute "%" does not exists!', $name));
        }

        return $this->attributes[$name];
    }

    /**
     * @see Takeoto\Attributable\Contract\ReadableAttributesInterface::hasAttr()
     */
    public function hasAttr(string $name): bool
    {
        return isset($this->attributes[$name]);
    }

    /**
     * @see Takeoto\Attributable\Contract\ReadableAttributesInterface::getAttrs()
     */
    public function getAttrs(): array
    {
        return $this->attributes;
    }
}
