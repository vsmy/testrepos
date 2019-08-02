@extends('layout.app')

@section('content')
<section class="full-screen header projects-section">
    <div class="container projects-container">
        <div class="row h-100 main-content-text">
            <div class="col-md-6">
                <h1 class="futura font-54">
                    Nya Torget 365
                </h1>
                <p class="font-18">
                    Här kan du läsa om projektet Nya Torget 365 i Sundbyberg. Ett skolprojekt i samarbete med Ängskolan med målet att öka förståelsen för stadsutveckling och främja jämställdhet i branschen.
                    <br>
                    För att göra projektet övergripligt och tydligt för ungdomarna skapade vi en infografik som sammanfattar uppdraget.
                </p>
            </div>
        </div>
        <div class="button-block see-all">
            <button>
                <span class="button-text">Se uppdraget här</span>
            </button>
        </div>
    </div>
</section>
<section>
    <div class="container container-wider">
        <div class="project-tabs">
            <div class="tab-toggler nav flex-column nav-pills" id="myTab"  id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <span class="current_tab">Bloggen</span>
                <img src="/img/arrow.svg" alt="" class="arrow" id="arrow">
                <a class="nav-link" id="v-pills-bookopened-tab" data-toggle="pill" href="#v-pills-bookopened" role="tab" aria-controls="v-pills-bookopened" aria-selected="false">
                    <div class="tab-btn tab-btn-bookopened act">
                        <i class="icon-book_opened"></i>
                    </div>
                </a>
                <a class="nav-link active" id="v-pills-instagram-tab" data-toggle="pill" href="#v-pills-instagram" role="tab" aria-controls="v-pills-instagram" aria-selected="true">
                    <div id="isnt" class="tab-btn tab-btn-picture">
                        <i class="icon-photo"></i>
                    </div>
                </a>
                <a class="nav-link" id="v-pills-youtube-tab" data-toggle="pill" href="#v-pills-youtube" role="tab" aria-controls="v-pills-youtube" aria-selected="false">
                    <div class="tab-btn tab-btn-doc">
                        <i class="icon-doc"></i>
                    </div>
                </a>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-instagram" role="tabpanel" aria-labelledby="v-pills-instagram-tab">
                    <div class="grid-container" id="insta-images">
                        <div class="img1">
                            <a class="post-link" href="#" target="_blank">
                                <div class="blog-card">
                                    <div class="flag yellow"></div>
                                    <div class="picture">
                                        <img src="/img/blog-card-picture-5.png" alt="">
                                    </div>
                                    <div class="article">
                                        <div class="headliner">
                                            <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                            <span class="date font-16">2019-07-15</span>
                                        </div>
                                        <p class="main-text">Lorem ipsum</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="img2">
                            <a class="post-link" href="" target="_blank">
                                <div class="blog-card">
                                    <div class="flag yellow"></div>
                                    <div class="picture">
                                        <img src="/img/blog-card-picture-5.png" alt="">
                                    </div>
                                    <div class="article">
                                        <div class="headliner">
                                            <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                            <span class="date font-16">2019-07-15</span>
                                        </div>
                                        <p class="main-text">Lorem ipsum</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="img3">
                            <a class="post-link" href="" target="_blank">
                                <div class="blog-card">
                                    <div class="flag yellow"></div>
                                    <div class="picture">
                                        <img src="/img/blog-card-picture-5.png" alt="">
                                    </div>
                                    <div class="article">
                                        <div class="headliner">
                                            <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                            <span class="date font-16">2019-07-15</span>
                                        </div>
                                        <p class="main-text">Lorem ipsum</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="img4">
                            <a class="post-link" href="" target="_blank">
                                <div class="blog-card">
                                    <div class="flag yellow"></div>
                                    <div class="picture">
                                        <img src="/img/blog-card-picture-5.png" alt="">
                                    </div>
                                    <div class="article">
                                        <div class="headliner">
                                            <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                            <span class="date font-16">2019-07-15</span>
                                        </div>
                                        <p class="main-text">Lorem ipsum</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="img5">
                            <a class="post-link" href="" target="_blank">
                                <div class="blog-card">
                                    <div class="flag yellow"></div>
                                    <div class="picture">
                                        <img src="/img/blog-card-picture-5.png" alt="">
                                    </div>
                                    <div class="article">
                                        <div class="headliner">
                                            <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                            <span class="date font-16">2019-07-15</span>
                                        </div>
                                        <p class="main-text">Lorem ipsum</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-youtube" role="tabpanel" aria-labelledby="v-pills-youtube-tab">
                    <div class="grid-container" id="youtube-videos">
                        <div class="img1">
                            <div class="blog-card">
                                <div class="flag yellow"></div>
                                <div class="picture">
                                    <img src="/img/blog-card-picture-5.png" alt="">
                                </div>
                                <div class="article">
                                    <div class="headliner">
                                        <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                        <span class="date font-16">2019-07-15</span>
                                    </div>
                                    <p class="main-text">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="img2">
                            <div class="blog-card">
                                <div class="flag yellow"></div>
                                <div class="picture">
                                    <img src="/img/blog-card-picture-5.png" alt="">
                                </div>
                                <div class="article">
                                    <div class="headliner">
                                        <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                        <span class="date font-16">2019-07-15</span>
                                    </div>
                                    <p class="main-text">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="img3">
                            <div class="blog-card">
                                <div class="flag yellow"></div>
                                <div class="picture">
                                    <img src="/img/blog-card-picture-5.png" alt="">
                                </div>
                                <div class="article">
                                    <div class="headliner">
                                        <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                        <span class="date font-16">2019-07-15</span>
                                    </div>
                                    <p class="main-text">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="img4">
                            <div class="blog-card">
                                <div class="flag yellow"></div>
                                <div class="picture">
                                    <img src="/img/blog-card-picture-5.png" alt="">
                                </div>
                                <div class="article">
                                    <div class="headliner">
                                        <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                        <span class="date font-16">2019-07-15</span>
                                    </div>
                                    <p class="main-text">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="img5">
                            <div class="blog-card">
                                <div class="flag yellow"></div>
                                <div class="picture">
                                    <img src="/img/blog-card-picture-5.png" alt="">
                                </div>
                                <div class="article">
                                    <div class="headliner">
                                        <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                        <span class="date font-16">2019-07-15</span>
                                    </div>
                                    <p class="main-text">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-bookopened" role="tabpanel" aria-labelledby="v-pills-bookopened-tab">
                    <div class="grid-container-2" id="wp-posts">
                        <div class="img1">
                            <div class="blog-card">
                                <div class="flag yellow"></div>
                                <div class="picture">
                                    <img src="/img/blog-card-picture-5.png" alt="">
                                </div>
                                <div class="article">
                                    <div class="headliner">
                                        <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                        <span class="date font-16">2019-07-15</span>
                                    </div>
                                    <p class="main-text">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="img2">
                            <div class="blog-card">
                                <div class="flag yellow"></div>
                                <div class="picture">
                                    <img src="/img/blog-card-picture-5.png" alt="">
                                </div>
                                <div class="article">
                                    <div class="headliner">
                                        <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                        <span class="date font-16">2019-07-15</span>
                                    </div>
                                    <p class="main-text">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="img3">
                            <div class="blog-card">
                                <div class="flag yellow"></div>
                                <div class="picture">
                                    <img src="/img/blog-card-picture-5.png" alt="">
                                </div>
                                <div class="article">
                                    <div class="headliner">
                                        <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                        <span class="date font-16">2019-07-15</span>
                                    </div>
                                    <p class="main-text">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="img4">
                            <div class="blog-card">
                                <div class="flag yellow"></div>
                                <div class="picture">
                                    <img src="/img/blog-card-picture-5.png" alt="">
                                </div>
                                <div class="article">
                                    <div class="headliner">
                                        <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                        <span class="date font-16">2019-07-15</span>
                                    </div>
                                    <p class="main-text">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="img5">
                            <div class="blog-card">
                                <div class="flag yellow"></div>
                                <div class="picture">
                                    <img src="/img/blog-card-picture-5.png" alt="">
                                </div>
                                <div class="article">
                                    <div class="headliner">
                                        <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                        <span class="date font-16">2019-07-15</span>
                                    </div>
                                    <p class="main-text">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="img6">
                            <div class="blog-card">
                                <div class="flag yellow"></div>
                                <div class="picture">
                                    <img src="/img/blog-card-picture-5.png" alt="">
                                </div>
                                <div class="article">
                                    <div class="headliner">
                                        <h2 class="title font-24 bold">Lorem Ipsum</h2>
                                        <span class="date font-16">2019-07-15</span>
                                    </div>
                                    <p class="main-text">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-block see-all">
                <button>
                    <span class="button-text">Se mer</span>
                </button>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $('#myTab .tab-btn').on('click', function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('.tab-btn-bookopened').on('click', function (e) {
        $('.project-tabs').css('background-image', 'url(/img/tabs-bloggen-bg.png)');
        $('.current_tab').text("Bloggen");
        $('.act').removeClass('act');
        $(this).addClass("act");
    });
    $('.tab-btn-picture').on('click', function (e) {
        $('.project-tabs').css('background-image', 'url(/img/tabs-pic-bg.png)');
        $('.current_tab').text("Galleriet");
        $('.act').removeClass('act');
        $(this).addClass("act");
    });
    $('.tab-btn-doc').on('click', function (e) {
        $('.project-tabs').css('background-image', 'url(/img/tabs-doc-bg.png)');
        $('.current_tab').text("Pressklipp");
        $('.act').removeClass('act');
        $(this).addClass("act");
    });
    $('.tab-btn-bookopened').mouseover(function (e) {
        $('.arrow').css('transform', 'rotate(50deg)');
    });
    $('.tab-btn-picture').mouseover(function (e) {
        $('.arrow').css('transform', 'rotate(0deg)');
    });
    $('.tab-btn-doc').mouseover(function (e) {
        $('.arrow').css('transform', 'rotate(-50deg)');
    });
    $('.tab-btn').mouseleave(function (e) {
        if ($('.tab-btn-bookopened').hasClass('act')) {
            $('.arrow').css('transform', 'rotate(50deg)');
        } else if ($('.tab-btn-picture').hasClass('act')) {
            $('.arrow').css('transform', 'rotate(0deg)');
        } else if ($('.tab-btn-document').hasClass('act')) {
            $('.arrow').css('transform', 'rotate(-50deg)');
        }
    });
</script>
@stop