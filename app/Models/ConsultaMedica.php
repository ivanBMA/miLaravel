<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
use App\Models\Medico;

class ConsultaMedica extends Model
{
    use HasFactory;

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class);
    }      
    public function medicos()
    {
        return $this->belongsTo(Medico::class);
    }  
}
