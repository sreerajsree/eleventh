@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row">
                    <div class="col-12 col-md-8 order-1 order-md-0 align-self-md-end">
                        <div class="row py-3 py-sm-5 py-xl-9 justify-content-sm-center">
                            <div class="col-12 col-sm-10">
                                <h1 class="display-4  mb-4 text-dark">Public Relations</h1>
                                <p class="mb-0 text-dark"> We are dedicated to helping businesses, individuals, and
                                    organizations build and maintain a strong, positive image in the eyes of their target
                                    audience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <figure class="bsb-overlay-figure w-100 m-0" style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100  object-fit-cover" loading="lazy"
                                src="{{ asset('assets/img/hero/pr.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-4">
            <div class="container">
                <div class="row justify-content-md-center gy-3 gy-xl-4">
                    <div class="col-12 col-md-11 col-lg-8 gy-3 gy-xl-4 bsb-entry-content">
                        <p class="lead">We are dedicated to helping businesses, individuals, and organizations build and
                            maintain a strong, positive image in the eyes of their target audience. Our experienced team of
                            PR professionals offers a comprehensive range of services to cater to your unique needs and
                            goals.
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
                            src="{{ asset('assets/img/hero/pr1.png') }}" alt="">
                    </div>
                    <div class="col-12 col-md-6 dots">
                        <div class="p-5">
                            <h2 class="fw-bold p-3 text-black">Why Choose Our Public Relations Services?</h2>
                            <h2 class="link-dark border-dark border-start border-5 p-3"><b>Strategic Planning:</b> We begin
                                by
                                understanding your brand, target audience, and communication objectives. Our tailored PR
                                strategies ensure that your message reaches the right people at the right time, maximizing
                                your impact.</h2>
                            <h2 class="link-dark border-dark border-start border-5 p-3"><b>Media Relations:</b> Our
                                extensive network of media contacts allows us to secure valuable coverage in various
                                platforms, including print, online, and broadcast outlets. We work closely with journalists
                                to present your story in the most engaging and newsworthy manner.
                            </h2>
                            <h2 class="link-dark border-dark border-start border-5 p-3"><b>Crisis Management:</b> In the
                                event of an unexpected issue or negative publicity, our team is prepared to swiftly develop
                                and execute a crisis management plan to protect your reputation and minimize damage.
                            </h2>
                            <h2 class="link-dark border-dark border-start border-5 p-3"><b>Influencer Outreach:</b> We
                                identify and engage with relevant influencers and opinion leaders to amplify your brand's
                                reach and credibility. Our partnerships can help you tap into new markets and foster
                                long-lasting relationships.
                            </h2>
                            <h2 class="link-dark border-dark border-start border-5 p-3"><b>Content Creation:</b> Our team of
                                skilled writers and designers crafts compelling press releases, articles, social media
                                posts, and other materials to keep your audience engaged and informed.
                            </h2>
                            <h2 class="link-dark border-dark border-start border-5 p-3"><b>Event Management:</b> From small
                                press conferences to large-scale product launches, we handle every aspect of event planning
                                and execution, ensuring a seamless experience for your guests and optimal media coverage.
                            </h2>
                            <h2 class="link-dark border-dark border-start border-5 p-3"><b>Reputation Management:</b> We
                                monitor and analyze online conversations about your brand, allowing us to address any
                                negative feedback and maintain a strong, positive image.
                            </h2>
                            <h2 class="link-dark border-dark border-start border-5 p-3"><b>Measurable Results:</b> We
                                believe in data-driven strategies, and our regular performance reports help you track the
                                success of your PR campaigns and make informed decisions for future growth.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-4">
            {{-- <div class="container">
                <div class="row justify-content-md-center gy-3 gy-xl-4">
                    <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6 gy-3 gy-xl-4 bsb-entry-content">
                        <p class="lead">At our marketing and content creation service, we believe that effective
                            marketing is about more than just tactics; it's about strategy, creativity, and execution.
                            That's why we offer a comprehensive service that combines all three to help you achieve your
                            marketing goals. Contact us today to learn more about how we can help you grow your business
                            through effective marketing and engaging content.
                        </p>
                    </div>
                </div>
            </div> --}}
        </section>
        @include('includes.get-started')
    </main>
@endsection