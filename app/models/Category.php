<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'video'];
    // protected $name;
    // protected $description;
    // protected $video;

    public function __construct(String $name, String $description, String $video)
    {
        $this->name = $name;
        $this->description = $description;
        $this->video = $video;
    }

    public function articles()
    {
        return $this->hasMany('App\models\Article');
    }
}
