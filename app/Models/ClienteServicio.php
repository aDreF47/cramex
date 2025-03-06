<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteServicio extends Model
{
    use HasFactory;

    protected $table = 'ClienteServicio'; // Asegúrate de que coincida con tu base de datos

    protected $fillable = [
        'idCliente',
        'idServicio',
        'FechaInicio',
        'FechaFin',
        'Costo',
        'Captura',
        'Penalidad',
        'FlagPago',
    ];

    public $timestamps = false;
}
