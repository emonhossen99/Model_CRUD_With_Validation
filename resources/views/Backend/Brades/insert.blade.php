<x-Master>
    <x-slot name="title">
        Model --Brand __Insert
    </x-slot>
{{-- insert header  --}}
    <h1 class="text-center text-primary mt-5">This is New Brands Add Page</h1>
    <div class="text-end">
        <a href="{{ url('brands') }}" class="btn btn-danger outline ">Back</a>
    </div>


{{-- insert success and error message  --}}
@include('Include.Alert')


{{-- insert form  --}}
    <div class="col-md-8 mx-auto">
        <form class="row g-3" method="POST" action="{{ url('brands') }}">
            @csrf
            <div class="col-md-8">
                <label for="inputEmail4" class="form-label">Brand Name</label>
                <input type="text" class="form-control @error('brand_name') is-invalid @enderror"  name="brand_name" placeholder="Enter Brand Name" value="{{ old('brand_name') }}">
                @error('brand_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-8">
                <select class="form-select @error('status') is-invalid @enderror" name="status" aria-label="Default select example">
                    <option value="">Status</option>
                    <option value="0">Pending</option>
                    <option value="1">Published</option>
                </select>
                @error('status')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add Brand</button>
            </div>
        </form>
    </div>
</x-Master>
