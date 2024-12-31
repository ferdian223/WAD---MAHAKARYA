<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{

    protected $fillable = [
        'nama',
        'email',
        'type',
        'date',
        'time',
    ];
}
