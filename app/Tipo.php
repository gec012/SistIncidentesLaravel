<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table='tipos';

    protected $fillable = [
    
        'nombre',
        'estado',
        'descripcion',
    ];
    
    public function incidentes(){
        return $this->hasMany('App\Incidente','tipo_id');
    }

}
