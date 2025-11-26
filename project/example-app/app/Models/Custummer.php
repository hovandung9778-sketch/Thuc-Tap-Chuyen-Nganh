<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Custummer extends Model
{
    protected $table = "custummer";
    protected $fillable = ['id','name','email'];
}
