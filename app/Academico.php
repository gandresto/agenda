<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    protected $table = 'academicos';

    public function user()
    {
        return $this->hasOne(User::class, 'academico_id');
    }

    public function grado()
    {
        return $this->belongsTo(Grado::class);
    }

    public function jefeDeDivisiones()
    {
        return $this->hasMany(Division::class);
    }

    public function jefeDeDepartamentos()
    {
        return $this->hasMany(Departamento::class);
    }

    public function presidenteDeAcademias()
    {
        return $this->hasMany(Academia::class);
    }

    public function academias()
    {
        return $this->belongsToMany(Academia::class)
                    ->withPivot('estado', 'fecha_ingreso', 'fecha_egreso');
    }
}
