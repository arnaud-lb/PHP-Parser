<?php declare(strict_types=1);

namespace PhpParser\Node;

/**
 * Represents a generic type.
 */
class GenericType extends ComplexType
{
    /** @var Identifier */
    public $type;

    /** @var array<Identifier> */
    public $args;

    /**
     * Constructs a generic type node.
     *
     * @param Identifier $type          Main type
     * @param array<Identifier> $args   Generic args
     * @param array $attributes         Additional attributes
     */
    public function __construct(Identifier $type, array $args, array $attributes = []) {
        $this->attributes = $attributes;
        $this->type = $type;
        $this->args = $args;
    }

    public function getType() : string {
        return 'GenericType';
    }

    public function getSubNodeNames() : array {
        return ['type', 'args'];
    }
}
