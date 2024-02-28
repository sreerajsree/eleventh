@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row">
                    <div class="col-12 col-md-8 order-1 order-md-0 align-self-md-end">
                        <div class="row py-3 py-sm-5 py-xl-9 justify-content-sm-center">
                            <div class="col-12 col-sm-10">
                                <h1 class="display-4  mb-4 text-black">Concept Creation</h1>
                                <div class="row">
                                    <div class="col-12 col-xxl-8">
                                        <p class="mb-0 text-secondary"> Bring your ideas to life with our innovative
                                            concept development services. Research, design, and execution.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <figure class="bsb-overlay-figure w-100 m-0" style="--bsb-overlay-figure-opacity: .3">
                            <img class="img-fluid w-100  object-fit-cover" loading="lazy"
                                src="./assets/img/hero/Concept Creation.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-4">
            <div class="container">
                <div class="row justify-content-md-center gy-3 gy-xl-4">
                    <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6 gy-3 gy-xl-4 bsb-entry-content">
                        <p class="lead">As a business owner, concept creation is a crucial step in starting or growing
                            your business. Our service in concept creation involves working closely with you to understand
                            your target audience, market trends, and competitive landscape. We then brainstorm and refine
                            ideas until we identify a viable concept that meets your business objectives and aligns with
                            your brand values. Our team provides guidance on product design, pricing strategy, go-to-market
                            plan, and other key factors that will increase the chances of success for your concept. By
                            partnering with us for concept creation services, you'll have a solid foundation for your
                            business that sets you up for success from the outset.
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
                            src="./assets/img/hero/bulb.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6 dots">
                        <div class="p-5">
                            <h2 class="link-white border-black border-start border-5 p-3">Market research and
                                analysis to identify customer needs and market opportunities</h2>
                            <h2 class="link-white border-black border-start border-5 p-3">Collaborative
                                brainstorming sessions to generate ideas that align with your business objectives
                                and brand values</h2>
                            <h2 class="link-white border-black border-start border-5 p-3">Concept refinement
                                through prototyping, testing, and feedback gathering</h2>
                            <h2 class="link-white border-black border-start border-5 p-3">Development of a
                                detailed product roadmap that outlines the product development process, timeline,
                                milestones, and resources required
                            </h2>
                            <h2 class="link-white border-black border-start border-5 p-3">
                                Assistance with patent and trademark applications, as needed
                            </h2>
                            <h2 class="link-white border-black border-start border-5 p-3">Paid advertising:
                                Support in securing funding for product development through grants, loans, or equity
                                investments
                            </h2>
                            <h2 class="link-white border-black border-start border-5 p-3">Paid advertising:
                                Collaboration with manufacturers to ensure product quality, cost-effectiveness, and
                                timely delivery
                            </h2>
                            <h2 class="link-white border-black border-start border-5 p-3">Paid advertising:
                                Development of a go-to-market strategy that includes pricing, distribution, and
                                sales channels
                            </h2>
                            <h2 class="link-white border-black border-start border-5 p-3">Paid advertising:
                                Assistance with product launch planning and execution including PR activities,
                                events planning etc.
                            </h2>
                            <h2 class="link-white border-black border-start border-5 p-3">Paid advertising:
                                Ongoing monitoring of product performance through analytics and feedback gathering
                                for continuous improvement
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
