<nav class="navbar navbar-expand-md bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand d-md-none" href="/">
            <img src="{{ asset('assets/img/branding/logo-main.png') }}" class="bsb-tpl-logo" alt="">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('brandsforsale') }}">Brands For Sale</a></li>
                        <li><a class="dropdown-item" href="{{ route('branding') }}">Branding</a></li>
                        <li><a class="dropdown-item" href="{{ route('marketing') }}">Marketing & Content Creation</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('concept') }}">Concept Creation</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#clients">Clients</a>
                </li>
                <a class="navbar-brand d-none d-md-block" href="/">
                    <img src="{{ asset('assets/img/branding/logo-main.png') }}" class="bsb-tpl-logo" alt="">
                </a>
                <li class="nav-item">
                    <a class="nav-link" href="/#studio">Studio XI</a>
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
