@extends('Master.Master')

@section('content')


{{-- insert header  --}}
<h1 class="text-center text-primary mt-5">This is New Brand Update Page</h1>
<div class="text-end">
    <a href="{{ url('/brands') }}" class="btn btn-danger outline ">Back</a>
</div>


{{-- update success and error message  --}}
@include('Include.Alert')

<div class="col-md-8 mx-auto">
    <form class="row g-3" method="POST"  action="{{ route('brands.update', $updatedData->id) }}">
        @csrf
        @method('PUT')
        <div class="col-md-8">
            <input type="hidden" name="update_id" value="{{ $updatedData->id }}">
        </div>
        <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Brand Name</label>
            <input type="text" class="form-control @error('brand_name') is-invalid @enderror" name="brand_name" value="{{ $updatedData->brand_name }}">
            @error('brand_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-md-8">
            <select class="form-select" name="status" aria-label="Default select example">
                <option value="0" {{ $updatedData->status == 0 ? 'selected' : ''}}>Pending</option>
                <option value="1" {{ $updatedData->status == 1 ? 'selected' : ''}}>Published</option>
            </select>
            @error('status')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Update Now</button>
        </div>
    </form>
</div>

@endsection
