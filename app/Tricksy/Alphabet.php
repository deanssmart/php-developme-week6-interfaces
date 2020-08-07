<?php

// PHP has various built-in interfaces. One of these is called Iterator. If a class implements the Iterator interface you can use foreach with it. You'll need to read the Iterator documentation and look at the examples of each method.

// Create a class Alphabet in the App\Tricksy namespace, that implements the Iterator interface and then check that it works using foreach.

// Hint: PHP has a function chr that creates a character string from a character code. Remember, A is 65.
declare(strict_types=1);
namespace App\Tricksy;
use Iterator;

class Alphabet implements Iterator
{
    private $position;

    public function __construct() 
    {
       $this->rewind();
    }

    public function rewind() : Alphabet
    {
        // Rewind the Iterator to the first element
        $this->position = 65;
        return $this;
    }

    public function current() : string
    { 
        // Return the current element        
        return chr($this->position);
    }

    public function key() : int
    {
        // Return the key of the current element
        return $this->position - 65;
    }

    public function next() : Alphabet
    {
        // Move forward to next element
        $this->position += 1;
        return $this;
    }

    public function valid() : bool
    {
        // Checks if current position is valid
        // dd($this->position >= 65 && $this->position <= 90);
        return $this->position >= 65 && $this->position <= 90;
    }   
}