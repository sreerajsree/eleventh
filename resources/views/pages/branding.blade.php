@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row">
                    <div class="col-12 col-md-8 order-1 order-md-0 align-self-md-end">
                        <div class="row py-3 py-sm-5 py-xl-9 justify-content-sm-center">
                            <div class="col-12 col-sm-10">
                                <h1 class="display-4  mb-4 text-light">Branding</h1>
                                <p class="mb-0 text-secondary">Craft a unique identity for your business with
                                    our expert services. Logo, color palette, messaging, and more.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <figure class="bsb-overlay-figure w-100  m-0"
                            style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100 object-fit-cover" loading="lazy"
                                src="{{ asset('assets/img/hero/Branding.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-4">
            <div class="container">
                <div class="row justify-content-md-center gy-3 gy-xl-4">
                    <div class="col-12 col-md-11 col-lg-8 gy-3 gy-xl-4 bsb-entry-content">
                        <p class="lead">At our branding service, we understand that a strong brand is the foundation
                            of any successful business. It's more than just a logo or a name; it's a promise to your
                            customers that they can expect a certain level of quality, service, and experience. That's why
                            we offer a comprehensive branding service that goes beyond just design to help you build a
                            powerful and memorable brand.</p>
                        <p class="lead">Our branding process begins with a deep dive into your business, your target
                            audience, and your
                            competition. We'll work with you to define your unique value proposition, your brand
                            personality, and your messaging strategy. We'll also conduct research to better understand your
                            audience's needs, preferences, and pain points.</p>
                        <p class="lead">
                            Based on our findings, we'll develop a brand identity that reflects your values, mission, and
                            vision. This includes creating a logo, color palette, typography, and other visual elements that
                            are consistent across all touchpoints. We'll also help you develop a tone of voice and messaging
                            strategy that resonates with your audience and sets you apart from the competition.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 p-0">
                        <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                            src="{{ asset('assets/img/hero/content.jpg') }}" alt="">
                    </div>
                    <div class="col-12 col-md-6 align-self-md-end dots">
                        <div class="p-5">
                            <h2 class="display-7  mb-4">In addition to design, we offer a range of branding
                                services that help you build a strong and cohesive brand. This includes:</h2>
                            <h2 class="link-white border-light border-start border-5 p-3">Brand strategy
                                development: We'll work with you to define your brand positioning, value
                                proposition, and messaging strategy</h2>
                            <h2 class="link-white border-light border-start border-5 p-3">Brand research:
                                We'll conduct research to better understand your audience's needs, preferences, and
                                pain points.</h2>
                            <h2 class="link-white border-light border-start border-5 p-3">Brand identity
                                design: We'll create a logo, color palette, typography, and other
                                visual elements that are consistent across all touchpoints.</h2>
                            <h2 class="link-white border-light border-start border-5 p-3">
                                Brand messaging development: We'll help you develop a tone of voice and messaging
                                strategy that resonates with your audience and sets you apart from the competition.
                            </h2>
                            <h2 class="link-white border-light border-start border-5 p-3">
                                Brand guidelines development: We'll create a set of guidelines that ensure
                                consistency across all touchpoints and help you maintain a strong brand over time.
                            </h2>
                            <h2 class="link-white border-light border-start border-5 p-3">Brand
                                implementation: We'll help you implement your new brand across all
                                touchpoints, from your website and marketing materials to your products and
                                packaging.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-4 ">
            <div class="container">
                <div class="row justify-content-md-center gy-3 gy-xl-4">
                    <div class="col-12 col-md-11 col-lg-8 gy-3 gy-xl-4 bsb-entry-content">
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
