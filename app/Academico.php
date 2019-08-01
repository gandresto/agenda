<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    $this->table = "academicos";

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function divisiones()
    {
        return $this->hasMany('App\Division', 'id_jefe_div');
    }
}
