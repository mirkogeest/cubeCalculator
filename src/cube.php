<?php

class Cube {
    public $x;
    public $y;
    public $z;
    public $s;

    public function __construct($x, $y, $z, $s) {
        $this->x = (int) $x;
        $this->y = (int) $y;
        $this->z = (int) $z;
        $this->s = (int) $s;
    }
}