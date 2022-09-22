<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'title',
        'author',
        'post_content',
        'post_date',
        'post_image'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
