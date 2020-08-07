<?php

// Create a class Range in the App\Tricksy namespace, that implements the Iterator interface and then check that it works using foreach.
declare(strict_types=1);
namespace App\Tricksy;
use Iterator;

class Range implements Iterator
{
    private $start;
    private $position;
    private $end;

    public function __construct(int $start, int $end)  
    {
       $this->start = $start;
       $this->end = $end;
       $this->rewind();

    }

    public function rewind() : Range
    {
        // Rewind the Iterator to the first element
        $this->position = $this->start;
        return $this;
    }

    public function current() : int
    { 
        // Return the current element        
        return $this->position;
    }

    public function key() : int
    {
        // Return the key of the current element
        return $this->position - $this->start;
    }

    public function next() : Range
    {
        // Move forward to next element
        $this->position += 1;
        return $this;
    }

    public function valid() : bool
    {
        // Checks if current position is valid        
        return $this->position >= $this->start && $this->position <= $this->end;
    }   
}