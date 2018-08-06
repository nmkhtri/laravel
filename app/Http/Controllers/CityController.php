<?php

namespace samenta\Http\Controllers;

use Illuminate\Http\Request;
use samenta\City;

class CityController extends Controller
{
    public function hasManyThrough($id)
    {
        $city = City::find($id);
        $comments = $city->comments()->get();
        echo "comments in :::" . $city->name . "<br>";
        foreach ($comments as $comment)
        {
            echo $comment->title . "<br>";
            echo $comment->content . "<br><hr>";
        }
    }
}
