<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ucategory extends Model
{
     public function universities(){

       return $this->hasMany('universities');
    }
}
