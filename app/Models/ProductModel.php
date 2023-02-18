<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['product_name','product_slug','product_code','price','qnt','image','status'];

    public function brand(){
        return $this->belongsTo(BrandsModel::class,);
    }
    public function category(){
        return $this->belongsTo(CategorysModel::class,);
    }
}
