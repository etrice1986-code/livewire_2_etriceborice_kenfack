<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $number = 5;

    public function increment() //Action
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
        //$this->count= $this->count + $number;
    }

    public function incrementByNumber($number) // Action parametrica
    {
        $this->count += $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
