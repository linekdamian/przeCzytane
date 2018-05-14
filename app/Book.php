<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'isbn', 'title', 'description',
    ];

    protected $hidden = [
        'publisher_id', 'category_id', 'roles_id'
    ];

    public $primaryKey = 'isbn';
    public $incrementing = false;
}
