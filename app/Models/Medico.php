<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Especialidad;
use App\Models\TipoEstudio;

class Medico extends Model
{
    use HasFactory;

    // public function especialidads()
    // {
    //     return $this->hasMany(Especialidad::class);
    // }
        public function especialidads()
    {
        return $this->belongsTo(Especialidad::class);
    }  

    public function consultaMedica(){
        return $this->hasMany(ConsultaMedica::class);
    } 
    
    public function Paciente(){
        return $this->hasMany(Paciente::class);
    }

    public function TipoEstudio(){
        return $this->hasMany(TipoEstudio::class);
    }

}
