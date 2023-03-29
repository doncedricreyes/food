<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rating;

class Ratings extends Component
{
    public $recipe_id;

    public function mount($id)
    {
        $this->recipe_id = $id;
    }

    public function render()
    {
        return view('livewire.ratings');
    }

    public function rating($id)
    {
        $user_id = auth()->user()->id;
        Rating::create([
            'user_id'=>$user_id,
            'rating' => $id,
            'recipe_id' => $this->recipe_id
        ]);
    }
}
