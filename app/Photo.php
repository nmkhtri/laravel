<?php

namespace samenta;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function imageble()
    {
        return $this->morphTo();
    }

}
