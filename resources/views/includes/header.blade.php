<nav class="navbar navbar-expand-md bg-black">
    <div class="container-fluid">
        <a class="navbar-brand d-md-none" href="/">
            <img src="{{ asset('assets/img/branding/logo.png') }}" class="bsb-tpl-logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#studio">Studio XI</a>
                </li>
                <a class="navbar-brand d-none d-md-block" href="/">
                    <img src="{{ asset('assets/img/branding/logo.png') }}" class="bsb-tpl-logo" alt="">
                </a>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vip') }}">VIP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
