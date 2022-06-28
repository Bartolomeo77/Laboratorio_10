<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class combos extends Model
{
    use HasFactory;
    protected $fillable = [
        'combo_1',
        'combo_2',
        'combo_3',
    ];
}
