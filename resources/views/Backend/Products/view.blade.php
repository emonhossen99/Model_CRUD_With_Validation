<x-Master>

    <x-slot name="title">
        Model --View
    </x-slot>
{{-- insert header  --}}
<h1 class="text-center text-primary mt-5">This is Product View Page</h1>
<div class="text-end">
    <a href="{{ url('/products') }}" class="btn btn-danger outline ">Back</a>
</div>

<table class="table table-striped table-hover">

    <tr>
        <th scope="col">Brand Name</th>
        <td colspan="2">{{ $getProduct->brand->brand_name }}</td>
      </tr>

    <tr>
        <th scope="col">Category Name</th>
        <td colspan="2">{{ $getProduct->category->category_name }}</td>
      </tr>

    <tr>
        <th scope="col">Product Name</th>
        <td colspan="2">{{ $getProduct->product_name }}</td>
      </tr>

      <tr>
        <th scope="row">Product Slug</th>
        <td colspan="2">{{ $getProduct->product_slug}}</td>
      </tr>

      <tr>
        <th scope="row">Product Code</th>
        <td colspan="2">{{ $getProduct->product_code}}</td>
      </tr>

      <tr>
        <th scope="row">Product Quntity</th>
        <td colspan="2">{{ $getProduct->qnt}}</td>
      </tr>

      <tr>
        <th scope="row">Product Price</th>
        <td colspan="2">{{ $getProduct->price}}</td>
      </tr>

      <tr>
        <th scope="row">Product Status</th>
        <td colspan="2">
            @if ($getProduct->status == 1)
                <span class="badge bg-success">Published</span>
            @else
            <span class="badge bg-danger">Pending</span>
            @endif
        </td>
      </tr>

      <tr>
        <th scope="row">Product Image</th>
        <td colspan="2"><img width="50px" src="{{asset('uploads/productsImages/'.$getProduct->image)}}" alt=""></td>
      </tr>

      <tr>
        <th scope="row"> SuBTotal</th>
        <td colspan="2">
            @if ($getProduct->status == 1)
            <p class="text-success">{{$getProduct->price *   $getProduct->qnt}}</p>
            @else
           <p class="text-danger">{{ 'You Can Not Buy This Product' }}</p>
            @endif
        </td>
      </tr>
      <tr>
        <th scope="row">Total</th>
        <td colspan="2" >
            @if ($getProduct->status == 1)
            <p class="text-success">{{$getProduct->price *   $getProduct->qnt}}</p>
            @else
           <p class="text-danger">{{ 'You Can Not Buy This Product' }}</p>
            @endif
        </td>
      </tr>
  </table>

  <div class=""></div>

</x-Master>



