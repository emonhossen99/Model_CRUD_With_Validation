<x-Master>

    <x-slot name="title">
        Model --Category __Update
    </x-slot>

{{-- insert header  --}}
<h1 class="text-center text-primary mt-5">This is New Category Update Page</h1>
<div class="text-end">
    <a href="{{ url('category') }}" class="btn btn-danger outline ">Back</a>
</div>


{{-- update success and error message  --}}
@include('Include.Alert')

<div class="col-md-8 mx-auto">
    <form class="row g-3" method="POST"  action="{{ route('category.update', $updatedData->id) }}">
        @csrf
        @method('PUT')
        <div class="col-md-8">
            <input type="hidden" name="update_id" value="{{ $updatedData->id }}">
        </div>
        <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Category Name</label>
            <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{ $updatedData->category_name }}">
            @error('category_name')
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

</x-Master>
