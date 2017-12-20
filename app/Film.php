<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'id', 'category_id', 'title', 'year', 'dual_audio', 'poster_id'
    ];


    public function poster(){
        return $this->hasOne('App\Poster', 'id', 'poster_id');
    }


    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function delete()
    {
        if($this->poster){
            $this->poster->delete();
        }

        return parent::delete(); // TODO: Change the autogenerated stub
    }
}
