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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('rating', 'review', 'favorite')
            ->withTimestamps();
    }
}
