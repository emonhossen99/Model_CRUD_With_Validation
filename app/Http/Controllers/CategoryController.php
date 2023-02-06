<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\CategorysModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategorysModel::orderBy('id','DESC')->get();
        return view('Backend.Category.index',['categoryData'=> $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Category.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $req)
    {
        $category = new CategorysModel();
        $category ->category_name = $req->category_name;
        $category ->status = $req->status;
        if($category->save()){
           return redirect('/category')->with('Success','Data Insert Successfully');
        }else{
            return back()->with('Error','Data Insert Error');
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
        $updatedData = CategorysModel::find($id);
        return view('Backend.Category.update',['updatedData' => $updatedData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $req, $id)
    {
        $updatedData = CategorysModel::find($id);
        $updatedData -> category_name = $req->category_name;
        $updatedData -> status = $req->status;
        if($updatedData->update()){
            return redirect('/category')->with('Success','Data Updated Successfully');
         }else{
             return back()->with('Error','Data Updated Error');
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
        $deleteData = CategorysModel::find($id);
        if($deleteData->delete()){
            return back()->with('Success','Data Delete Successfully');
         }else{
             return back()->with('Error','Data Delete Error');
         }
    }
}
