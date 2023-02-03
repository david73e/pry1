<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Tarea extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'tareas';
    protected $fillable = [
        'nombre',
        'descripicion',
        'finalizada',
        'fecha_limite',
        'urgencia',
    ];
    protected $dates = ['fecha_limite'];
}
