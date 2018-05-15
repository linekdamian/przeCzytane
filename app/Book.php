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

    public function categories()
    {
        return $this->hasOne('App\Category');
    }

    public function publisher()
    {
        return $this->hasOne('App\Publisher');
    }

    public function authors()
    {
        return $this->belongsToMany('App\Author');
    }
}
