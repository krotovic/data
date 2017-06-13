<?php
/**
 * @author  Lukáš
 * @version 1.0.0
 * @package krotovic-data
 */

namespace Krotovic\Data\Queue;


class Node {

    protected $item;
    /** @var Node $next */
    protected $next;

    public function __construct($item, Node $next = null) {
        $this->item = $item;
        $this->next = $next;
    }

    public function next(): Node {
        return $this->next;
    }

    public function hasNext(): bool {
        return !is_null($this->next);
    }

    public function pop() {
        $this->next = null;
        return $this->item;
    }
}