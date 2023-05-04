# attributable
### Abstraction for objects with custom attributes
#### Usage
```php
use Takeoto\Attributable\Contract\ReadableAttributesInterface;
use Takeoto\Attributable\Contract\WritableAttributesInterface;
use Takeoto\Attributable\TraitReadableAttributes;
use Takeoto\Attributable\TraitWriteableAttributes;

# --- Readable attributes

class SomeClassReadable implements ReadableAttributesInterface
{
    use TraitReadableAttributes;

    /**
     * @param mixed[] $attributes
     */
    public function __construct(private array $attributes = [])
    {
    }

    # some class logic ...
}

$object = new SomeClassReadable([
    'someAttribute' => 'someValue',
    'someAttribute1' => 'someValue1',
]);

if ($object->hasAttr('someAttribute')) { # true
    echo $object->getAttr('someAttribute'); # "someValue"
}

$object->getAttrs(); # [ 'someAttribute' => 'someValue', 'someAttribute1' => 'someValue1' ]
$object->getAttr('undefinedAttribute'); # throws an exception

# --- Writable attributes

class SomeClassWritable implements WritableAttributesInterface
{
    use TraitWriteableAttributes;
    # some class logic ...
}

$object = new SomeClassWritable();
$object->setAttr('someAttribute', 'someValue');
$object->unsetAttr('someAttribute');
```