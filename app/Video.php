<?php

namespace samenta;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function tags()
    {
        return $this->morphToMany('samenta\Tag','taggable');
    }
}
