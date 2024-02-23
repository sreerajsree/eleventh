@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="p-4">
                            <h1 class="display-6 mb-4 text-black font-lus fst-italic">Create a masterpiece and scale it to the moon. We
                                specialize in futuristic sustainability, to increase your brand relevance for today and
                                tomorrow.</h1>
                            <p class="mb-3 text-secondary font-lus">
                                We offer customized solutions tailored to your needs. Trust us as your one-stop
                                shop for branding, web design, and content marketing.
                            </p>
                            <p><a href="{{ route('contact') }}" class="btn"
                                    style="background:#D58E22; border-radius:10px; color:#fff; text-align:center; padding:10px 20px;">Get
                                    in
                                    Touch</a></p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <figure class="bsb-overlay-figure d-flex justify-content-center"
                            style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid" loading="lazy" src="./assets/img/hero/top-image.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="row justify-content-md-center" id="clients">
                        <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7 text-center">
                            <h2 class="display-6 lead mb-0 font-lib">Trusted by</h2>
                        </div>
                    </div>
                </div>
                <div class="logos-slider slider mb-4">
                    <div class="slide"><img src="./assets/img/hero/11.png"></div>
                    <div class="slide"><img src="./assets/img/hero/google.png"></div>
                    <div class="slide"><img src="./assets/img/hero/campbells.png"></div>
                    <div class="slide"><img src="./assets/img/hero/ulta-beauty.png"></div>
                    <div class="slide"><img src="./assets/img/hero/lyft.png"></div>
                    <div class="slide"><img src="./assets/img/hero/converse.png"></div>
                    <div class="slide"><img src="./assets/img/hero/ameerah.png"></div>
                </div>
            </div>
        </section>




        <section class="py-4">
            <div class="container mb-5">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7 text-center">
                        <h2 class="display-6 mb-0 font-lib">Our Services</h2>
                    </div>
                </div>
            </div>

            <div class="container overflow-hidden">
                <div class="row gy-4 gy-md-0 gx-xxl-5">
                    <div class="col-12 col-md-3">
                        <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan mb-3">
                            <div class="text-center">
                                <figure class="bsb-overlay-figure d-flex justify-content-center"
                                    style="--bsb-overlay-figure-opacity: .3">
                                    <img class="img-fluid" loading="lazy" src="./assets/img/single/Brands For Sale.png"
                                        alt="">
                                </figure>
                                <h5 class="fw-bold font-man">Brands For Sale</h5>
                                <div class="my-3">
                                    <a href="{{ route('branding') }}" class="text-decoration-none link-primary">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan mb-3">
                            <div class="text-center">
                                <figure class="bsb-overlay-figure d-flex justify-content-center"
                                    style="--bsb-overlay-figure-opacity: .3">
                                    <img class="img-fluid" loading="lazy" src="./assets/img/single/Branding.png"
                                        alt="">
                                </figure>
                                <h5 class="fw-bold font-man">Branding</h5>
                                <div class="my-3">
                                    <a href="{{ route('branding') }}" class="text-decoration-none link-primary">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan mb-3">
                            <div class="text-center">
                                <figure class="bsb-overlay-figure d-flex justify-content-center"
                                    style="--bsb-overlay-figure-opacity: .3">
                                    <img class="img-fluid" loading="lazy" src="./assets/img/single/Marketing & Content Creation.png"
                                        alt="">
                                </figure>
                                <h5 class="fw-bold font-man">Marketing & Content Creation</h5>
                                <div class="my-3">
                                    <a href="{{ route('marketing') }}" class="text-decoration-none link-primary">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan mb-3">
                            <div class="text-center">
                                <figure class="bsb-overlay-figure d-flex justify-content-center"
                                style="--bsb-overlay-figure-opacity: .3">
                                <img class="img-fluid" loading="lazy" src="./assets/img/single/Concept Creation.png"
                                    alt="">
                            </figure>
                                <h5 class="fw-bold font-man">Concept Creation</h5>
                                <div class="my-3">
                                    <a href="{{ route('concept') }}" class="text-decoration-none link-primary">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-1">
            <div class="container mb-5">
                <div class="row justify-content-md-center align-items-center">
                    <div class="col-md-5">
                        <figure class="bsb-overlay-figure w-100 h-100 m-0" style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100 h-100 object-fit-cover curved-image-full" loading="lazy"
                                src="./assets/img/hero/studio.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-md-7 curved-image-full" style="background:#FCF3ED">
                        <div class="text-start py-4 px-3">
                            <h2 class="display-6 mb-0 font-lib">Studio XI</h2>
                            <p class="lead my-3" style="font-weight:500;">
                                At studio XI we create 30 days worth of content for you in 1
                                hour. We have monthly and annual packages available to help you maximize your sales so we
                                can
                                take the weight off your shoulders and you can focus on what’s important.
                            </p>
                            <p class="lead">
                                Simply bring or send in your products for your allocation to our studio in NYC and leave the
                                magic to us. We can also create campaigns and provide voiceovers. “Creativity is inventing,
                                experimenting, growing, taking risks, breaking rules, making mistakes, and having fun.”
                            </p>
                            <a target="_blank" href="https://calendly.com/xiacquire" class="btn mt-4"
                                style="background:#D58E22; border-radius:10px; color:#fff; text-align:center; padding:10px 20px;">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-bottom: 120px">
            <h2 class="display-6 mb-0 text-center pb-4 font-lib">Testimonial</h2>
            <div class="sd_master_wrapper">
                <div class="sdtestBg2"></div>
                <div class="sdtestBg3"></div>
                <div class="slideshow">
                    <div class="content">
                        <div class="btnNtxt">
                            <div class="sdAllContent">
                                <div class="sd_scroll">
                                    <h5 class="sdCustomSliderHeadig">Working with XI Acquire has been a game-changer for
                                        our business. Their content creation services have helped us to establish a strong
                                        online presence, and their marketing strategies have resulted in a significant
                                        increase in leads and sales. We highly recommend their services to any business
                                        looking to grow.</h5>
                                </div>
                                <p class="SdClientDesc">Sarah Johnson</p>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="btnNtxt">
                            <div class="sdAllContent">
                                <div class="sd_scroll">
                                    <h5 class="sdCustomSliderHeadig">Their team is incredibly talented and passionate about
                                        what they do. They took the time to understand our brand and our target audience,
                                        and their branding services have helped us to stand out in a crowded market. We
                                        couldn't be happier with the results and would recommend them to anyone looking for
                                        top-notch branding services.</h5>
                                </div>
                                <p class="SdClientDesc">Michael Brown</p>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="btnNtxt">
                            <div class="sdAllContent">
                                <div class="sd_scroll">
                                    <h5 class="sdCustomSliderHeadig">We have worked with several agencies in the past, but
                                        XI Acquire is by far the best. Their content creation services are exceptional, and
                                        they consistently deliver high-quality work that meets our needs and exceeds our
                                        expectations. We highly recommend their services to anyone looking for reliable and
                                        talented content creators.</h5>
                                </div>
                                <p class="SdClientDesc">Emily Davis</p>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="btnNtxt">
                            <div class="sdAllContent">
                                <div class="sd_scroll">
                                    <h5 class="sdCustomSliderHeadig">Working with XI Acquire has been a pleasure from start
                                        to finish. Their marketing strategies are innovative and effective, and they have
                                        helped us to achieve our business goals. We have seen a significant return on
                                        investment and would highly recommend their services to anyone looking to take their
                                        marketing to the next level.</h5>
                                </div>
                                <p class="SdClientDesc">John Smith</p>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="btnNtxt">
                            <div class="sdAllContent">
                                <div class="sd_scroll">
                                    <h5 class="sdCustomSliderHeadig">The team at XI Acquire is incredibly responsive and
                                        easy to work with. They are always available to answer our questions and provide
                                        guidance, and their customer service is top-notch. We highly recommend their
                                        services to anyone looking for a reliable and responsive agency.</h5>
                                </div>
                                <p class="SdClientDesc">Rachel Lee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('includes.get-started')
    </main>
@endsection
@push('scripts')
    <script>
        //logo slider
        $('.logos-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 2
                }
            }]
        });
    </script>
    <script>
        jQuery(document).ready(function($) {
            var $slickElement = $('.slideshow');

            $slickElement.slick({
                autoplay: true,
                dots: false,
            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $(".card").hover(
                function() {
                    $(this).addClass('shadow');
                },
                function() {
                    $(this).removeClass('shadow');
                }
            );
        });
    </script>
@endpush
