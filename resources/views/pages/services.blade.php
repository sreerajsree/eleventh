@extends('layouts.app')

@section('content')
    <main id="main">
        <section>
            <h1 class="display-5 fst-italic text-center py-3">All Services
            </h1>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 p-0">
                        <figure class="bsb-overlay-figure w-100  m-0" style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100 object-fit-contain" loading="lazy"
                                src="{{ asset('assets/img/hero/Brands For Sale.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="text-center text-black p-3">
                            <p class="display-5">01</p>
                            <h2 class="display-4 mb-4 text-black">Brands for Sale</h2>
                            <p class="mb-0 text-dark">Buy or sell ecommerce stores with our
                                marketplace. Established businesses, proven profitability, and due diligence.
                            </p>
                            <div>
                                <a target="_blank" href="{{ route('brandsforsale') }}" class="btn mt-4"
                                    style="background:#CCCCFF; color:#000; text-align:center; padding:10px 20px;">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 p-0 order-1 order-md-0">
                        <div class="text-center text-black p-3">
                            <p class="display-5">02</p>
                            <h2 class="display-4 mb-4 text-black">Branding</h2>
                            <p class="mb-0 text-dark">Craft a unique identity for your business with
                                our expert services. Logo, color palette, messaging, and more.</p>
                            <div>
                                <a target="_blank" href="{{ route('branding') }}" class="btn mt-4"
                                    style="background:#CCCCFF; color:#000; text-align:center; padding:10px 20px;">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <figure class="bsb-overlay-figure w-100  m-0" style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100 object-fit-contain" loading="lazy"
                                src="{{ asset('assets/img/hero/Branding.png') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 p-0">
                        <figure class="bsb-overlay-figure w-100  m-0" style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100 object-fit-contain" loading="lazy"
                                src="{{ asset('assets/img/hero/Marketing & Content Creation.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="text-center text-black p-3">
                            <p class="display-5">03</p>
                            <h1 class="display-4 mb-4 text-black">Marketing & Content Creation</h1>
                            <p class="mb-0 text-dark">Boost your online presence with strategic marketing
                                and engaging content. SEO, social media, email, and more.</p>
                            <div>
                                <a target="_blank" href="{{ route('marketing') }}" class="btn mt-4"
                                    style="background:#CCCCFF; color:#000; text-align:center; padding:10px 20px;">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 p-0 order-1 order-md-0">
                        <div class="text-center text-black p-3">
                            <p class="display-5">04</p>
                            <h1 class="display-4  mb-4 text-black">Concept Creation</h1>
                            <p class="mb-0 text-dark"> Bring your ideas to life with our innovative
                                concept development services. Research, design, and execution.</p>
                            <div>
                                <a target="_blank" href="{{ route('concept') }}" class="btn mt-4"
                                    style="background:#CCCCFF; color:#000; text-align:center; padding:10px 20px;">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <figure class="bsb-overlay-figure w-100  m-0" style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100 object-fit-contain" loading="lazy"
                                src="{{ asset('assets/img/hero/Concept Creation.png') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 p-0">
                        <figure class="bsb-overlay-figure w-100  m-0" style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100 object-fit-contain" loading="lazy"
                                src="{{ asset('assets/img/hero/pr.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="text-center text-black p-3">
                            <p class="display-5">05</p>
                            <h1 class="display-4 mb-4 text-black">Public Relations</h1>
                            <p class="mb-0 text-dark">We are dedicated to helping businesses, individuals, and organizations
                                build and maintain a strong, positive image in the eyes of their target audience.</p>
                            <div>
                                <a target="_blank" href="{{ route('pr') }}" class="btn mt-4"
                                    style="background:#CCCCFF; color:#000; text-align:center; padding:10px 20px;">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('includes.get-started')
    </main>
@endsection
