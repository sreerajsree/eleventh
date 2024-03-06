@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-primary">
            <div class="container-fluid overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 p-0">
                        <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                            src="./assets/img/contact/contact-img-1.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="p-5">
                            <h2 class="display-4 mb-4 text-light">Get in Touch</h2>
                            <p class="mb-5 text-secondary">We're always on the lookout to work with new clients.
                                If you want to work with us, please write to us using the form below.</p>
                            <div class="text-bg-primary rounded shadow-sm overflow-hidden" data-bs-theme="light">
                                <form action="{{ route('contact.store') }}" method="post">
                                    @csrf
                                    <div class="row gy-4">
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
                                            <input type="text" class="form-control" id="company_name" name="company_name"
                                                required>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="fullname" class="form-label">Company Website</label>
                                            <input type="text" class="form-control" id="company_website"
                                                name="company_website">
                                        </div>
                                        <div class="col-12">
                                            <label for="service" class="form-label">Select Service</label>
                                            <select name="service" id="service" class="form-select" aria-label="Default select example">
                                                <option value="" selected disabled>-----Select-----</option>
                                                <option value="Brands for Sale">Brands for Sale</option>
                                                <option value="Branding">Branding</option>
                                                <option value="Marketing & Content Creation">Marketing & Content Creation</option>
                                                <option value="Concept Creation">Concept Creation</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="message" class="form-label">Message (optional)</label>
                                            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button class="btn text-white btn-secondary btn-lg"
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
        </section>
    </main>
@endsection
