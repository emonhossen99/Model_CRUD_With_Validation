<x-Master>

    <x-slot name="title">
        Model --Brands
    </x-slot>

    <a href="{{ url('brands/create') }}" class="btn btn-primary outline mt-5 mb-5">Add Now</a>
    <style>
        .flex.justify-between.flex-1.sm\:hidden {
            display: none;
        }

        .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-bottom:50px !important;
        }

        svg.w-5.h-5 {
            width: 21px;
        }
    </style>

    <x-Component>
        This Is Example In Brands Component
    </x-Component>

    @php
    $name = 'alert alert-danger'
  @endphp

    @php
 $message = ' Hello This is a Brands'
  @endphp

    <x-Brand :message="$message" :myclass="$name" type='fw-bold'>

    </x-Brand>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($brandsData as $data)
                <tr>
                    <th>{{ $data->id }}</th>
                    <td>{{ $data->brand_name }}</td>
                    <td>
                        @if ($data->status == 1)
                            <span class="badge bg-success">Published</span>
                        @else
                            <span class="badge bg-danger">Pending</span>
                        @endif
                    </td>

                    <td>
                        <div class="d-flex">
                            <a href="{{ url('brands/' . $data->id . '/edit') }}"><button type="button"
                                    class="btn btn-info editButton">Edit</button></a>
                            <form method="POST" action="{{ route('brands.destroy', $data->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm"
                                    data-toggle="tooltip" title='Delete'>Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-danger text-center">No Data Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{-- {{ $brandsData->onEachSide(2)->links()}} --}}
    @include('Include.ConfirmAlert')
</x-Master>
