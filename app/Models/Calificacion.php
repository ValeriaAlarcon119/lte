<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificaciones';
    protected $primaryKey = 'calificacion';
    public $timestamps = true;

    public function Estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'estudiante', 'codestudiante');
    }
}
