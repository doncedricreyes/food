<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public $comment;


    public function increment()
    {
        $this->comment;
    }


    public function render()
    {
        return view('livewire.comment');
    }
}
