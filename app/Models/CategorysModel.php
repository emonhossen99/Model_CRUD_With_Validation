<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorysModel extends Model
{
    use HasFactory;
    protected $table = 'categorys';
    protected $fillable = ['category_name','status'];
}
