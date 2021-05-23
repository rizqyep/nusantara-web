@extends('layouts.app')

@section('title')
Products
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('/css/products.css')}}">
<link rel="stylesheet" href="{{asset('/css/main.css')}}">
@endpush


@section('content')
<div class="container pb-5">
    <h4 class="font-weight-bold">Products</h4>
    @foreach($products as $product)
    <div class="card mt-3">
        <div class="card-body">
            <div class="d-flex justify-content-start">
                <div class="p-2">
                    <img src="{{$product->image}}" alt="Product Image" class="product-image">
                </div>
                <div class="product-info py-2 px-3 px-md-5">
                    <h5 class="font-weight-bold">
                        {{$product->name}}
                    </h5>
                    <p class="text-muted">
                        <span class="font-weight-bold">Variety : </span> {{$product->variety}}
                    </p>
                    <p class="text-muted">
                        <span class="font-weight-bold">Quality : </span> {{$product->quality}}
                    </p>
                    @foreach($product->contents as $content)
                    <p class="text-muted">
                        <span class="font-weight-bold">{{$content->name}} : </span> {{$content->value}}
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection