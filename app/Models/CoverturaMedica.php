<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class CoverturaMedica extends Model
{
    use HasFactory;
    public function pacientes(){
        return $this->hasMany(Paciente::class);
    }
}
