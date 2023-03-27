<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Models\Like;

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
        $this->comments = Comment::with('likes')->where('recipe_id',$this->recipe_id)->latest()->get();


        return view('livewire.comments');
    }


    public function increment($id)
    {

        $user_id = auth()->user()->id;
        $exists = Like::where('comment_id',$id)->where('user_id',$user_id)->exists();

        if(!$exists){
        $this->count = 1;


        Like::create([
            'user_id'=>$user_id,
            'comment_id' => $id,
            'status' => $this->count,
            'recipe_id' => $this->recipe_id
        ]);
        }
    }

    public function decrement($id)
    {
        $user_id = auth()->user()->id;
        $exists = Like::where('comment_id',$id)->where('user_id',$user_id)->exists();

        if($exists){


        Like::where('user_id',$user_id)->where('comment_id',$id)->delete();
        }
    }
}
