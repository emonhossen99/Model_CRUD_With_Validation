<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandsModel extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $fillable = ['brand_name', 'status'];

    public function products(){
        return $this->hasMany(ProductModel::class,);
    }
}
