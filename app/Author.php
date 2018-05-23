<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'id', 'firstname', 'lastname'
    ];

    public function book()
    {
        return $this->belongsToMany(Book::class);
    }
}
