<?php

declare(strict_types=1);

namespace App\Application\Collection;

class NodeRepository
{
    private ?int $treeId;  // TODO: treeId could be root node id

    private ?Node $rootNode;

    public function load(int $treeId): Node
    {
        $this->treeId = $treeId;
        return new Node();
    }

    public function save(Node $rootNode): int
    {
        return 0;
    }

    // Search criteria could use ORM mapping to loosely couple the contents to the node.
    public function search(?object $criteria, int $page=0, int $pageSize=25 ): object
    {
        return new class(){};
    }

}