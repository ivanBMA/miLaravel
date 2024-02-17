<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
use App\Models\Medico;

class TipoEstudio extends Model
{
    use HasFactory;
    public function Paciente(){
        return $this->hasMany(Paciente::class);
    }

    public function Medico(){
        return $this->hasMany(Medico::class);
    }

    
}
