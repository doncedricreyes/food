<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','first_name','middle_name','last_name','gender','birthday','bio','pic','education'];


    public function users(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
