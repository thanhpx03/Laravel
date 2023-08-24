<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'mota','img'];
    //lấy 1 dữ liệu
    public function product(){
        return $this->hasOne(Product::class);
    }
//lấy nhiều
    public function products(){
        return $this->hasMany(Product::class);
    }
}
