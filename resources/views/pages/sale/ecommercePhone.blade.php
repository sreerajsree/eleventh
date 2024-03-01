@extends('layouts.app')

@section('content')
    <main id="main">
        <!-- Section - Contact Form -->
        <!-- Contact 4 - Bootstrap Brain Component -->
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 p-0">
                        <img class="img-fluid" loading="lazy" src="{{ asset('assets/img/hero/Search Console.png') }}"
                            alt="">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="b-sale p-3">
                            <img src="{{ asset('assets/img/hero/Elemnt.png') }}" width="80" height="80" alt="">
                            <h1 class="py-2 text-light">Ecommerce | Phone Cases</h1>
                            <p class="text-light">#1 driving glasses on the market. $1M/Month @ 40% P/M. 45,000+ engaged on email newsletter last 90 days. Market will grow for 10+ years. "Excellent" Trustpilot.</p>
                            <div>
                                <button class="btn btn-secondary btn-sm">Ecommerce</button>
                                <button class="btn btn-secondary btn-sm">Gadgets</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table my-5 font-man table-light table-striped">
                                    <thead>
                                        <th>Site age</th>
                                        <th>Monthly Profit</th>
                                        <th>Page Views</th>
                                        <th>Profit Multiple</th>
                                        <th>Revenue Multiple</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 year</td>
                                            <td>$ 40,692 /mo</td>
                                            <td>241,618 p/mo</td>
                                            <td>1.7x</td>
                                            <td>0.6x</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('pages.sale.form')
@endsection
