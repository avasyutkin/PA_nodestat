<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public function node() {
        
        return $this->belongsTo('App\Node');
    }
    public function contact() {
        
        return $this->hasMany('App\Contact');
    }
}
