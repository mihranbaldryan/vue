<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table="images";
    protected $fillable=['article_id','img'];

    public function article(){
        return  $this->belongTo('App\Article','article_id','id');
    }
}
