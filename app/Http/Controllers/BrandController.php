<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\BrandsModel;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = BrandsModel::orderBy('id','DESC')->get();
        return view('Backend.Brades.index',['brandsData'=> $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Brades.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $req)
    {
        $brands = new BrandsModel();
        $brands ->brand_name = $req->brand_name;
        $brands ->status = $req->status;
        if($brands->save()){
           return redirect('/brands')->with('Success','Brand Insert Successfully');
        }else{
            return back()->with('Error','Brand Insert Error');
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
        $updatedData = BrandsModel::find($id);
        return view('Backend.Brades.update',['updatedData' => $updatedData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $req, $id)
    {
        $updatedData = BrandsModel::find($id);
        $updatedData -> brand_name = $req->brand_name;
        $updatedData -> status = $req->status;
        if($updatedData->update()){
            return redirect('/brands')->with('Success','Brand Updated Successfully');
         }else{
             return back()->with('Error','Brand Updated Error');
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
        $deleteData = BrandsModel::find($id);
        if($deleteData->delete()){
            return back()->with('Success','Brand Delete Successfully');
         }else{
             return back()->with('Error','Brand Delete Error');
         }
    }
}
