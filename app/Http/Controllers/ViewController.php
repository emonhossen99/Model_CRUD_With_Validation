<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewGet($id){
     $getProduct = ProductModel::find($id);
     return view('Backend.Products.view',['getProduct' => $getProduct]);
    }
}
