<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recharge extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id','amount','status','image','package_id'];

    function package(){
        return $this->belongsTo(Package::class);
     }
}
