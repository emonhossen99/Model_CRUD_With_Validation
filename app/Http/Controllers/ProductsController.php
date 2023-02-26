<?php

namespace App\Http\Controllers;

use App\Events\ProductEvent;
use App\Models\BrandsModel;
use Illuminate\Support\Str;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\CategorysModel;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productData = ProductModel::with('brand', 'category')->latest('id')->get();
        return view('Backend.Products.index', ['productData' => $productData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'brands' => BrandsModel::latest('id')->where('status',1)->get(),
            'categorys' => CategorysModel::latest('id')->where('status', 1)->get(),
        ];
        return view('Backend.Products.insert', ['Datas' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $req)
    {
        $productTable = new ProductModel();
        $productTable->brand_id = $req->brand;
        $productTable->category_id = $req->category;
        $productTable->product_name = $req->product_name;
        $getProductSlug = Str::slug($req->product_slug);
        $productTable->product_slug =  $getProductSlug;
        $productTable->product_code = $req->product_code;
        $productTable->price = $req->price;
        $productTable->qnt = $req->quntity;
        $productTable->status = $req->status;

        // image upload request  file_upload function call to controller.php
        if($req->hasFile('future_image')){
        $productTable->image = $this->file_upload($req->file('future_image'),'uploads/productsImages/');
        }
        if ($productTable->save()) {
            return redirect('/products')->with('Success', 'Data Insert Successfully Form Products Table');
        } else {
            return back()->with('Error', 'Data Insert Error Form Products Table');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'brands' => BrandsModel::latest('id')->where('status', 1)->get(),
            'categorys' => CategorysModel::latest('id')->where('status', 1)->get(),
        ];
        $editData = ProductModel::find($id);
        return view('Backend.Products.update', ['editData' => $editData, 'myData' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ProductRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $req, $id)
    {
        $updateData = ProductModel::find($id);
        $updateData->brand_id = $req->brand;
        $updateData->category_id = $req->category;
        $updateData->product_name = $req->product_name;
        $getProductSlug = Str::slug($req->product_slug);
        $updateData->product_slug =  $getProductSlug;
        $updateData->product_code = $req->product_code;
        $updateData->price = $req->price;
        $updateData->qnt = $req->quntity;
        $updateData->status = $req->status;

         // image upload request  file_updated function call to controller.php
        if($req->hasFile('future_image')){
            $updateData->image = $this->file_updated($req->file('future_image'),'uploads/productsImages/',$updateData->image);
        }else{
            $updateData->image = $updateData->image;
        }
        if ($updateData->update()) {
            return back()->with('Success', 'Data Update Successfully Form Products Table');
        } else {
            return back()->with('Error', 'Data Update Error Form Products Table');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = ProductModel::find($id);
        // request to delete data form data base to request on controler.php in file_delete
        $this->file_delete('uploads/productsImages/',$deleteData->image);
        if ($deleteData->delete()) {
            return back()->with('Success', 'Data Delete Successfully From Products Table');
        } else {
            return back()->with('Error', 'Data Delete Error From Products Table');
        }
    }
}
