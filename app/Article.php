<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getFriendlyTitleAttribute()
    {
        return convert_text_to_friendly_url($this->title);
    }
}
