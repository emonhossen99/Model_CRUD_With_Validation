@extends('Master.Master')

@section('content')
{{-- insert header  --}}
    <h1 class="text-center text-primary mt-5">This is New Category Add Page</h1>
    <div class="text-end">
        <a href="{{ url('category') }}" class="btn btn-danger outline ">Back</a>
    </div>


{{-- insert success and error message  --}}
@include('Include.Alert')


{{-- insert form  --}}
    <div class="col-md-8 mx-auto">
        <form class="row g-3" method="POST" action="{{ url('category') }}">
            @csrf
            <div class="col-md-8">
                <label for="inputEmail4" class="form-label">Category Name</label>
                <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" placeholder="Enter Category Name" value="{{ old('category_name') }}">
                @error('category_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-8">
                <select class="form-select @error('category_name') is-invalid @enderror" name="status" aria-label="Default select example">
                    <option value="">Status</option>
                    <option value="0">Pending</option>
                    <option value="1">Published</option>
                </select>
                @error('status')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add Now</button>
            </div>
        </form>
    </div>
@endsection
