<?php
/**
 * @author  Lukáš
 * @version 1.0.0
 * @package krotovic-data
 */

namespace Krotovic\Data\Queue;


class Queue {
    /** @var Node $first */
    protected $first;

    public function add($item) {
        $this->first = new Node($item, $this->first);
    }

    public function get() {
        if (is_null($this->first)) return null;
        $next = $this->first->next();
        while ($next->hasNext()) {
            $next = $next->next();
        }
        return $next->pop();
    }

    public function has(): bool {
        return !is_null($this->first);
    }

    public static function fromArray(array $items): Queue {
        $queue = new Queue();
        for ($i = count($items) - 1; $i >= 0; $i--) {
            $item = $items[$i];
            $queue->add($item);
        }
        return $queue;
    }
}