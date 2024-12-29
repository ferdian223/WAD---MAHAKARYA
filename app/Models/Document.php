<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'user_id',
        'passport_foto',
        'ktp_foto',
        'foto_identitas'
    ];
}