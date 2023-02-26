<x-Master>

    <x-slot name="title">
        Model --Products
    </x-slot>
 {{-- insert success and error message  --}}
 @include('Include.Alert')
<a href="{{ url('products/create ') }}" class="btn btn-primary outline mt-5 mb-5">Add Now</a>

<x-Component>
    THis Is Example In Product Component
</x-Component>

@php
    $name = 'md Emon Hossen'
@endphp

<x-Alart :message="$name" class='fw-bolder' type='success'>
</x-Alart>

@php
    $alerts = 'alert alert-warning'
@endphp
<x-product :class="$alerts" type="fw-bold">
</x-product>
<table class="table">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Brad Name</th>
        <th scope="col">Category Name</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Slug</th>
        <th scope="col">Product Code</th>
        <th scope="col">Product Quntity</th>
        <th scope="col">Price</th>
        <th scope="col">Status</th>
        <th scope="col">Images</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($productData as $data)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $data->brand->brand_name}}</td>
            <td>{{ $data->category->category_name}}</td>
            <td>{{ lowercase($data->product_name)}}</td>
            <td>{{ $data->product_slug}}</td>
            <td>{{ $data->product_code}}</td>
            <td>{{ $data->qnt}}</td>
            <td>{{ $data->price}}</td>
            <td>
                @if ($data->status == 1)
               <span class="badge bg-success">Published</span>
                @else
               <span class="badge bg-danger">Pending</span>
                @endif
           </td>
            <td>
                <img class="w-50 h-20" src="{{ file_exists('uploads/productsImages/'.$data->image) ? asset('uploads/productsImages/'.$data->image) : asset('uploads/productsImages/blank.jpg') }}" alt="">
            </td>
            <td>
                <div class="d-flex">
                    <a href="{{ url('products/' . $data->id.'/edit') }}"><button type="button"
                            class="btn btn-info editButton">Edit</button></a>
                    <a href="{{ url('view/'.$data->id) }}"><button type="button"
                            class="btn btn-info editButton">View</button></a>

                    <form method="POST" action="{{ route('products.destroy', $data->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm"
                            data-toggle="tooltip" title='Delete'>Delete</button>
                    </form>
                </div>

            </td>
          </tr>
        @empty
        <td colspan="11" class="text-danger text-center">No Data Found</td>
        @endforelse

    </tbody>
  </table>
  @include('Include.ConfirmAlert')
</x-Master>
