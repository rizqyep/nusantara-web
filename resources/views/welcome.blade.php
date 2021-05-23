@extends('layouts.app')

@section('title')
Home
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

    <p class="text-muted text-center mb-5">
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


    <div class="embed-responsive embed-responsive-16by9 mx-auto">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/810aNvhon4w" allowfullscreen></iframe>
    </div>

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
                <ul class="mt-3 text-white font-weight-bold missions">
                    <li class="mb-3">Work with local farmers to produce the best products.</li>
                    <li class="mb-3">Maintain product availability so that the quality and quantity are in accordance
                        with the
                        demands of
                        the national and international market.
                    </li>
                    <li class="mb-3">Increase product promotion through online and other media.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    <h1 class="text-center font-weight-bold our-team">Our Team</h1>
    <div class="d-flex justify-content-center mt-5">
        <div>
            <img src="{{asset('/img/farisafdhil.jpg')}}" alt="Faris Afdhil" class="rounded-circle team-image"
                loading="lazy">

            <h5 class="font-weight-bold text-center mt-3">
                Faris Afdhil Fawwaz
            </h5>
            <p class="text-muted text-center">General Manager</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 mb-5 col-12">
            <div class="d-flex justify-content-center">
                <img src="{{asset('/img/farhan.jpg')}}" alt="M.Farhan" class="rounded-circle team-image" loading="lazy">
            </div>
            <h5 class="font-weight-bold text-center mt-3">
                M.Farhan
            </h5>
            <p class="text-muted text-center">Content Manager</p>
        </div>
        <div class="col-md-4 mb-5 col-12">
            <div class="d-flex justify-content-center">
                <img src="{{asset('/img/jeri.jpeg')}}" alt="Huzairi Sufriadi" class="rounded-circle team-image"
                    loading="lazy">
            </div>
            <h5 class="font-weight-bold text-center mt-3">
                Huzairi Sufriadi
            </h5>
            <p class="text-muted text-center">Relationship Manager</p>
        </div>
        <div class="col-md-4 mb-5 col-12">
            <div class="d-flex justify-content-center">
                <img src="{{asset('/img/rep.jpg')}}" alt="Rizqy Eka Putra" class="rounded-circle team-image"
                    loading="lazy">
            </div>
            <h5 class="font-weight-bold text-center mt-3">
                Rizqy Eka Putra
            </h5>
            <p class="text-muted text-center">Technical Lead</p>
        </div>
    </div>

</div>
@endsection
