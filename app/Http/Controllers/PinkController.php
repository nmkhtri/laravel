<?php

namespace samenta\Http\Controllers;

use Illuminate\Http\Request;
//use Intervention\Image\Image;
use Intervention\Image\Facades\Image;
use samenta\Http\Requests\ImageRequest;
use samenta\Pink;

class PinkController extends Controller
{
    public function upload()
    {
//        if($request->hasFile('image')){
//            $file = $request->file('image');
//            $name = $file->getClientOriginalName();
//            $file->move(public_path() . '/image/'   , $name);
//            return  Redirect('/doit')->with('status','horaaaa');
//        }
        return view('image');
    }
    public function uploadImage(ImageRequest $request)
    {
       Pink::create([
            'image' => $request->image
        ]);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $names = $file->getClientOriginalName();
            $file->move(public_path() . '/image/'   , $names);
//            $imagePath= public_path() . '/image/' .$name;
//            $images=Image::make($imagePath)->resize(1000,250)->save();
            return view('uploadImage',compact('names'));
        }
    }

}
