<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Facultad;

class Programa extends Model
{
    protected $table = 'programas';
    protected $primaryKey = 'codprograma';
    public $timestamps = true;

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'facultad', 'codfacultad');
    }
}
