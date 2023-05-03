<?php

namespace Takeoto\Attributable\Contract;

interface ReadableAttributesInterface
{
    /**
     * @param string $name
     * @return mixed
     * @throws \Throwable
     */
    public function getAttr(string $name): mixed;

    public function hasAttr(string $name): bool;

    /**
     * @return mixed[]
     */
    public function getAttrs(): array;
}