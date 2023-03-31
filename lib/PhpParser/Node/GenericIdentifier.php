<?php declare(strict_types=1);

namespace PhpParser\Node;

/**
 * Represents a generic identifier.
 */
class GenericIdentifier extends Identifier
{
    /** @var array<Identifier> */
    public $args;

    /**
     * Constructs a generic identifier node.
     *
     * @param string $name              Identifier as string
     * @param array<Identifier> $args   Generic args
     * @param array  $attributes        Additional attributes
     */
    public function __construct(string $name, array $args, array $attributes = []) {
        parent::__construct($name, $attributes);
        $this->args = $args;
    }

    public function getType() : string {
        return 'GenericIdentifier';
    }

    public function getSubNodeNames() : array {
        return array_merge(parent::getSubNodeNames(), ['args']);
    }
}
