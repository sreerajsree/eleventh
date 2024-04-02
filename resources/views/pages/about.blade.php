@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row">
                    <div class="col-12 col-md-8 order-1 order-md-0 align-self-md-end">
                        <div class="row py-3 py-sm-5 py-xl-9 justify-content-sm-center">
                            <div class="col-12 col-sm-10">
                                <h1 class="display-4 mb-4 text-dark">About Us</h1>
                                <p class="mb-0 text-dark">Founded by award winning entrepreneur, Ameerah,
                                    who owns a portfolio of multi million dollar e-commerce brands. We bring you a
                                    solution to any and every barrier you may face as a business owner.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <figure class="bsb-overlay-figure w-100 h-100 m-0" style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                                src="./assets/img/hero/about-image.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container mb-5">
                <div class="row justify-content-md-start">
                    <div class="col-12 text-center">
                        <h2 class="display-5  mb-0">Who we are</h2>
                    </div>
                </div>
            </div>

            <div class="container overflow-hidden">
                <p class="lead text-center">
                    Based in New York, the capital of the world, we lead a network from entry to exit and beyond.
                    <br><br>
                    Create, scale your brand or buy / sell an existing Shopify store with an offer on the table tomorrow.
                    <br><br>
                    We have an extensively written e-book which was masterfully researched and implemented for 2 years prior
                    to being published to enable to you follow the blueprint mark for mark in your own e-commerce business
                    as well as a launch planner to facilitate in the days leading up to your brand launch. Our VIP design
                    day is premeditated and intended for those who need it done ASAP.
                    <br><br>
                    Studio XI creates and edits one months worth of content so you can focus on getting and fulfilling your
                    sales.
                    <br><br>
                    Contact us today to learn more about how we can help you achieve your business goals!
                </p>
            </div>
        </section>

        <!-- Section - Facts -->
        <!-- Fact 3 - Bootstrap Brain Component -->
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 p-0">
                        <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                            src="./assets/img/hero/ameerah-new.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="p-3">
                            <h2 class="display-4 mb-4 text-dark">Our Success</h2>
                            <p class="mb-5 text-dark">With years of experience and deep industry knowledge,
                                we have a proven track record of success and are constantly pushing ourselves to stay
                                ahead of the curve.</p>
                            <div class="row gy-4 gy-sm-0 overflow-hidden">
                                <div class="col-12 col-sm-6">
                                    <div class="card bg-transparent border-dark shadow-sm mb-4">
                                        <div class="card-body text-center p-4 p-xxl-5">
                                            <h4 class="display-5 mb-2 text-dark">60</h4>
                                            <p class="mb-0 text-dark">Finished Projects</p>
                                        </div>
                                    </div>
                                    <div class="card bg-transparent border-dark shadow-sm">
                                        <div class="card-body text-center p-4 p-xxl-5">
                                            <h4 class="display-5 mb-2 text-dark">5k+</h4>
                                            <p class="mb-0 text-dark">Issues Solved</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="card bg-transparent border-dark mt-lg-6 mt-xxl-8 mb-4">
                                        <div class="card-body text-center p-4 p-xxl-5">
                                            <h4 class="display-5 mb-2 text-dark">1k+</h4>
                                            <p class="mb-0 text-dark">Happy Customers</p>
                                        </div>
                                    </div>
                                    {{-- <div class="card bg-transparent border-accent">
                                        <div class="card-body text-center p-4 p-xxl-5">
                                            <h4 class="display-5 mb-2">78</h4>
                                            <p class="mb-0 text-dark">Awwwards</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
