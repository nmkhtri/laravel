<?php

namespace samenta;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=['name'];
    public function posts()
    {
        return $this->morphedByMany('samenta\Post','taggable');
    }
    public function videos()
    {
        return $this->morphedByMany('samenta\Video','taggable');
    }
}
