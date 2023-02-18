@props(['message','type'])
<div  {{ $attributes->merge(['class'=>'alert alert-'.$type]) }}>
    {{-- @dd($attributes) --}}
{{ $message }}
</div>
