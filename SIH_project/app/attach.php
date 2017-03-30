<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attach extends Model
{
    protected $fillable = ['rid', 'doc'];
 
    public function report()
    {
        return $this->belongsTo('App\Report');
    }
}
