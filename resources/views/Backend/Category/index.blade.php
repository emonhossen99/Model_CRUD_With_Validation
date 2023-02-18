<x-Master>

    <x-slot name="title">
        Model --Category
    </x-slot>

    {{-- insert success and error message  --}}
    @include('Include.Alert')

    <a href="{{ url('category/create') }}" class="btn btn-primary outline mt-5 mb-5">Add Now</a>

    <x-Component>
        THis Is Example In Category Component
    </x-Component>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Category Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categoryData as $data)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $data->category_name }}</td>
                    <td>
                        @if ($data->status == 1)
                            <span class="badge bg-success">Published</span>
                        @else
                            <span class="badge bg-danger">Pending</span>
                        @endif
                    </td>

                    <td>
                        <div class="d-flex">
                            <a href="{{ url('category/' . $data->id . '/edit') }}"><button type="button"
                                    class="btn btn-info editButton">Edit</button></a>
                            <form method="POST" action="{{ route('category.destroy', $data->id) }}">
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
    @include('Include.ConfirmAlert')
</x-Master>
