<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function academico()
    {
        return $this->belongsTo('App\Academico');
    }
}
