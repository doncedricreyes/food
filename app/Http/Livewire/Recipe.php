<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recipe as Recipes;
class Recipe extends Component
{
    public $search;


    public function render()
    {
        if($this->search == ''){
        $recipes = Recipes::all();
        }
        else{
            $recipes = Recipes::where('name','like',"%$this->search%")->get();
        }
        return view('livewire.recipe',['recipes'=>$recipes]);
    }

}
