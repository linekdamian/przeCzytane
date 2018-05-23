<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Roles extends Model
{
    protected $fillable = ['id', 'name'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
