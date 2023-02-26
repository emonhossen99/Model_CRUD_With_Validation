<h1>
    Welcome to Laravel New Project ,This Brand Name Is :<strong>{{ $data->brandSend->brand_name }}</strong>
    And Tis Statas is : @if ($data->brandSend->status == 1)
    <strong>Published</strong>
    @else
    <strong>Pending</strong>
    @endif
</h1>
