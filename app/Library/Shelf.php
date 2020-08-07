<?php

namespace App\Library;

class Shelf
{
    private $items = [];

    public function addItem(Titled $item) : Shelf
    {
        $this->items[] = $item;
        return $this;
    }

    public function titles() : array
    {
        $titles = [];

        foreach($this->items as $item){
            $titles[] = $item->title();
        }
        
        return $titles;
    }
}