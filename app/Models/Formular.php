<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formular extends Model
{
    use HasFactory;
    protected $table = 'forms';
    protected $primary_key = [
        'id'
    ];

    protected $fillable = [
        'nume',
        'prenume',
        'data_de_nastere',
        'comentariu',
    ];
}
