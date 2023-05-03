<?php

namespace Takeoto\Attributable\Contract;

interface WritableAttributesInterface
{
    public function setAttr(string $name, mixed $value): static;
    public function unsetAttr(string $name): void;
}