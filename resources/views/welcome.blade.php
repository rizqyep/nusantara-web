@extends('layouts.app')

@section('title')
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('/css/home.css')}}">
<link rel="stylesheet" href="{{asset('/css/main.css')}}">
@endpush


@section('content')
<div class="top-container">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <div class="tagline-container">
                    <h1 class="tagline font-weight-bold text-white">OIL<br>FROM<br>THE<br>NATURE</h1>
                    <div class="tagline-dash"></div>
                </div>
            </div>
            <div class="col-md-6">
                <p class="text-white caption">Nusantara Essential Oil was established as a company
                    engaged in plantation
                    commodities, especially patchouli oil and lemongrass oil.
                    <br>Straight from the land of Aceh with the best quality in Indonesia.
                    <br>Our company offers cooperation with various national and international companies in the form of
                    many
                    works that match our expertise.
                </p>
            </div>
        </div>
    </div>


</div>

<div class="container pt-5 pb-5" id="about-us">
    <h1 class="text-center font-weight-bold about-us-title">About Us</h1>
    <hr class="about-us-dash text-center">

    <p class="text-muted text-center">
        Nusantara Essential Oil is one of the leading producers of essential oil raw materials in Indonesia.
        We produce patchouli oil and lemongrass oil. Nusantara Essential Oil is part of the company PT. Bima Marga
        Nusantara with a very diverse customer base.
        <br>
        <br>
        Our dedicated production and quality control teams have worked tirelessly to deliver the highest quality
        products our customers expect.
        <br>
        <br>
        We continue to improve and develop our plantations and production plants to provide the best products to our
        customers.
        <br>
        <br>
        Ultimately, it is our top priority to meet our customer's satisfaction and expectations.
    </p>

</div>

<div class="mission-container mb-5">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <div class="tagline-container">
                    <h1 class="mission-title font-weight-bold text-white">NUSANTARA<br>OIL'S<br>MISSIONS</h1>
                    <div class="tagline-dash"></div>
                </div>
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                <ul class="mt-3 text-white font-weight-bold">
                    <li>Work with local farmers to produce the best products.</li>
                    <li>Maintain product availability so that the quality and quantity are in accordance with the
                        demands of
                        the national and international market.
                    </li>
                    <li>Increase product promotion through online and other media.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
