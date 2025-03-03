<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'productos';

    // Clave primaria personalizada
    protected $primaryKey = 'IdProducto';

    // Indicar que la clave primaria es autoincremental
    public $incrementing = true;

    // Tipo de clave primaria (entero)
    protected $keyType = 'int';

    // Indicar que la tabla usa timestamps (created_at y updated_at)
    public $timestamps = true;

    // Campos permitidos para asignación masiva (mass assignment)
    protected $fillable = [
        'NombreProducto',
        'Descripcion',
        'Precio',
        'Stock',
    ];

    // Formateo de atributos
    protected $casts = [
        'Precio' => 'decimal:2',
        'Stock' => 'integer',
    ];
}
