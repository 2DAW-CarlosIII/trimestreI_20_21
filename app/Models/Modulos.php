<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    use HasFactory;

    protected $fillable = [
      'nombre', 'especialidad_id', 'ciclo_id'
    ];

    public function especialidad(){
        return $this->belongsTo(Especialidad::class);
    }
}
