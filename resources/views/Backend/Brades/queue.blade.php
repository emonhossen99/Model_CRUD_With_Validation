<x-Master>
    <x-slot name="title">
        Model --Brand __Queue
    </x-slot>



{{-- insert success and error message  --}}
@include('Include.Alert')


{{-- insert form  --}}
    <div class="col-md-8 mx-auto">
        <form class="row g-3" method="POST" action="{{ url('/queue') }}">
            @csrf
            <div class="col-md-8">
                <label for="inputEmail4" class="form-label">Queue Name</label>
                <input type="text" class="form-control @error('queue_name') is-invalid @enderror"  name="queue_name" placeholder="Enter Your Name" value="{{ old('queue_name') }}">
                @error('queue_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-8">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror"  name="email" placeholder="Enter Your Eamil" value="{{ old('email') }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add Queue</button>
            </div>
        </form>
    </div>
</x-Master>
