<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{

     use HasFactory;

    protected $table = 'states';

    protected $fillable = [
        'name',
        'pincode',
    ];
}
