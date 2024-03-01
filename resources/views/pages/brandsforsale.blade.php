@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row">
                    <div class="col-12 col-md-8 order-1 order-md-0 align-self-md-end">
                        <div class="row py-3 py-sm-5 py-xl-9 justify-content-sm-center">
                            <div class="col-12 col-sm-10">
                                <h1 class="display-4 mb-4 text-light">Brands for Sale</h1>
                                <p class="mb-0 text-secondary">Buy or sell ecommerce stores with our
                                    marketplace. Established businesses, proven profitability, and due diligence.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <figure class="bsb-overlay-figure w-100  m-0" style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100 object-fit-contain" loading="lazy"
                                src="{{ asset('assets/img/hero/Brands For Sale.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-4">
            <div class="container">
                <div class="card b-sale card-rounded">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <img class="card-image card-rounded" loading="lazy" src="{{ asset('assets/img/hero/Eleven.png') }}"
                                alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="p-3">
                                <h2>
                                    Ecommerce | Clothing
                                </h2>
                                <p>7-year old US-based clothing eCommerce brand|$3.6M USD yearly revenue| 18% profit
                                    margin|Selling 5 SKUs and with a strong growth potential</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="p-3">
                                <p class="m-0">Asking Price</p>
                                <h3 class="mb-3">USD $1,400,012</h3>
                                <a class="btn btn-primary mt-4" href="{{ route('ecommerceClothing') }}">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3 b-sale card-rounded">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <img class="card-image card-rounded" loading="lazy" src="{{ asset('assets/img/hero/Elemnt.png') }}"
                                alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="p-3">
                                <h2>
                                    Ecommerce | Phone Cases
                                </h2>
                                <p>#1 driving glasses on the market. $1M/Month @ 40% P/M. 45,000+ engaged on email
                                    newsletter
                                    last 90 days. Market will grow for 10+ years. "Excellent" Trustpilot.</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="p-3">
                                <p class="m-0">Asking Price</p>
                                <h3 class="mb-3">USD $1,067,590</h3>
                                <a class="btn btn-primary mt-4" href="{{ route('ecommercePhone') }}">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="py-4 ">
            <div class="container">
                <div class="row justify-content-md-center gy-3 gy-xl-4">
                    <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6 gy-3 gy-xl-4 bsb-entry-content">
                        <p class="lead">If you have any brand you want to list for sale on our website, please get in
                            touch with us.</p>
                        <p class="text-center"><a href="{{ route('contact') }}" class="btn"
                                style="background:#0e3e30; border-radius:10px; color:#fff; text-align:center; padding:10px 20px;">Get
                                in
                                Touch</a></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
