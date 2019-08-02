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
            <li class="nav-item  dropdown">
                <a  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Borough
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="borough/1">Kymlinge</a>
                    <a class="dropdown-item" href="borough/2">Stora Ursvik</a>
                    <a class="dropdown-item" href="borough/3">Lilla Ursvik</a>
                    <a class="dropdown-item" href="borough/4">Brotorp</a>
                    <a class="dropdown-item" href="borough/5">Rissne</a>
                    <a class="dropdown-item" href="borough/6">Hallonbergen</a>
                    <a class="dropdown-item" href="borough/7">Ör</a>
                    <a class="dropdown-item" href="borough/8">Duvbo</a>
                    <a class="dropdown-item" href="borough/9">Storskogen</a>
                    <a class="dropdown-item" href="borough/10">Centrala Sundbyberg</a>
                    <a class="dropdown-item" href="borough/11">Lilla Alby</a>
                </div>
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
