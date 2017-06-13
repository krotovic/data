<?php
/**
 * @author  Lukáš
 * @version 1.0.0
 * @package krotovic-data
 */

namespace Krotovic\Data\Stack;


class Node {

    protected $item;
    protected $next;

    public function __construct($item, Node $next = null) {
        $this->item = $item;
        $this->next = $next;
    }

    /**
     * @return Node|null
     */
    public function next(): Node {
        return $this->next;
    }

    /**
     * @return mixed
     */
    public function item() {
        return $this->item;
    }
}