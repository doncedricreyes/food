<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','recipe','img','user_id','category_id','ingredients','copy'];

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function users() : HasMany
    {
        return $this->hasMany(User::class,'id','user_id');
    }
}
