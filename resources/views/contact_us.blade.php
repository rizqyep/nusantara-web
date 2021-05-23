@extends('layouts.app')

@section('title')
Contact Us
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('/css/products.css')}}">
<link rel="stylesheet" href="{{asset('/css/main.css')}}">
@endpush


@section('content')
<div class="container pt-2 pb-5">

    <h3 class="font-weight-bold text-dark mb-2">Contact Us</h3>
    <hr class="mb-3">
    <h6 class="mb-3"> <i class="fab fa-whatsapp mr-2"></i> Phone/WhatsApp : <a
            target="_blank" href="https://wa.me/6285261606911">+6285261606911</a></h6>
    <h6 class="mb-3"> <i class="fas fa-envelope mr-2"></i> E-mail : <a
            href="mailto:nusantaraessentialoil@gmail.com">nusantaraessentialoil@gmail.com</a></h6>

</div>
@endsection