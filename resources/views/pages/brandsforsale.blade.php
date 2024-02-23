@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row">
                    <div class="col-12 col-md-6 order-1 order-md-0 align-self-md-end">
                        <div class="row py-3 py-sm-5 py-xl-9 bsb-section-mt-md-1 justify-content-sm-center">
                            <div class="col-12 col-sm-10">
                                <h1 class="display-4 mb-4 text-black">Brands for Sale</h1>
                                <div class="row">
                                    <div class="col-12 col-xxl-8">
                                        <p class="mb-0 text-secondary">Buy or sell ecommerce stores with our
                                            marketplace. Established businesses, proven profitability, and due diligence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-0">
                        <figure class="bsb-overlay-figure w-100  m-0"
                            style="--bsb-overlay-figure-opacity: .3; height: 50vh">
                            <img class="img-fluid w-100 object-fit-contain" loading="lazy"
                                src="./assets/img/single/Brands For Sale.png" alt="">
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
                            <img class="card-image card-rounded" loading="lazy" src="./assets/img/hero/Shopify Sales.png"
                                alt="">
                        </div>
                        <div class="col-md-7">
                            <h2>
                                Ecommerce | Health and Beauty
                            </h2>
                            <p>7-year old UK-based oral care eCommerce brand|$3.6M USD yearly revenue| 18% profit
                                margin|Selling 5 SKUs and with a strong growth potential</p>
                        </div>
                        <div class="col-md-2">
                            <div class="p-2">
                                <p class="m-0">Asking Price</p>
                                <h3>USD $1,400,012</h3>
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3 b-sale card-rounded">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <img class="card-image card-rounded" loading="lazy"
                                src="./assets/img/hero/Shopify Dashboard.webp" alt="">
                        </div>
                        <div class="col-md-7">
                            <h2>
                                Ecommerce | Automotive
                            </h2>
                            <p>#1 driving glasses on the market. $1M/Month @ 40% P/M. 45,000+ engaged on email newsletter
                                last 90 days. Market will grow for 10+ years. "Excellent" Trustpilot.</p>
                        </div>
                        <div class="col-md-2">
                            <div class="p-2">
                                <p class="m-0">Asking Price</p>
                                <h3>USD $1,067,590</h3>
                                <button class="btn btn-primary">Buy Now</button>
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
                        <p class="lead">At our branding service, we believe that a strong brand is the key to
                            success in today's competitive marketplace. That's why we offer a comprehensive service that
                            goes beyond just design to help you build a powerful and memorable brand. Contact us today to
                            learn more about how we can help you build a strong brand that sets you apart from the
                            competition.</p>
                    </div>
                </div>
            </div>
        </section>
        @include('includes.get-started')
    </main>
@endsection