<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function site() {
        
        return $this->belongsTo('App\Site');
    }
}
