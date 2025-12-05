<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class product extends Model
{
    protected $table = "products";
    protected $fillable = ['id','name','image','decription','content','gia','idCategory','status'];

    public function Category(){
        return $this->belongsTo(Category::class,'idCategory','id');
    }

}
