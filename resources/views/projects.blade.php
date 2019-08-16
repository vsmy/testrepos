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
        <div class="btn-container col-md-6">

            <a href="{{  $data->good_place_link  }}" class="btn-yellow">
                Se uppdraget här
            </a>
        </div>
    </div>
</section>
<section>
    <div class="container-wider">
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
                    <div class="grid-container-proj gc{{count($data->slider1)}} wb" id="wp-posts">

                        @foreach( $data->slider1 as  $slider)

                            <div class="img{{$slider['id']}} img mx-auto">
                                <a class="post-link" target="_blank">
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
{{--                                            <a href="{{ $slider['sell_detail_link'] }}" class="card-link">Learn more <img src="/img/little-arrow.svg" alt=""></a>--}}
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
                    <div class="grid-container-proj gc{{count($data->slider2)}}" id="wp-posts">

                        @foreach( $data->slider2 as  $slider)

                            <div class="img{{$slider['id']}} img mx-auto">
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
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab">
                    <div class="grid-container-proj gc{{count($data->slider3)}}" id="wp-posts">

                        @foreach( $data->slider3 as  $slider)

                            <div class="img{{$slider['id']}} img mx-auto">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section>
        <div class="sponsor-section">
            <div class="container">
                <p class="sponsor-title mx-auto">Projektets sponsorer</p>
                <div class="sponsor-picture-container mx-auto">
                    <img src="{{$data->sponsors}}" alt="" class="sponsor-picture">
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
        $('.project-tabs').css('background-image', 'url(/img/tabs-doc-bg.png)');
        $('.current_tab').text("Pressklipp");
        $('.act').removeClass('act');
        $(this).addClass("act");

    });
    $('.tab-btn-pic').on('click', function (e) {
        $('.project-tabs').css('background-image', 'url(/img/tabs-pic-bg.png)');
        $('.current_tab').text("Galleriet");
        $('.act').removeClass('act');
        $(this).addClass("act");
    });
    $('.tab-btn-bookopened').on('click', function (e) {
        $('.project-tabs').css('background-image', 'url(/img/book-opened-gray-bg.png)');
        $('.current_tab').text("Bloggen");
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