<?php

namespace App\Shapes;

class Rectangle implements ShapeInterface
{
    private $length;
    private $width;

    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() : float
    {
        return $this->length * $this->width;
    }
}