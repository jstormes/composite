<?php

declare(strict_types=1);

namespace App\Application\Collection;

use InvalidArgumentException;

use ArrayObject;

class arrayOfNode extends ArrayObject
{
    public function append(mixed $value): void
    {
        if (!$value instanceof Node) {
            throw new InvalidArgumentException('$value must be instance of ' . Node::class);
        }
        parent::append($value);
    }
}