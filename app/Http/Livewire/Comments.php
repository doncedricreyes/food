<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;

class Comments extends Component
{
    public $new_comments,$user_id,$recipe_id;
    public $comments;
    public $count = 0;

    public function mount($id)
    {
        $this->recipe_id = $id;
    }

    public function store()
    {
        $user_id = auth()->user()->id;



        //validation
        $this->validate([
            'new_comments'=>'required'
        ]);

        $data = ['user_id' => $user_id,
                'recipe_id' => $this->recipe_id,
                'comment' => $this->new_comments];

                Comment::create($data);
                $this->new_comments = '';
    }


    public function render()
    {
        $this->comments = Comment::where('recipe_id',$this->recipe_id)->get();
        return view('livewire.comments');
    }


    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
}
