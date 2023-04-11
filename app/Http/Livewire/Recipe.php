<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recipe as Recipes;
use App\Models\Category;
class Recipe extends Component
{
    public $search;
    public $category_sort;

    public function mount()
    {
        $this->category_sort = 'all';
    }

    public function render()
    {

        $category = Category::all();

        if($this->search == ''){
        $recipes = Recipes::with('users')->where('copy',0)->paginate(4);
        }
        else{
            $recipes = Recipes::with('users')->where('name','like',"%$this->search%")->paginate(4);
        }
        if($this->category_sort != '')
        {
            $recipes = Recipes::with('users')->where('category_id',$this->category_sort)->paginate(4);
        }
        if($this->category_sort == 'all')
        {
            $recipes = Recipes::with('users')->where('copy',0)->paginate(4);
        }
        return view('livewire.recipe',['recipes'=>$recipes,'category'=>$category]);
    }


    public function copy($id)
    {
        $original = Recipes::find($id);
        $copy = $original->replicate();

        $copy->user_id = auth()->user()->id;
        $copy->copy = 1;
        $copy->save();
        session()->flash('success', 'Recipe copied successfully.');
    }



}
