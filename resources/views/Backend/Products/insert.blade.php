<x-Master>

    <x-slot name="title">
        Model --Product __Insert
    </x-slot>
    <h1 class="text-center text-primary">This is New Product Add Page</h1>
    <div class="text-end">
        <a href="{{ url('products') }}" class="btn btn-danger outline ">Back</a>
    </div>



    <form class="row g-3 mt-5 mb-5" method="POST" action="{{ url('/products') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <select class="form-select  @error('brand') is-invalid @enderror" name="brand"
                aria-label="Default select example">
                <option value="">Select Brands Name</option>
                @forelse ($Datas['brands'] as $data)
                    <option value="{{ $data->id }}">{{ $data->brand_name }}</option>
                @empty
                @endforelse
            </select>

            @error('brand')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <select class="form-select  @error('category') is-invalid @enderror" name="category"
                aria-label="Default select example">
                <option value="">Select Category Name</option>
                @forelse ($Datas['categorys'] as $data)
                    <option value="{{ $data->id }}">{{ $data->category_name }}</option>
                @empty
                @endforelse
            </select>

            @error('category')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Product Name</label>
            <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name"
                placeholder="Enter Product Name" value="{{ old('product_name') }}">

            @error('product_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Product Slug</label>
            <input type="text" name="product_slug" class="form-control @error('product_slug') is-invalid @enderror"
                placeholder="Enter Product Slug" value="{{ old('product_slug') }}">

            @error('product_slug')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Product Code</label>
            <input type="text" class="form-control @error('product_code') is-invalid @enderror" name="product_code"
                placeholder="Enter Product Code" value="{{ old('product_code') }}">

            @error('product_code')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                placeholder="Enter Price" value="{{ old('price') }}">

            @error('price')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Quntity</label>
            <input type="text" class="form-control @error('quntity') is-invalid @enderror" name="quntity"
                placeholder="Enter Quntity" value="{{ old('quntity') }}">

            @error('quntity')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <label for="future_image" class="form-label">Image</label>
            <br>
            <input type="file" name="future_image" id="future_image">

            @error('future_image')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <select class="form-select @error('status') is-invalid @enderror" name="status"
                aria-label="Default select example">
                <option value="">Status</option>
                <option value="0">Pending</option>
                <option value="1">Published</option>
            </select>
            @error('status')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" name="condition" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                <br>
                @error('condition')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Add Product</button>
        </div>
    </form>
</x-Master>
