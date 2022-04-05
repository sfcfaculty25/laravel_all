<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pro extends Model
{
    use HasFactory;

    protected $table= "product";
    protected $fillable = ['pro_id','pro_name','pro_img'];
    // public $timestamps = false;
//     const UPDATED_AT = null;
// //to turn off timestamp completely
// public $timestamps = false;
}
