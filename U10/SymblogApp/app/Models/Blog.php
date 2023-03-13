<?php
/**
 * 
 * @author: josemi
 */

 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;

 class Blog extends Model { //model de eloquent

    protected $table = 'blog';
    protected $fillable = ['title', 'blog', 'image', 'author', 'tags'];
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

 }
 ?>
