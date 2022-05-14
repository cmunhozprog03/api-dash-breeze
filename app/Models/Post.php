<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'slug', 'extract', 'body', 'status'];

    const BORRADOR = 1;
    const PUBLICADO = 2;

    // one => many inverse
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // many => many
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // one => morph
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
