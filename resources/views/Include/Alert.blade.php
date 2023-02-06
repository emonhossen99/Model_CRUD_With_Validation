{{-- insert success and error message  --}}
<div class="col-md-8 mx-auto">
    @if (session()->get('Success'))
    <div class="alert alert-success">
        <p class="mb-0"><strong>Success:</strong>{{ session()->get('Success') }}</p>
    </div>
@endif

@if (session()->get('Error'))
    <div class="alert alert-danger">
        <p class="mb-0"><strong>Error:</strong>{{ session()->get('Error') }}</p>
    </div>
@endif
  </div>
