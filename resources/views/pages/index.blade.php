@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-black">
            <div class="vh-100 card border-0 rounded-0  overflow-hidden text-center bsb-overlay"
                style="background-image: url('{{ asset('assets/img/hero/first-section.png') }}'); --bsb-overlay-opacity: .1; background-size:cover;background-position: 50% 50%;background-repeat: no-repeat;">
                <div class="card-body container text-white d-flex align-items-center">
                    <div class="fw-bold w-fifty mx-auto">
                        <p><a href="{{ route('contact') }}" class="getintouch">GET IN TOUCH</a></p>
                        <h1 class="fst-italic fs-44 my-4 ">Eleventh Acquire</h1>
                        <h4 class="fst-italic">Create a masterpiece and scale it to
                            the moon. We
                            specialize in futuristic sustainability, to increase your brand relevance for today and
                            tomorrow.</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5" style="background-color: #f5f5f5" id="studio">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="p-3">
                            <h2 class="display-6 mb-0 font-lib">Studio XI</h2>
                            <p class="fs-6 font-man my-3 text-primary" style="font-weight:500;">
                                At studio XI we create 30 days worth of content for you in 1
                                hour. We have monthly and annual packages available to help you maximize your sales so we
                                can
                                take the weight off your shoulders and you can focus on what’s important.
                            </p>
                            <p class="lead mb-4">
                                Simply bring or send in your products for your allocation to our studio in NYC and leave the
                                magic to us. We can also create campaigns and provide voiceovers. “Creativity is inventing,
                                experimenting, growing, taking risks, breaking rules, making mistakes, and having fun.”
                            </p>
                            <a target="_blank" href="https://calendly.com/xiacquire"
                                class="underline text-black text-uppercase fw-bold">Book Now</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="slider">
                            <div>
                                <img src="{{ asset('assets/img/studio/studio-1.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/studio/studio-2.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/studio/studio-3.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/studio/studio-4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-black">
            <div class="card border-0 rounded-0  overflow-hidden text-center bsb-overlay"
                style="background-image: url('{{ asset('assets/img/hero/service-section.png') }}'); --bsb-overlay-opacity: .4; background-size:cover;background-position: 50% 50%;background-repeat: no-repeat;">
                <h2 class="display-6 mb-0 font-lib text-center text-light pt-10 pb-4">Services</h2>
                <div class="card-body text-white d-flex align-items-center">
                    <div class="row align-items-center card-height justify-content-center">
                        <div class="col-md-2">
                            <p class="text-uppercase mb-1"><a href="{{ route('brandsforsale') }}"
                                    class="text-light text-decoration-none fw-bold">Brands For Sale</a></p>
                            <p class="text-overflow-custom">Buy or sell ecommerce stores with our marketplace.
                                Established businesses, proven
                                profitability, and due diligence.</p>
                            <div>
                                <a href="{{ route('brandsforsale') }}">
                                    <svg fill="#fff" height="20px" width="20px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 330 330" xml:space="preserve">
                                        <path id="XMLID_27_" d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255
                         s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0
                         c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <svg class="se-line" style="width: 36.05px; height: 144.57px;">
                            <line data-d-strokelinecap="round" data-d-linestyle="solid" data-d-thickness="1"
                                data-d-rotatedwidth="36.05" data-d-rotatedheight="144.57" data-d-widthoffset="56.98"
                                data-d-heightoffset="72.29" data-d-isround="true" data-d-rotation="76"
                                data-d-roundedsolid="true" data-d-dotted="false" data-d-length="150"
                                data-d-mirrorline="true" data-d-dashwidth="21" data-d-spacing="15"
                                data-d-dasharrayvalue="none" data-m-strokelinecap="round" data-m-linestyle="solid"
                                data-m-thickness="1" data-m-rotatedwidth="56" data-m-rotatedheight="96.99"
                                data-m-widthoffset="28.5" data-m-heightoffset="48.5" data-m-isround="true"
                                data-m-rotation="60" data-m-roundedsolid="true" data-m-dotted="false" data-m-length="113"
                                data-m-mirrorline="true" data-m-dashwidth="21" data-m-spacing="15"
                                data-m-dasharrayvalue="none" x1="0" y1="0" x2="100%" y2="100%"
                                style="stroke-width: 1px; stroke-dasharray: 0px;">
                            </line>
                        </svg>
                        <div class="col-md-2">
                            <p class="text-uppercase mb-1"><a href="{{ route('branding') }}"
                                    class="text-light text-decoration-none fw-bold">Branding</a></p>
                            <p class="text-overflow-custom">Craft a unique identity for your business with our
                                expert services. Logo, color
                                palette, messaging, and more.</p>
                            <div>
                                <a href="{{ route('branding') }}">
                                    <svg fill="#fff" height="20px" width="20px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 330 330" xml:space="preserve">
                                        <path id="XMLID_27_"
                                            d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255
                             s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0
                             c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <svg class="se-line" style="width: 36.05px; height: 144.57px;">
                            <line data-d-strokelinecap="round" data-d-linestyle="solid" data-d-thickness="1"
                                data-d-rotatedwidth="36.05" data-d-rotatedheight="144.57" data-d-widthoffset="56.98"
                                data-d-heightoffset="72.29" data-d-isround="true" data-d-rotation="76"
                                data-d-roundedsolid="true" data-d-dotted="false" data-d-length="150"
                                data-d-mirrorline="true" data-d-dashwidth="21" data-d-spacing="15"
                                data-d-dasharrayvalue="none" data-m-strokelinecap="round" data-m-linestyle="solid"
                                data-m-thickness="1" data-m-rotatedwidth="56" data-m-rotatedheight="96.99"
                                data-m-widthoffset="28.5" data-m-heightoffset="48.5" data-m-isround="true"
                                data-m-rotation="60" data-m-roundedsolid="true" data-m-dotted="false"
                                data-m-length="113" data-m-mirrorline="true" data-m-dashwidth="21" data-m-spacing="15"
                                data-m-dasharrayvalue="none" x1="0" y1="0" x2="100%"
                                y2="100%" style="stroke-width: 1px; stroke-dasharray: 0px;">
                            </line>
                        </svg>
                        <div class="col-md-2">
                            <p class="text-uppercase mb-1"><a href="{{ route('marketing') }}"
                                    class="text-light text-decoration-none fw-bold">Marketing & Content
                                    Creation</a></p>
                            <p class="text-overflow-custom">Boost your online presence with strategic marketing
                                and engaging content. SEO,
                                social media, email, and more.</p>
                            <div>
                                <a href="{{ route('marketing') }}">
                                    <svg fill="#fff" height="20px" width="20px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 330 330" xml:space="preserve">
                                        <path id="XMLID_27_"
                                            d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255
                             s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0
                             c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <svg class="se-line" style="width: 36.05px; height: 144.57px;">
                            <line data-d-strokelinecap="round" data-d-linestyle="solid" data-d-thickness="1"
                                data-d-rotatedwidth="36.05" data-d-rotatedheight="144.57" data-d-widthoffset="56.98"
                                data-d-heightoffset="72.29" data-d-isround="true" data-d-rotation="76"
                                data-d-roundedsolid="true" data-d-dotted="false" data-d-length="150"
                                data-d-mirrorline="true" data-d-dashwidth="21" data-d-spacing="15"
                                data-d-dasharrayvalue="none" data-m-strokelinecap="round" data-m-linestyle="solid"
                                data-m-thickness="1" data-m-rotatedwidth="56" data-m-rotatedheight="96.99"
                                data-m-widthoffset="28.5" data-m-heightoffset="48.5" data-m-isround="true"
                                data-m-rotation="60" data-m-roundedsolid="true" data-m-dotted="false"
                                data-m-length="113" data-m-mirrorline="true" data-m-dashwidth="21" data-m-spacing="15"
                                data-m-dasharrayvalue="none" x1="0" y1="0" x2="100%"
                                y2="100%" style="stroke-width: 1px; stroke-dasharray: 0px;">
                            </line>
                        </svg>
                        <div class="col-md-2">
                            <p class="text-uppercase mb-1"><a href="{{ route('concept') }}"
                                    class="text-light text-decoration-none fw-bold">Concept Creation</a></p>
                            <p class="text-overflow-custom">Bring your ideas to life with our innovative
                                concept development services.
                                Research, design, and execution.</p>
                            <div>
                                <a href="{{ route('concept') }}">
                                    <svg fill="#fff" height="20px" width="20px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 330 330" xml:space="preserve">
                                        <path id="XMLID_27_"
                                            d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255
                             s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0
                             c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-primary py-3" data-bs-theme="dark">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <figure class="bsb-overlay-figure w-100 h-75 m-0" style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100 h-75 object-fit-cover curved-image-top" loading="lazy"
                                src="./assets/img/hero/newyork.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-md-9">
                        <div class="p-2">
                            <h2 class="display-6 mb-0 font-lib mb-3 text-dark">About Us</h2>
                            <p class="text-dark lead">Based in New York, the capital of the world, we lead a
                                network
                                from entry to exit and beyond.
                                Create, scale your brand or buy / sell an existing Shopify store with an offer on the table
                                tomorrow. We have an extensively written e-book which was masterfully researched and
                                implemented
                                for 2 years prior to being published to enable to you follow the blueprint mark for mark in
                                your
                                own e-commerce business as well as a launch planner to facilitate in the days leading up to
                                your
                                brand launch. Our VIP design day is premeditated and intended for those who need it done
                                ASAP.
                                Studio XI creates and edits one months worth of content so you can focus on getting and
                                fulfilling your sales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="container-fluid py-5">
            <div>
                <div class="row justify-content-md-center" id="clients">
                    <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7 text-center">
                        <h2 class="display-6 mb-0 text-center pb-4 font-lib">Trusted by</h2>
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
        </section>
        <section class="container-fluid" style="margin-bottom: 80px">
            <h2 class="display-6 py-3 text-center font-lib">Testimonial</h2>
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
        // Slick slider init
        $(".slider").slick({
            arrows: true,
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: false,
            variableWidth: false,
            draggable: true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1
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
                arrows: false
            });

        });
    </script>
@endpush
