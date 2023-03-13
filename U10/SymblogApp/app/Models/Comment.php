<?php
/**
 * 
 * @author: josemi
 */

 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;

 class Comment extends Model { //model de eloquent

    protected $table = 'comment';
    protected $fillable = ['user', 'comment', 'approved'];
    public function comment()
    {
        return $this->belongsTo('App\Models\Blog');
    }

 }
