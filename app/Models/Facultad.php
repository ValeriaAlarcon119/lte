<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Programa;

class Facultad extends Model
{
    protected $table = 'facultades';
    protected $primaryKey = 'codfacultad';
    protected $fillable = ['codfacultad', 'nomfacultad'];
    public $timestamps = true;
}


