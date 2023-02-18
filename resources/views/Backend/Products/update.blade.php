<x-Master>

    <x-slot name="title">
        Model --Product __Update
    </x-slot>

{{-- insert header  --}}
<h1 class="text-center text-primary mt-5">This is New Product Update Page</h1>
<div class="text-end">
    <a href="{{ url('products') }}" class="btn btn-danger outline ">Back</a>
</div>


{{-- update success and error message  --}}
@include('Include.Alert')

<div class="col-md-10 mx-auto">
    <form class="row g-3" method="POST"  action="{{ route('products.update', $editData->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <select class="form-select  @error('brand') is-invalid @enderror" name="brand"
                aria-label="Default select example">
                @forelse ($myData['brands'] as $data)
                    <option value="{{ $data->id }}" {{  $editData->brand_id == $data->id ? 'selected' : '' }}>{{ $data->brand_name }}</option>
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
                @forelse ($myData['categorys'] as $data)

                   <option value="{{ $data->id }}" {{ $editData->category_id == $data->id ? 'selected' : ''}}>{{ $data->category_name }}</option>

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
                placeholder="Enter Product Name" value="{{ $editData->product_name }}">

            @error('product_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Product Slug</label>
            <input type="text" name="product_slug" class="form-control @error('product_slug') is-invalid @enderror"
                placeholder="Enter Product Slug" value="{{ $editData->product_slug }}">

            @error('product_slug')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Product Code</label>
            <input type="text" class="form-control @error('product_code') is-invalid @enderror" name="product_code"
                placeholder="Enter Product Code" value="{{ $editData->product_code }}">

            @error('product_code')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                placeholder="Enter Price" value="{{ $editData->price }}">

            @error('price')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Quntity</label>
            <input type="text" class="form-control @error('quntity') is-invalid @enderror" name="quntity"
                placeholder="Enter Quntity" value="{{ $editData->qnt }}">

            @error('quntity')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-md-6">
            <label for="status" class="form-label">Status</label>
            <select class="form-select @error('status') is-invalid @enderror" name="status"
                aria-label="Default select example">
                <option value="0" {{ $editData->status == 0 ? 'selected' : ''}}>Pending</option>
                <option value="1" {{ $editData->status == 1 ? 'selected' : ''}}>Published</option>
            </select>
            @error('status')
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
            <img class="w-50 h-20 mt-5" src="{{asset('uploads/productsImages/'.$editData->image)}}" alt="">


        </div>

        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" name="condition" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                <br>
                @error('condition')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Update Product</button>
            </div>
        </div>
    </form>
</div>


</x-Master>
