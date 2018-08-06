<?php

namespace samenta;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name'];
    public function comments()
    {
        return $this->hasManyThrough('samenta\Comments','samenta\User');
    }
}
