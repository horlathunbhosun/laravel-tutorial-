<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public $directory = '/images/';
    use SoftDeletes;
    //if your table does not have the same name as your model class you use
    //protected $table ='the name of your table';
    //protected $primarykey = 'user_id';
    protected $dates = ['deleted_at'];


    protected $fillable =['title','body', 'path'];



    public function user(){
        return $this->belongsTo('App\User');
    }

    public function Photos(){
        return $this->morphMany('App\Photo', 'imageable');
    }

    public function Tags(){
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public static function scopeLastest($query){
    return  $query->orderBy('id', 'asc')->get();
    }

    public function getPathAttribute($value){
        return $this->directory . $value;
    }

}
