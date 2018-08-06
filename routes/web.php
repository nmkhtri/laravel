<?php
Auth::routes();
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
  /*  $email = 'info@gm.com';
    $password = '123456';
    if(Auth::attempt(['email'=>$email,'password'=>$password]))
    {
        return 'true';
    }*/
//  Auth::Logout();
});
/*Route::get('/insert',function(){
   DB::insert('insert into post(title,admin_id) VALUE (?,?)' ,['first title',1]);
});
Route::get('/select',function(){
//   $results = DB::select('select * from post');
//   $results = DB::select('select * from post WHERE id=?',[1]);
   $results = DB::select('select * from post WHERE admin_id=?',[1]);
   foreach ($results as $result) {
       return $result->title;
   }
});
Route::get('/update',function(){
    $result = DB::update("update post set title='updated' WHERE id=?",[1]);
    return $result;
});
Route::get('/update',function(){
    $result = DB::delete("delete from post WHERE id=?",[1]);
    return $result;
});*/
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload','PinkController@upload');
Route::post('/upload/img','PinkController@uploadImage')->name('uploadImage');
Route::get('/recycle','CommentsController@forceDelete');
//one_to_one
Route::get('/user/{id}/comment','CommentsController@oneTone');
//one_to_one_inverse
Route::get('/comment/{id}/user','CommentsController@oneTTone');
//one_to_many
Route::get('/user/{id}/comments','CommentsController@oneTomany');
//many_to_many
Route::get('/user/{id}/roles','RoleController@manyTomany');
//many_to_many_inverse
Route::get('/role/{id}/users','RoleController@manyTTomany');
//hasManythrough_3tables relations
Route::get('city/{id}/comments','CityController@hasManyThrough');
//polymorphic
Route::get('/user/{id}/photos','PhotoController@polymorphic');
Route::get('/post/{id}/photos','PostController@polymorphic');
//inverse_polymorphic
Route::get('/photo/{id}/belongto','PhotoController@polymorphicInverse');
//many_to_many_polymorphic
Route::get('/post/{id}/tags','PostController@manyToManyPolymorphic');
Route::get('/video/{id}/tags','VideoController@manyTToManyPolymorphic');
//retrive posts by tag
Route::get('/tag/{id}/posts','TagController@manyTTToManyPolymorphic');
//retrive videos by tag
Route::get('/tag/{id}/videos','TagController@retriveVtT');
//Review
Route::get('/user/address','AddressController@userAddress');
//Date
Route::get('/date','DateController@getDate');
//Carbon
Route::get('/carbon','DateController@carbon');
//getPost
Route::get('/gettitle','PostController@getTitle');
//post_show
Route::get('/show/posts','PostController@index');
//middleware
//--1--
Route::middleware('RoleMiddleware')->get('/user/panel','HomeController@index');
/*//--2--
Route::get('/user/panel',['middleware'=>'Role',function(){
    return 'user panel';
}]);*/
//user_role
Route::middleware('isAdmin')->get('/middletest',function(){
return 'you are admin';
});
//conect controller to middleware
Route::get('/admin','AdminController@index');
//resourse rout posts
Route::resource('/postshow','PostController');
//email
//composer require guzzlehttp/guzzle
Route::get('/send-mail','MailController@sendMail');