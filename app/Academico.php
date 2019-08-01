<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    protected $table = 'academicos';

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function divisiones()
    {
        return $this->hasMany(Division::class, 'id_jefe_div');
    }
}
