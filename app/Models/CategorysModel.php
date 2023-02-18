<?php

namespace App\Models;

use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategorysModel extends Model
{
    use HasFactory;
    protected $table = 'categorys';
    protected $fillable = ['category_name','status'];

    public function products(){
        return $this->hasMany(ProductModel::class,);
    }
}
