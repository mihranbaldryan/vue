<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table="articles";
    protected $fillable=['user_id', 'text'];

    public function article()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    public function images(){
        return $this->hasMany('App\Image','article_id','id');
    }
}
