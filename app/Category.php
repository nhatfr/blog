<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'img'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function getSlugAttribute()
    {
        return convert_text_to_friendly_url($this->name);
    }
}
