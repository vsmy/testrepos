<nav class="mb-4 navbar navbar-expand-lg navbar-dark cyan container">
    <a href="{{ route('welcome') }}">
        <div class="logo-wrapper">
            <img src="/img/logo.svg" alt="Logo">
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-links" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                11 stadsdelar
            </li>
            <li class="nav-item">
                Blogg
            </li>
            <li class="nav-item">
                Projekt
            </li>
            <li class="nav-item">
                <a href="{{ route('about') }}">Om oss</a>
            </li>
            <li class="nav-item">
                Kontakt
            </li>
        </ul>
    </div>
</nav>
