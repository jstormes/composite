<?php

declare(strict_types=1);

namespace App\Application\Collection;

/***
 * Table:
 * id, parentId, rootId, position, contentObjectType, contentId.
 *
 * ORM join by object?  object–relational impedance mismatch
 */



class NodeRepository
{
    private ?int $treeId;  // TODO: treeId could be root node id?

    private ?Node $rootNode;

    public function load(int $treeId): Node
    {
        $this->treeId = $treeId;
        return new Node();
    }

    public function save(Node $rootNode): void
    {
        // Calls save on node contents.  (ORM clean dirty)
    }

    // Search criteria could use ORM mapping to loosely couple the contents to the node.
    // Only returns array of root objects
    public function search(?object $criteria, int $page=0, int $pageSize=25 ): arrayOfNode
    {
        return new arrayOfNode();
    }

}