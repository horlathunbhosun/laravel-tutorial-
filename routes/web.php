<?php

use  App\Post;
use  App\User;
use App\Photo;
use  App\Country;
use App\Video;
use App\Tag;
use App\Taggable;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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
});


// //  Route::resource('post', 'PostsController');

// Route::get('/contact', 'PostsController@contact');

// Route::get('post/{id}/{name}', 'PostsController@show_post');



// Database raw sqlquery

// Route::get('/insert', function(){

//     DB::insert('insert into posts(title, body)  values (?, ?)', ['php laravel bosun', 'laravel is  ade one the best thing that has happened to PHP']);
// });

// Route::get('/read', function() {
    
//    $result = DB::select('select * from posts where id = ?', [1]);
//     // return var_dump($result);

//     foreach($result as $result)

//     return $result->title;





    
// });



// Route::get('/update', function(){

//     $updated = DB::update('update posts set title = "updated by me" where id = ?', ['1']);
//     return $updated;
// });


// Route::get('/delete', function(){
//     $deleted = 
//     DB::delete('delete from posts where id = ?', ['1']);
    
//     return $deleted;
// });





/*
|--------------------------------------------------------------------------
| ELEQUENT read data
|--------------------------------------------------------------------------
|
*/

// Route::get('/read', function(){
//     $posts =  Post::all();


//     foreach($posts as $post)
//     return $post->title;
// });



// Route::get('/find', function(){
//     $posts =  Post::find(2);
//     return $posts->title;

//     // foreach($posts as $post)
//     // return $post->title;
// });



/*
|--------------------------------------------------------------------------
| ELEQUENT retrieving data
|--------------------------------------------------------------------------
|
*/

// Route::get('/findwhere', function () {
//     $post = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//     return $post;
// });

// Route::get('/findmore', function(){
//     // $post = Post::findOrFail(1);

//     // return $post;

//     $post = Post::where('user_count', '<', 50)->firstOrfail();
// });



/*
|--------------------------------------------------------------------------
| ELEQUENT insert data
|--------------------------------------------------------------------------
|
*/

// Route::get('/basicinsert', function(){
//     $post = new Post;

//     $post->user_id = 1;
//     $post->title = 'New Elequent title insert hey  ola tunbo  sco pa to mana king';
//     $post->body = 'New Elequent is really cool hey olajimi  ogun ken aswartugd to king tunbo insert data';
//     $post->is_admin = 0;

//     $post->save();

// });


// Route::get('/basicinsert', function(){
//     $post =  Post::find(2);

//     $post->title = 'New Elequent title insert tunbo';
//     $post->body = 'New Elequent is really cool to insert data tunbo 2';

//     $post->save();

// });


// Route::get('/create', function(){
    
//     Post::create(['title'=> 'the create model 5 is a goal', 'body'=> 'The body of the post is great to 5 work with i am happy']);

// });


/*
|--------------------------------------------------------------------------
| ELEQUENT update data
|--------------------------------------------------------------------------
|
*/

// Route::get('/update', function () {
    
//     Post::where('id', 2)->where('title', 'New Elequent title insert 2')->update(['title'=>'New title for 2', 'body'=> 'new body for two ']);
// });


/*
|--------------------------------------------------------------------------
| ELEQUENT delete data
|--------------------------------------------------------------------------
|
*/

// Route::get('/delete', function(){

//     $post = Post::find(2);

//     $post->delete();

// });


// Route::get('/delete2', function(){

//     Post::destroy([4,5]);

//     // Post::where('title', '')->delete();

// });

// Route::get('/softdeletes', function(){

//     Post::find(7)->delete();

// });


// Route::get('/readsoftdeletes', function(){

//     // $post = Post::find(6);
//     // return $post;

//     // $post = Post::withTrashed()->where('id', 6)->get();
//     // return $post;

//     $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//     return $post;

// });


// Route::get('/restore', function(){
//     Post::onlyTrashed()->where('is_admin', 0)->restore();
// });


// Route::get('/forcedelete', function(){
//     Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });

/*
|--------------------------------------------------------------------------
| ELEQUENT relationships
|--------------------------------------------------------------------------
|
*/


//one to one relationship 

// Route::get('/user/{id}/post', function($id) {

//    return User::find($id)->post->body;
// });


//inverse of one to one relationship

// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user->name;
// });


// one to many relationship


// Route::get('/posts', function(){

//     $user = User::find(1);  
//     foreach($user->posts as $post)
//     echo $post->title. "<br>";
// });

//many to many relationship
// Route::get('/user/{id}/role', function($id){

//     $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//     return $user;
//     // foreach($user->roles as $role){
//     //       echo $role->name;   
//     //     }

// });


//accessing intermediate table/pivot

// Route::get('user/pivot', function(){
//     $user = User::find(1);

//     foreach($user->roles as $role){
//         return $role->pivot->created_at;
//     }

// });


// Route::get('user/country', function(){
//     $country = Country::find(1);
//     foreach($country->posts as $post){
//         return $post->title;
//     }
         
// });


// //polymorphic Relations
// Route::get('user/photos', function(){
//     $user = User::find(1);
//     foreach ($user->photos as $key => $photo) {
//         return $photo;
//     }
// });


// Route::get('post/{id}/photos', function($id){
//     $post = Post::find($id);
//     foreach ($post->photos as $key => $photo) {
//         echo  $photo->path . '<br>';

//         // if($post == 0) {
//         //     echo "empty";
//         // }else{
//         // }
//     }
// });

//polymophic relationship 
// Route::get('photo/{id}/post', function($id){

//    $photo = Photo::findOrFail($id);
//         return $photo->imageable; 

// });


//polymophic many to many relationship
//Route::get('post/tag', function(){
//    $post = Post::find(1);
//    foreach ($post->tags as $tag){
//        echo  $tag->name;
//    }
//
//});


// Route::get('tag/post', function(){
//    $tag = Tag::find(2);
//    foreach ($tag->posts as $post){
//        echo $post->title;
//    }
// });



/*
|--------------------------------------------------------------------------
| Crud application
|--------------------------------------------------------------------------
|
*/


Route::group(['middleware'=>'web'], function (){

    Route::resource('/posts', 'PostsController');

    Route::get('/dates',function (){
        $date = new DateTime('+1 week');
        echo $date->format('m-d-Y');

        echo '<br>';

        echo Carbon::now()->addDays(10)->diffForHumans();


        echo '<br>';

        echo Carbon::now()->subMonths(5)->diffForHumans();

        echo '<br>';

        echo Carbon::now()->yesterday();
        echo '<br>';

        echo '<br>';





    });

    Route::get('/getname', function (){
        $user = User::find(1);
        echo $user->name;
    });

    Route::get('/setname', function (){
        $user = User::find(1);
        $user->name = "olatunbosun";

        $user->save();
    });
});


