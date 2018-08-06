<?php

namespace samenta\Http\Controllers;

use Illuminate\Http\Request;
use samenta\Post;

class PostController extends Controller
{
    public function polymorphic($id)
    {
        $user = Post::find($id);
        $photos = $user->photos;
        foreach ($photos as $photo)
        {
            echo $photo->path . '<br>';
        }
    }
    public function manyToManyPolymorphic($id)
    {
        $post = Post::find($id);
        $tags = $post->tags;
        echo "title:::"  .  $post->title  . "<br>";
       foreach($tags as $tag)
       {
           echo $tag->name  . '<br>';
       }

    }
    public function getTitle()
    {
        $post = Post::find(1);
        return $post->title;
    }
    public function index(Request $request)
    {
/*        $posts = Post::all();
        $posts = Post::Latest();*/
/*        GO TO POST MODEL
        $posts = Post::Jadid();
        return view('show',compact('posts'));*/
//session all
//        return session()->all();
//        return session()->get('_previous'); //url	"http://127.0.0.1/postshow"
//        return session()->get('_token');
        session(['name'=>'negar','email'=>'info@gmail.com','password'=>'123456']);
//        return session()->all();
//        return session()->get('password');
        //put session
        session()->put('user_id',100);
//        return session()->all();
        //delete
//        session()->forget('password');
//        return session()->all();
        //delete all
//        session()->flush();
        //retrive or daryaft
//        return session('email');
//        ba requests ke send mish
//        return $request->session()->all();
        //falsh data
//        $request->session()->flash('msg','hello world');
//        return $request->session()->all();

    }


}
