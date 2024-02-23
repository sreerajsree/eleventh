@extends('layouts.app')

@section('content')
    <main id="main">



        <!-- Section - Contact Form -->
        <!-- Contact 4 - Bootstrap Brain Component -->
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row">
                    <div class="col-12 col-md-6 p-0">
                        <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                            src="./assets/img/contact/contact-img-1.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6 align-self-md-end">
                        <div class="row py-3 py-sm-5 py-xxl-9 bsb-section-mt-md-1 justify-content-sm-center">
                            <div class="col-12 col-sm-10">
                                <h2 class="display-6  mb-4">Get in Touch</h2>
                                <p class="mb-5 text-secondary">We're always on the lookout to work with new clients.
                                    If you want to work with us, please write to us using the form below.</p>
                                <div class="text-bg-primary border rounded shadow-sm overflow-hidden" data-bs-theme="light">

                                    <form action="{{ route('contact.store') }}" method="post">
                                        @csrf
                                        <div class="row gy-4  p-4 p-xl-5">
                                            <div class="col-12 col-md-6">
                                                <label for="fullname" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name"
                                                    required>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="fullname" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name"
                                                    required>
                                            </div>
                                            <div class="col-12">
                                                <label for="email" class="form-label">Company Email </label>
                                                <input type="email" class="form-control" id="company_email"
                                                    name="company_email" required>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="fullname" class="form-label">Company Name</label>
                                                <input type="text" class="form-control" id="company_name"
                                                    name="company_name" required>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="fullname" class="form-label">Company Website</label>
                                                <input type="text" class="form-control" id="company_website"
                                                    name="company_website">
                                            </div>
                                            {{-- <div class="col-12">
                                                <label for="budget" class="form-label">What is your annual influencer
                                                    marketing budget?</label>
                                                <select name="budget" id="budget" class="form-control">
                                                    <option value="Select one" selected disabled></option>
                                                    <option value="100">$100 - $500</option>
                                                    <option value="500">$500 - $1000</option>
                                                    <option value="100">$1000 - $5000</option>
                                                </select>
                                            </div> --}}
                                            <div class="col-12">
                                                <label for="message" class="form-label">Message (optional)</label>
                                                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn text-white bg-black btn-lg"
                                                        type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
