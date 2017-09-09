<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['content', 'title'];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
