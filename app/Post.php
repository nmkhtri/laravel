<?php

namespace samenta;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function photos()
    {
        return $this->morphMany('samenta\Photo', 'imageble');
    }
    public function tags()
    {
        return $this->morphToMany('samenta\Tag','taggable');
    }
//      how show from database
    public function getTitleAttribute($value)
    {
//        return ucfirst($value); //Captal first
        return strtoupper($value . ".ir");//CAPTAL all
    }
//   how save to database
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }
    //scope
    public function scopeLatest($query)
    {
        return $query->orderBy('id','desc')->get();
    }
    //personal scope
    public function scopeJadid($query)
    {
        return $query->orderBy('created_at','asc')->get();
    }
}
