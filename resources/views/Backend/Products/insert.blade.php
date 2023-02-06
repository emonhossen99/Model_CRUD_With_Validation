@extends('Master.Master')

@section('content')
<h1 class="text-center text-primary">This is New Product Add Page</h1>
        <a href="{{ url('products') }}" class="btn btn-danger outline mt-5 mb-5">Back</a>
    <form class="row g-3 mt-5">
        <div class="col-md-6">
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Brands Name</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-md-6">
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Category Name</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Product Slug</label>
            <input type="text" name="product_slug" class="form-control" placeholder="Enter Product Slug">
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Product Code</label>
            <input type="text" class="form-control" name="product_code" placeholder="Enter Product Code">
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter Price">
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Quntity</label>
            <input type="text" class="form-control" name="qnt" placeholder="Enter Quntity">
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Image</label>
            <br>
            <input type="file" name="image" id="">
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Status</label>
            <input type="text" class="form-control" name="qnt" placeholder="Enter Status">
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
@endsection
