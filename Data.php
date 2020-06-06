<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public $timestamps = false;
    //
    public function node() {
        
        return $this->belongsTo('App\Node');
    }
}
