<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tradie extends Model
{
    use HasFactory;

    protected $table = 'tradie'; 

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phonenumber',
        'job',
    ];
}
