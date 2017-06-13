<?php
/**
 * @author  Lukáš
 * @version 1.0.0
 * @package krotovic-data
 */

namespace Krotovic\Data\Collections;


interface CollectionInterface {

    public function get($index);

    public function set($index, $value);

    public function stream(): StreamInterface;
}