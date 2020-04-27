<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    //
    public function sites()
  {
    return $this->hasMany('App\Site');
  }
    
    public function data()
  {
    return $this->hasMany('App\Data');
  }
}
