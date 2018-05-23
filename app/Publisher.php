<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = [
        'id', 'name',
    ];

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
