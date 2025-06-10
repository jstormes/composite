<?php

declare(strict_types=1);

namespace App\Application\Collection;

class Node
{
    private ?Node $parent;

    private ?int $id;

    private arrayOfNode $children;

    private object $content;

    public function __construct()
    {
        $this->children = new ArrayOfNode();
        $this->parent = null;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParent(): ?Node
    {
        return $this->parent;
    }

    public function setParent(Node $parent): void
    {
        $this->parent = $parent;
    }

    public function addChild(Node $node): void
    {
        $this->children[] = $node;
    }

    public function getChildren(): ArrayOfNode
    {
        return $this->children;
    }

}