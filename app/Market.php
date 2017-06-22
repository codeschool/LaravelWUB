<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Market extends Model
{
    protected $fillable = ['name', 'city', 'website'];

    public function farms(){
      return $this->belongsToMany('App\Farm')->withTimestamps();
    }
}
