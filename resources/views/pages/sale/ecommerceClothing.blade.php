@extends('layouts.app')

@section('content')
    <main id="main">
        <!-- Section - Contact Form -->
        <!-- Contact 4 - Bootstrap Brain Component -->
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 p-0">
                        <img class="img-fluid" loading="lazy" src="{{ asset('assets/img/hero/Shopify Sales.png') }}"
                            alt="">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="b-sale p-3">
                            <img src="{{ asset('assets/img/hero/Eleven.png') }}" width="80" height="80" alt="">
                            <h1 class="py-2 text-light">Ecommerce | Clothing</h1>
                            <p class="text-light">7-year old UK-based oral care eCommerce brand|$3.6M USD yearly revenue| 18%
                                profit margin|Selling 5 SKUs and with a strong growth potential</p>
                            <div>
                                <button class="btn btn-secondary btn-sm">Ecommerce</button>
                                <button class="btn btn-secondary btn-sm">Clothing</button>
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
                                            <td>7 years</td>
                                            <td>$ 38,392 /mo</td>
                                            <td>241,618 p/mo</td>
                                            <td>2.4x</td>
                                            <td>0.4x</td>
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
