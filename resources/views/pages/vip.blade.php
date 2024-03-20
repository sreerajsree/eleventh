@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-black">
            <div class="vh-100 card border-0 rounded-0  overflow-hidden text-center bsb-overlay"
                style="background-image: url('{{ asset('assets/img/hero/ameerah2.png') }}'); --bsb-overlay-opacity: .4; background-size:cover;background-position: 50% 50%;background-repeat: no-repeat;">
                <div class="card-body container text-white d-flex align-items-center">
                    <div class="fw-bold w-fifty mx-auto">
                        <p>VIP</p>
                        <h2 class="fst-italic">Design Day</h2>
                        <p class="fs-8">A DESIGN DAY INTENSIVE FOR THOSE WHO NEED IT DONE “ASAP”</p>
                        <p>SKIP THE LONG WAITLISTS AND LET AN EXPERT DESIGNER START CROSSING OFF YOUR TO-DO LIST IN JUST ONE
                            DAY.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-black">
            <div class="row align-items-center p-0 m-0">
                <div class="col-md-6 p-0">
                    <div class="w-fifty mx-auto text-light text-center p-4">
                        <h2 class="fst-italic">You need it because...</h2>
                        <p class="fw-bold text-uppercase fs-8 mt-5">no.1</p>
                        <p class="fs-8 fw-light">You really don't have 2-3 months to wait
                            to get your design completed & published.</p>
                        <p class="fw-bold text-uppercase fs-8 mt-5">no.2</p>
                        <p class="fs-8 fw-light">You don't want to over-invest in a package
                            when you know exactly what you need.</p>
                        <p class="fw-bold text-uppercase fs-8 mt-5">no.3</p>
                        <p class="fs-8 fw-light">You *might* be able to design it yourself,
                            but just the thought of it gives you anxiety.</p>
                        <p class="fw-bold text-uppercase fs-8 mt-5">no.4</p>
                        <p class="fs-8 fw-light">You need to be able to focus on what
                            you do best and let an expert take on the rest!</p>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <img class="img-fluid"
                        src="{{ asset('assets/img/hero/StudiO scenes.png') }}"
                        alt="">
                </div>
            </div>
        </section>
        <section class="bg-black">
            <div class="vh-100 card border-0 rounded-0  overflow-hidden text-center bsb-overlay"
                style="background-image: url('{{ asset('assets/img/hero/service-section.png') }}'); --bsb-overlay-opacity: .4; background-size:cover;background-position: 50% 50%;background-repeat: no-repeat;">
                <div class="card-body container text-white d-flex align-items-center">
                    <div class="row justify-content-center">
                        <div class="col-md-5 fw-bold text-start p-4">
                            <h2 class="fst-italic">Did you know...</h2>
                            <p class="fs-8 text-uppercase">75% of consumers will judge your credibility based on your
                                design?</p>
                        </div>
                        <svg class="se-line" style="width: 111.64px; height: 173.09px;">
                            <line data-d-strokelinecap="round" data-d-linestyle="solid" data-d-thickness="1"
                                data-d-rotatedwidth="129.64" data-d-rotatedheight="160.09" data-d-widthoffset="38.68"
                                data-d-heightoffset="80.05" data-d-isround="true" data-d-rotation="51"
                                data-d-roundedsolid="true" data-d-dotted="false" data-d-length="207"
                                data-d-mirrorline="true" data-d-dashwidth="21" data-d-spacing="15"
                                data-d-dasharrayvalue="none" data-m-strokelinecap="round" data-m-linestyle="solid"
                                data-m-thickness="1" data-m-rotatedwidth="55.5" data-m-rotatedheight="96.13"
                                data-m-widthoffset="28.25" data-m-heightoffset="48.07" data-m-isround="true"
                                data-m-rotation="60" data-m-roundedsolid="true" data-m-dotted="false" data-m-length="112"
                                data-m-mirrorline="true" data-m-dashwidth="21" data-m-spacing="15"
                                data-m-dasharrayvalue="none" x1="0" y1="0" x2="100%" y2="100%"
                                style="stroke-width: 1px; stroke-dasharray: 0px;"></line>
                        </svg>
                        <div class="col-md-5 p-4">
                            <p class="text-uppercase h4 font-mont fw-light text-end">because good design builds trust.</h2>
                            <p class="fs-8 text-end">It's your first impression and how you present your brand can make a
                                difference between you and your competitor. Our VIP Design Days are made to help you create
                                trustworthy design so you can do what you do best</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="background-color: #F8F7F5">
            <div class="container">
                <div class="text-center w-fifty mx-auto p-4">
                    <h2 class="fst-italic h1 mb-5">The Breakdown</h2>
                    <p class="fs-8">01</p>
                    <p class="fw-bold text-uppercase h3 font-mont mb-3">VIP DAY APPLICATION</p>
                    <p class="fs-8">This will allow you to share what exactly you are looking for with your brand and
                        design needs.</p>
                    <p class="fs-8 mt-5">02</p>
                    <p class="fw-bold text-uppercase h3 font-mont mb-3">THE DISCOVERY CALL</p>
                    <p class="fs-8">A 30-minute consult to plan out what needs to be completed and what I'll need from you
                        before we begin.</p>
                    <p class="fs-8 mt-5">03</p>
                    <p class="fw-bold text-uppercase h3 font-mont mb-3">THE VIP DESIGN DAY</p>
                    <p class="fs-8">8-hours with 3 check-ins as well as full communication throughout (for feedback,
                        revisions, etc).</p>
                    <p class="fs-8 mt-5">04</p>
                    <p class="fw-bold text-uppercase h3 font-mont mb-3">A RECAP & OVERVIEW</p>
                    <p class="fs-8">This can include mini-tutorials, instructions and a VIP Day breakdown for you to keep.
                    </p>
                    <p class="fs-8 mt-5">05</p>
                    <p class="fw-bold text-uppercase h3 font-mont mb-3">POST VIP DAY SUPPORT</p>
                    <p class="fs-8">7 days of email support for any extra questions about what we completed {design
                        changes not included}</p>
                    <div class="my-5">
                        <a href="{{ route('contact') }}"
                            class="text-uppercase fw-bold underline text-black fs-8 link-offset-2">Contact us</a>
                    </div>
                </div>
            </div>
        </section>
        <!--<section style="background-color: #F8F7F5">-->
        <!--    <div class="container py-10">-->
        <!--        <h2 class="fst-italic text-center py-5 h1">Did you know...</h2>-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-6">-->
        <!--                <div class="bg-black w-fifty mx-auto py-2">-->
        <!--                    <div class="mt-2">-->
        <!--                        <img class="img-fluid img-height"-->
        <!--                            src="https://static.showit.co/400/uGYk_3ihQ2G0VOc0rJh22A/65041/saffron-avenue-brand-design-showit-website-templates-106.jpg"-->
        <!--                            alt="">-->
        <!--                    </div>-->
        <!--                    <div class="mt-2">-->
        <!--                        <img class="img-fluid img-height"-->
        <!--                            src="https://static.showit.co/file/FaKdTY2ZQyaHG1ftT10-nA/65041/saffronavenue-brandsketch.gif"-->
        <!--                            alt="">-->
        <!--                    </div>-->
        <!--                    <div class="mt-2">-->
        <!--                        <img class="img-fluid img-height"-->
        <!--                            src="https://static.showit.co/800/VJVgHw_kSeiHdFz5-p24HQ/65041/vip-day-design-saffron-avenue-branding-websites-0.jpg"-->
        <!--                            alt="">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-6">-->
        <!--                <div class="p-3">-->
        <!--                    <table>-->
        <!--                        <thead class="border-bottom border-black">-->
        <!--                            <th>-->
        <!--                                <p class="pe-2">01.</p>-->
        <!--                            </th>-->
        <!--                            <th class="border-start border-black">-->
        <!--                                <h2 class="text-uppercase ps-4 font-mont h5 fw-bold">branding</h2>-->
        <!--                            </th>-->
        <!--                        </thead>-->
        <!--                        <tbody>-->
        <!--                            <tr>-->
        <!--                                <td></td>-->
        <!--                                <td class="border-start border-black">-->
        <!--                                    <div class="ps-4 py-2">-->
        <!--                                        <p class="fs-6 fw-bold">+ Color Pairing,-->
        <!--                                            font stacks, mood board creation [3 hrs]<br><br>+ Brand Board: (tweak-->
        <!--                                            Logo,-->
        <!--                                            custom-->
        <!--                                            brand elements, patterns, etc) [3-4 hrs]<br><br>+ Stationery &amp;-->
        <!--                                            Social Canva-->
        <!--                                            Templates [30-60 min per design]<br><br>+ Packaging Design &amp; Print-->
        <!--                                            Setup-->
        <!--                                            [based-->
        <!--                                            on needs]<br><br></p>-->
        <!--                                    </div>-->
        <!--                                </td>-->
        <!--                            </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                </div>-->
        <!--                <div class="p-3">-->
        <!--                    <table>-->
        <!--                        <thead class="border-bottom border-black">-->
        <!--                            <th>-->
        <!--                                <p class="pe-2">02.</p>-->
        <!--                            </th>-->
        <!--                            <th class="border-start border-black">-->
        <!--                                <h2 class="text-uppercase ps-4 font-mont h5 fw-bold">showit SITEs</h2>-->
        <!--                            </th>-->
        <!--                        </thead>-->
        <!--                        <tbody>-->
        <!--                            <tr>-->
        <!--                                <td></td>-->
        <!--                                <td class="border-start border-black">-->
        <!--                                    <div class="ps-4 py-2">-->
        <!--                                        <p class="fs-6 fw-bold">+-->
        <!--                                            Template setup: add brand, fonts, fix spacing, add social links, etc-->
        <!--                                            [1-2 hrs]<br><br>+Template Content Implementation: Add your-->
        <!--                                            copy/images/adjust layout to fit copy (does not include design) [4-->
        <!--                                            hrs]<br><br>+ Template Customizations: Customize &amp; code a page on-->
        <!--                                            your template [3 hrs]<br><br>+ Showit Site Tweaks: Adjust and fix a-->
        <!--                                            showit site that is completed but needs a designer’s touch [4-6-->
        <!--                                            hrs]<br><br>+ New Page Design: Sales page, Instagram/Pinterest landing,-->
        <!--                                            thank you pages, etc [3-4 hrs each, depends on your copy]<br><br></p>-->
        <!--                                    </div>-->
        <!--                                </td>-->
        <!--                            </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                </div>-->
        <!--                <div class="p-3">-->
        <!--                    <table>-->
        <!--                        <thead class="border-bottom border-black">-->
        <!--                            <th>-->
        <!--                                <p class="pe-2">03.</p>-->
        <!--                            </th>-->
        <!--                            <th class="border-start border-black">-->
        <!--                                <h2 class="text-uppercase ps-4 font-mont h5 fw-bold">other</h2>-->
        <!--                            </th>-->
        <!--                        </thead>-->
        <!--                        <tbody>-->
        <!--                            <tr>-->
        <!--                                <td></td>-->
        <!--                                <td class="border-start border-black">-->
        <!--                                    <div class="ps-4 py-2">-->
        <!--                                        <p class="fs-6 fw-bold">+-->
        <!--                                            Freebie/Offer Design: PDF design (5-8 pages), thank you page, signup,-->
        <!--                                            share graphics<br><br>+ Custom Lettering: transparent png, stickers,-->
        <!--                                            gifs, etc in a lettering of your choice {cannot be resold or-->
        <!--                                            redistributed}<br><br>+ Marketing Needs: Quiz design, presentations,-->
        <!--                                            pricing guides, webinar slides<br><br></p>-->
        <!--                                    </div>-->
        <!--                                </td>-->
        <!--                            </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!--<section>-->
            <div class="vh-100 card border-0 rounded-0  overflow-hidden text-center bsb-overlay"
                style="background-image: url('{{ asset('assets/img/hero/ameerah1.png') }}'); --bsb-overlay-opacity: .4; background-size:cover;background-position: 50% 50%;background-repeat: no-repeat;">
                <div class="card-body container text-white d-flex align-items-center">
                    <div class="w-fifty mx-auto">
                        <h2 class="fst-italic h1">Investment</h2>
                        <p class="h2 fw-bold">VIP DESIGN DAY: 8 HOURS OF ONE-ON-ONE CUSTOM DESIGN, JUST FOR YOU.</p>
                        <p class="mt-5 fw-bold h3 font-mont">$3,600</p>
                        <p class="text-light">{ 50% DEPOSIT DUE AFTER APPLICATION APPROVAL }</p>
                        <div class="mt-5">
                            <a href="{{ route('contact') }}"
                                class="text-uppercase fw-bold underline text-light fs-8 link-offset-2">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<section style="background-color: #262727">-->
        <!--    <div class="container py-5">-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-6">-->
        <!--                <div class="p-3">-->
        <!--                    <table class="text-light border-bottom border-light">-->
        <!--                        <thead>-->
        <!--                            <td>-->
        <!--                                <p class="pe-2 fs-8 m-0 text-light">01./</p>-->
        <!--                            </td>-->
        <!--                            <td>-->
        <!--                                <h2 class="text-uppercase ps-4 font-mont fs-8 fw-bold m-0">How much does it cost?-->
        <!--                                </h2>-->
        <!--                            </td>-->
        <!--                        </thead>-->
        <!--                        <tbody>-->
        <!--                            <tr>-->
        <!--                                <td></td>-->
        <!--                                <td>-->
        <!--                                    <div class="ps-4 py-2">-->
        <!--                                        <p class="fs-6">The 8 hours (which includes the 30 minute zoom and a week-->
        <!--                                            of email support too) is $3,600. A 50% deposit is due upon application-->
        <!--                                            approval and after choosing your date. The final payment is due the day-->
        <!--                                            after your VIP Design Day.</p>-->
        <!--                                    </div>-->
        <!--                                </td>-->
        <!--                            </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                    <table class="text-light border-bottom border-light mt-5">-->
        <!--                        <thead>-->
        <!--                            <td>-->
        <!--                                <p class="pe-2 fs-8 m-0 text-light">02./</p>-->
        <!--                            </td>-->
        <!--                            <td>-->
        <!--                                <h2 class="text-uppercase ps-4 font-mont fs-8 fw-bold m-0">What can't these days be-->
        <!--                                    used for?-->
        <!--                                </h2>-->
        <!--                            </td>-->
        <!--                        </thead>-->
        <!--                        <tbody>-->
        <!--                            <tr>-->
        <!--                                <td></td>-->
        <!--                                <td>-->
        <!--                                    <div class="ps-4 py-2">-->
        <!--                                        <p class="fs-6">Full Custom Branding, Custom Website Designs, Complete-->
        <!--                                            Template customizations, Single logo designs -- Looking for that, VIEW-->
        <!--                                            THE SERVICES.</p>-->
        <!--                                    </div>-->
        <!--                                </td>-->
        <!--                            </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                    <table class="text-light border-bottom border-light mt-5">-->
        <!--                        <thead>-->
        <!--                            <td>-->
        <!--                                <p class="pe-2 fs-8 m-0 text-light">03./</p>-->
        <!--                            </td>-->
        <!--                            <td>-->
        <!--                                <h2 class="text-uppercase ps-4 font-mont fs-8 fw-bold m-0">What if I need more-->
        <!--                                    after the day?-->
        <!--                                </h2>-->
        <!--                            </td>-->
        <!--                        </thead>-->
        <!--                        <tbody>-->
        <!--                            <tr>-->
        <!--                                <td></td>-->
        <!--                                <td>-->
        <!--                                    <div class="ps-4 py-2">-->
        <!--                                        <p class="fs-6">Depending on your needs and timeframe, we might be able-->
        <!--                                            to have an in-house studio designer help you at our hourly rate. If not,-->
        <!--                                            we do offer a discounted rate for booking an additional VIP Design Day.-->
        <!--                                        </p>-->
        <!--                                    </div>-->
        <!--                                </td>-->
        <!--                            </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                    <table class="text-light border-bottom border-light mt-5">-->
        <!--                        <thead>-->
        <!--                            <td>-->
        <!--                                <p class="pe-2 fs-8 m-0 text-light">04./</p>-->
        <!--                            </td>-->
        <!--                            <td>-->
        <!--                                <h2 class="text-uppercase ps-4 font-mont fs-8 fw-bold m-0">What should I have-->
        <!--                                    completed before our Design VIP Day?-->
        <!--                                </h2>-->
        <!--                            </td>-->
        <!--                        </thead>-->
        <!--                        <tbody>-->
        <!--                            <tr>-->
        <!--                                <td></td>-->
        <!--                                <td>-->
        <!--                                    <div class="ps-4 py-2">-->
        <!--                                        <p class="fs-6">After our 30 minute zoom chat I'll send you a to-do list-->
        <!--                                            and shared folder to start adding all of the-->
        <!--                                            copy/content/images/files/etc that I'll need from you for the VIP Design-->
        <!--                                            Day.-->
        <!--                                        </p>-->
        <!--                                    </div>-->
        <!--                                </td>-->
        <!--                            </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-6 border-start border-light">-->
        <!--                <div class="p-3">-->
        <!--                    <table class="text-light border-bottom border-light">-->
        <!--                        <thead>-->
        <!--                            <td>-->
        <!--                                <p class="pe-2 fs-8 m-0 text-light">05./</p>-->
        <!--                            </td>-->
        <!--                            <td>-->
        <!--                                <h2 class="text-uppercase ps-4 font-mont fs-8 fw-bold m-0">Will you help me write-->
        <!--                                    the copy?-->
        <!--                                </h2>-->
        <!--                            </td>-->
        <!--                        </thead>-->
        <!--                        <tbody>-->
        <!--                            <tr>-->
        <!--                                <td></td>-->
        <!--                                <td>-->
        <!--                                    <div class="ps-4 py-2">-->
        <!--                                        <p class="fs-6">I can't (and you won't want me to :) - But HIGHLY-->
        <!--                                            recommend hiring a copywriting before working together!</p>-->
        <!--                                        <ul>-->
        <!--                                            <li><a class="link-light mb-1" href="https://copyuncorked.com/somm-day"-->
        <!--                                                    target="_blank">CopyUncorked</a></li>-->
        <!--                                            <li><a class="link-light mb-1" href="https://saltedpages.com/" target="_blank">The Salted-->
        <!--                                                    Pages</a></li>-->
        <!--                                            <li><a class="link-light mb-1" href="https://ggcopywriting.com/copywriting-services"-->
        <!--                                                    target="_self">GG Copywriting</a></li>-->
        <!--                                            <li><a class="link-light mb-1" href="https://theliterary.co/vip-copy-weeks"-->
        <!--                                                    target="_blank">The Literary Co.</a></li>-->
        <!--                                            <li><a class="link-light mb-1" href="https://ashlynwrites.com/" target="_blank">Ashlyn-->
        <!--                                                    Writes</a></li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </td>-->
        <!--                            </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                    <table class="text-light border-bottom border-light mt-5">-->
        <!--                        <thead>-->
        <!--                            <td>-->
        <!--                                <p class="pe-2 fs-8 m-0 text-light">06./</p>-->
        <!--                            </td>-->
        <!--                            <td>-->
        <!--                                <h2 class="text-uppercase ps-4 font-mont fs-8 fw-bold m-0">Do you have a 1/2 day-->
        <!--                                    rate?-->
        <!--                                </h2>-->
        <!--                            </td>-->
        <!--                        </thead>-->
        <!--                        <tbody>-->
        <!--                            <tr>-->
        <!--                                <td></td>-->
        <!--                                <td>-->
        <!--                                    <div class="ps-4 py-2">-->
        <!--                                        <p class="fs-6">No, as it's hard to get a lot checked off in just a few-->
        <!--                                            hours. We recommend doing a full 8 to be able to have revisions,-->
        <!--                                            communication and quality design!</p>-->
        <!--                                    </div>-->
        <!--                                </td>-->
        <!--                            </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                    <table class="text-light border-bottom border-light mt-5">-->
        <!--                        <thead>-->
        <!--                            <td>-->
        <!--                                <p class="pe-2 fs-8 m-0 text-light">07./</p>-->
        <!--                            </td>-->
        <!--                            <td>-->
        <!--                                <h2 class="text-uppercase ps-4 font-mont fs-8 fw-bold m-0">How will I know what can-->
        <!--                                    be done in a Design VIP Day?-->
        <!--                                </h2>-->
        <!--                            </td>-->
        <!--                        </thead>-->
        <!--                        <tbody>-->
        <!--                            <tr>-->
        <!--                                <td></td>-->
        <!--                                <td>-->
        <!--                                    <p class="ps-4 py-2">-->
        <!--                                        If you look at the <a class="link-light" href="#/" target="_self" class=" se-sl"-->
        <!--                                            data-scrollto="#quote">MENU HERE you</a> can get a rough idea of how-->
        <!--                                        long specific projects can take. The initial questionnaire, your-->
        <!--                                        deliverables and the consult will allow us to create a more realistic design-->
        <!--                                        list.-->
        <!--                                        </p>-->
        <!--                                </td>-->
        <!--                            </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                    <table class="text-light border-bottom border-light mt-5">-->
        <!--                        <thead>-->
        <!--                            <td>-->
        <!--                                <p class="pe-2 fs-8 m-0 text-light">08./</p>-->
        <!--                            </td>-->
        <!--                            <td>-->
        <!--                                <h2 class="text-uppercase ps-4 font-mont fs-8 fw-bold m-0">Do I need to be-->
        <!--                                    available for the VIP day?-->
        <!--                                </h2>-->
        <!--                            </td>-->
        <!--                        </thead>-->
        <!--                        <tbody>-->
        <!--                            <tr>-->
        <!--                                <td></td>-->
        <!--                                <td>-->
        <!--                                    <div class="ps-4 py-2">-->
        <!--                                        <p class="fs-6">Yes please :) We will need you to approve designs, check-->
        <!--                                            layouts, etc and the quicker you are to respond the quicker we can move-->
        <!--                                            on to the next project. You can choose the best way to communicate so-->
        <!--                                            it's as efficient as possible!-->
        <!--                                        </p>-->
        <!--                                    </div>-->
        <!--                                </td>-->
        <!--                            </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
    </main>
@endsection
