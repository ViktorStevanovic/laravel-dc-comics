@extends('layouts.layout')

@section('main-content')
<div class="comics-wrapper">
    {{-- <section class="comics-section container pt-4 d-flex justify-content-center">
        <div class="row">

            <div class="col-12 p-4">
                <div class="card border-0" style="width: 100%;">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                    <p class="card-text text-uppercase text-white pt-2"> {{$comic['title']}} </p>
                    <p class="card-text text-uppercase text-white pt-2"> {{$comic['price']}} </p>
                </div>
            </div>
        </div>

    </section> --}}
    <section class="container text-white p-5 d-flex flex-column align-items-center">
        <div>
            <img src="{{ $comic['thumb'] }}" alt="..." class="mt-4">
        </div>
        <div class="text-center mt-5 mb-4">
            <h1 class="m-0 mt-2">{{$comic['title']}} --- {{$comic['series']}}</h1>
            <h2 class="mt-2 mb-4">Price: {{$comic['price']}}</h2>
            <h4>Description:</h4>
            <p class="m-0 mt-3">{{$comic['description']}}</p>
        </div>
    </section>
</div>
{{-- shop section --}}
<section class="shop">
    <div class="container">
        <div class="row d-flex justify-content-around pt-5 pb-5">
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('./resources/img/buy-comics-digital-comics.png') }}" alt="">
                <p class="text-uppercase text-white m-0 ms-3">Digital Comics</p>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('./resources/img/buy-comics-merchandise.png') }}" alt="">
                <p class="text-uppercase text-white m-0 ms-3">Dc merchandise</p>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('./resources/img/buy-comics-subscriptions.png') }}" alt="">
                <p class="text-uppercase text-white m-0 ms-3">Subscription</p>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('./resources/img/buy-comics-shop-locator.png') }}" alt="">
                <p class="text-uppercase text-white m-0 ms-3">Comic shop locator</p>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('./resources/img/buy-dc-power-visa.svg') }}" alt="">
                <p class="text-uppercase text-white m-0 ms-3">Dc power visa</p>
            </div>
        </div>
    </div>
</section>
@endsection