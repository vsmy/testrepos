@extends('layout.app')

@section('content')

<section class="full-screen header projects-section" style="z-index: 0">
    <div class="container projects-container">
        <div class="row h-100 main-content-text">
            <div class="col-md-6">
                <h1 class="futura font-54">
                        {{ $data->name }}
                </h1>
                <p class="font-18">
                   {{ $data->title }}
                    <br>
                    {{ $data->description }}
                </p>
            </div>
        </div>
        <a href="{{  $data->good_place_link  }}" class="btn-yellow">
            Se uppdraget här
        </a>
    </div>
</section>
<section>
    <div class="container container-wider">
        <div class="project-tabs">
            <div class="tab-toggler nav flex-column nav-pills" id="myTab"  id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <span class="current_tab">Bloggen</span>
                <img src="/img/arrow.svg" alt="" class="arrow" id="arrow">
                <a class="nav-link active" id="v-pills-bookopened-tab" data-toggle="pill" href="#v-pills-bookopened" role="tab" aria-controls="v-pills-bookopened" aria-selected="true">
                    <div class="tab-btn tab-btn-bookopened act">
                        <i class="icon-book_opened"></i>
                    </div>
                </a>
                <a class="nav-link" id="v-pills-doc-tab" data-toggle="pill" href="#v-pills-doc" role="tab" aria-controls="v-pills-doc" aria-selected="false">
                    <div class="tab-btn tab-btn-doc">
                        <i class="icon-doc"></i>
                    </div>
                </a>
                <a class="nav-link" id="v-pills-pic-tab" data-toggle="pill" href="#v-pills-pic" role="tab" aria-controls="v-pills-pic" aria-selected="false">
                    <div class="tab-btn tab-btn-pic">
                        <i class="icon-photo"></i>
                    </div>
                </a>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-bookopened" role="tabpanel" aria-labelledby="v-pills-bookopened-tab">
                    <div class="grid-container-proj gc{{count($data->slider)}} wb" id="wp-posts">

                    @foreach( $data->slider as  $slider)

                        <div class="img{{$slider['id']}} mx-auto">
                            <a class="post-link" href="{{ $slider['sell_detail_link'] }}" target="_blank">
                                <div class="blog-card">
                                    <div class="flag yellow"></div>
                                    <div class="picture">
                                        <img class="w-100" src="{{ $slider['img'] }}" alt="">
                                    </div>
                                    <div class="article">
                                        <div class="headliner">
                                            <h2 class="title font-24 bold">{{ $slider['title'] }}</h2>
                                        </div>
                                        <p class="main-text autoHide">{{ $slider['subtitle'] }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        @endforeach
                        <div class="btn-1 mx-auto">
                            <a href="http://www.alltomsundbyberg.se/wp-content/uploads/2017/04/infographic_A3.jpg" class="btn-yellow">
                                Se mer
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-pic" role="tabpanel" aria-labelledby="v-pills-pic-tab">
                    <div class="grid-container-3" id="pic-videos">
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
                        <div class="img3">
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
                        <div class="img4">
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
                        <div class="img5">
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
                        <div class="img6">
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
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab">
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
                        <div class="img3">
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
                        <div class="img4">
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
                        <div class="img5">
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
                    </div>
                </div>
            </div>

        </div>
    </div>
    </section>
<script type="text/javascript">
    $('#myTab .tab-btn').on('click', function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('.tab-btn-doc').on('click', function (e) {
        $('.tabs').css('background-image', 'url(/img/tabs-doc-bg.png)');
        $('.current_tab').text("Pressklipp");
        // $('.button-block.see-all').css('display', 'none');
        $('.act').removeClass('act');
        $(this).addClass("act");

    });
    $('.tab-btn-pic').on('click', function (e) {
        $('.tabs').css('background-image', 'url(/img/tabs-pic-bg.png)');
        $('.current_tab').text("Galleriet");
        // $('.button-block.see-all').css('display', 'none');
        $('.act').removeClass('act');
        $(this).addClass("act");
    });
    $('.tab-btn-bookopened').on('click', function (e) {
        $('.tabs').css('background-image', 'url(/img/tabs-bloggen-bg.png)');
        $('.current_tab').text("Bloggen");
        // $('.button-block.see-all').css('display', 'block');
        $('.act').removeClass('act');
        $(this).addClass("act");
    });
    $('.tab-btn-bookopened').mouseover(function (e) {
        $('.arrow').css('transform', 'rotate(50deg)');
    });
    $('.tab-btn-pic').mouseover(function (e) {
        $('.arrow').css('transform', 'rotate(0deg)');
    });
    $('.tab-btn-doc').mouseover(function (e) {
        $('.arrow').css('transform', 'rotate(-50deg)');
    });
    $('.tab-btn').mouseleave(function (e) {
        if ($('.tab-btn-bookopened').hasClass('act')) {
            $('.arrow').css('transform', 'rotate(50deg)');
        } else if ($('.tab-btn-pic').hasClass('act')) {
            $('.arrow').css('transform', 'rotate(0deg)');
        } else if ($('.tab-btn-doc').hasClass('act')) {
            $('.arrow').css('transform', 'rotate(-50deg)');
        }
    });
</script>
@stop