<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public function ucategories(){

       return $this->belongsTo('ucategories');
    }



}
