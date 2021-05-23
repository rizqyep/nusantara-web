@extends('layouts.app')

@section('title')
    Gallery
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
@endpush


@section('content')
    <div class="container pt-2 pb-5">
        <h3 class="text-center font-weight-bold">Gallery</h3>
        <hr class="text-center w-25 mt-3 mb-2">


        <h5 class="font-weight-bold mb-2">Plantation</h5>
        <p class="text-muted small">Pictures of our land of plantation</p>
        <div class="row mb-3">
            @foreach ($plantationImages as $plantationImage)
                <div class="col-md-4 mb-3">
                    <div class="card rounded">
                        <img height=200 style="object-fit:cover" src="{{ $plantationImage->image }}"
                            alt="Plantation Image {{ $loop->iteration }}">
                    </div>
                </div>
            @endforeach
        </div>



        <h5 class="font-weight-bold mb-2">Process</h5>
        <p class="text-muted small">Pictures of our product's process</p>
        <div class="row mb-3">
            @foreach ($processImages as $processImage)
                <div class="col-md-4 mb-3">
                    <div class="card rounded">
                        <img height=200 style="object-fit:cover" src="{{ $processImage->image }}"
                            alt="Plantation Image {{ $loop->iteration }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
