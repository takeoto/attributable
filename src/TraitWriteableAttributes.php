<?php

declare(strict_types=1);

namespace Takeoto\Attributable;

trait TraitWriteableAttributes
{
    /**
     * @var array<string,mixed>
     */
    private array $attributes;

    /**
     * @see \Takeoto\Attributable\Contract\WritableAttributesInterface::setAttr()
     */
    public function setAttr(string $name, $value)
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    /**
     * @see \Takeoto\Attributable\Contract\WritableAttributesInterface::unsetAttr()
     */
    public function unsetAttr(string $name): void
    {
        unset($this->attributes[$name]);
    }
}