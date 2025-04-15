<?php

namespace App\Models;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Standard extends Model
{
    use HasFactory;


    protected $fillable = ['standard_name','total_student'];


    public function myClasses()
    {
        return $this->belongsTo(Classes::class,'class_id','id');
    }
}
