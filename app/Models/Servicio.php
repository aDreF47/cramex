<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'Servicio'; // Asegúrate de que el nombre coincida con tu base de datos

    protected $fillable = [
        'IdServicio',
        'NombreServicio',
        'Descripcion',
        'Requisitos',
    ];

    protected $primaryKey = 'IdServicio';

    public $timestamps = false; // Si tu tabla no tiene `created_at` y `updated_at`
}
