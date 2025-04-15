<?php

namespace App\Models;

use App\Models\Standard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = ['class_name','teacher_name','description'];


    public function myStandards()
    {
        //  YE HAM JAB USE KARTE HAI HAM PRIMATY KEY SE FORAIGN KEY KA DATA LATE HAI
        return $this->hasOne(Standard::class,'class_id','id');
    }
}
