<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','recipe','img','user_id','category_id'];

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
}
