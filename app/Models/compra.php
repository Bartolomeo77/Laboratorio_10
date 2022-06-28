<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'combo_1',
        'correo',
        'apellido',
        'nombre',
        'fecha_compra',
        'dias_conscuridos',
        'fecha_fin_compra',
    ];
}
