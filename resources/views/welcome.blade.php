@extends ('layout.app')

@section('title')
    Home page
@stop

@section('title')
    Home page

@stop

@section ('content')

    <nav class="mb-4 navbar navbar-expand-lg navbar-dark cyan container">
        <div class="logo-wrapper">
            <img src="img/logo.svg" alt="Logo">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-links" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto halvetica-neue-medium">
                <li class="nav-item">
                    Boroughs
                </li>
                <li class="nav-item">
                    Blog
                </li>
                <li class="nav-item">
                    Projects
                </li>
                <li class="nav-item">
                    About Us
                </li>
                <li class="nav-item">
                    Contact Us
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
    <section class="full-screen video-bg">
        <div class="fullscreen-bg video_wrap">
            <video loop muted autoplay class="fullscreen-bg__video video_bg" src="media/AOS website background.mov">
            </video>
        </div>
        <div class="container h-100">
            <div class="row h-100 main-content-text">
                <div class="col-md-6">
                    <h1 class="futura font-54">
                        Vi kartlägger staden med allt du vill veta!
                    </h1>
                    <br>
                    <p class="futura font-20 medium">
                        Från stadsutveckling till kulturliv. Häng med i utvecklingen av Sveriges snabbast växande
                        stad!
                    </p>
                    <div class="miles-of-city">
                        <span class="icon-map_ico"></span>
                        <span class="futura font-18 medium">50 000 invånare på knappt 9
                            kvadratkilometer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="garden-section">
        <div class="h-100 container">
            <div class="row main-content-text h-100">
                <div class="instagram-info col-md-4">
                    <h1 class="futura font-42">11 Stadsdelar</h1>
                    <p class="futura font-21 medium">
                        Läs mer om stadsdelarna och
                        vad som är aktuellt just nu! <br> <br>
                        Välj stadsdel på kartan
                    </p>
                </div>
                <div class="popup-area">
                    <div class="popup-box"><span class="popup-text">Sundbyberg</span></div>
                </div>
                <div class="col-md-7 map-wrap">
                    <img src="img/big-map.png" alt="" class="big-map-pic">
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="big-map">
            <div class="main-content-text">
                <div class="header">
                    <h1 class="futura font-42">Senaste fran bloggen</h1>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="flag yellow"></div>
                        <div class="picture">
                            <img src="img/card-1-picture.png" alt="">
                        </div>
                        <div class="article">
                            <div class="headliner">
                                <h2 class="title font-24 bold">Title Post</h2>
                                <span class="date font-16">2019-05-24</span>
                            </div>
                            <p class="main-text">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="flag green"></div>
                        <div class="picture">
                            <img src="img/card-2-picture.png" alt="">
                        </div>
                        <div class="article">
                            <div class="headliner">
                                <h2 class="title font-24 bold">Title Post</h2>
                                <span class="date font-16">2019-05-24</span>
                            </div>
                            <p class="main-text">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="flag blue"></div>
                        <div class="picture">
                            <img src="img/card-3-picture.png" alt="">
                        </div>
                        <div class="article">
                            <div class="headliner">
                                <h2 class="title font-24 bold">Title Post</h2>
                                <span class="date font-16">2019-05-24</span>
                            </div>
                            <p class="main-text">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="button-block see-all">
                    <button>
                        <span class="button-text">Öppna bloggen </span>
                    </button>
                </div>
            </div>
        </div>
    </section>
  <section>
        <div class="tabs">
            <div class="m-auto tab-toggler"></div>
            <div class="card">
                <div class="flag yellow"></div>
                <div class="shadow-box">
                    <img src="img/instagram-card-picture-1.png"></div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitrundefined</p>
                <span><img src="img/face-avatar.png" alt="">johndue</span>
            </div>
            <div class="card">
                <div class="flag green"></div>
                <div class="shadow-box">
                    <img src="img/instagram-card-picture-2.png"></div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitrundefined</p>
                <span><img src="img/face-avatar.png" alt="">johndue</span>
            </div>
            <div class="card">
                <div class="flag salad"></div>
                <div class="shadow-box">
                    <img src="img/instagram-card-picture-3.png"></div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitrundefined</p>
                <span><img src="img/face-avatar.png" alt="">johndue</span>
            </div>
            <div class="card">
                <div class="flag blue"></div>
                <div class="shadow-box">
                    <img src="img/instagram-card-picture-4.png"></div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitrundefined</p>
                <span><img src="img/face-avatar.png" alt="">johndue</span>
            </div>
            <div class="card">
                <div class="flag purple"></div>
                <div class="shadow-box">
                    <img src="img/instagram-card-picture-5.png"></div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitrundefined</p>
                <span><img src="img/face-avatar.png" alt="">johndue</span>
            </div>
            <div class="button-block see-all">
                <button>
                    <span class="button-text">Se mer</span>
                </button>
            </div>
        </div>
    </section>
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-line">
                <span class="footer-link">alltomsundbyberg.se © 2015-2019</span>
                <span class="footer-link">Vår integritetspolicy</span>
            </div>
        </div>
    </footer>

@endsection



