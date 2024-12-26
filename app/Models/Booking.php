<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'package_name',
        'name',
        'phone',
        'ktp_number',
        'passport_number',
        'price'
    ];
}