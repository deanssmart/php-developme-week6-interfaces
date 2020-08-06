<?php

namespace App\Shapes;

class Extrude 
{
    private $depth;
    private $shape;

    public function __construct(ShapeInterface $shape, float $depth)
    {
        $this->shape = $shape;
        $this->depth = $depth;
    }

    public function volume() : float
    {
        return $this->shape->area() * $this->depth;
    }
}