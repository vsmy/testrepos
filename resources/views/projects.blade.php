@extends('layout.app')

@section('content')

<section class="full-screen header projects-section">
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
            <div class="tab-content container" id="v-pills-tabContent">
                <div class="container tab-pane fade show active" id="v-pills-bookopened" role="tabpanel" aria-labelledby="v-pills-bookopened-tab">
                    @if (count($data->slider1) > 0)
                        <div class="grid-container-proj gc{{count($data->slider1)}} wb" id="wp-posts">

                            @foreach( $data->slider1 as  $slider)
                                <div class="img{{$loop->index + 1}} img">
                                    <a href="" class="postlink">
                                        <div class="flag yellow"></div>
                                        <div class="blog-card">
                                            <div class="picture">
                                                <img class="w-100 slide" src="{{ $slider['img'] }}" alt="">
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
                    @else
                    <div class="nothing-placeholder">Ingenting här ännu</div>
                    @endif
                </div>
                <div class="tab-pane fade" id="v-pills-pic" role="tabpanel" aria-labelledby="v-pills-pic-tab">
                    @if (count($data->gallery) > 0)
                        <div class="grid-container-proj gc{{count($data->gallery)}}" id="wp-posts">

                            @foreach( $data->gallery as  $slider)
                                <div class="img{{$loop->index + 1}} img mx-auto">
                                    <a href="" class="postlink">
                                        <div class="flag yellow"></div>
                                        <div class="blog-card">
                                            <div class="picture">
                                                <img class="w-100 gallery" src="{{ $slider['img'] }}" alt="">
                                            </div>
                                            <div class="article">
                                                <div class="headliner">
                                                    <h2 class="title font-24 bold">Title</h2>
                                                    <span class="date font-16">{{$slider['date']}}</span>
                                                </div>
                                                <p class="main-text autoHide">{{ $slider['desc'] }}</p>
{{--                                                <a href="#" class="card-link">Learn more <img src="/img/little-arrow.svg" alt=""></a>--}}
                                            </div>
                                    </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="nothing-placeholder">Ingenting här ännu</div>
                    @endif
                </div>
                <div class="tab-pane fade" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab">
                    @if (count($data->wp_blog) > 0)
                        <div class="grid-container-proj gc{{count($data->wp_blog)}}" id="wp-posts">

                            @foreach( $data->wp_blog as  $slider)
                                <a href="{{$slider['link']}}" class="img img{{$loop->index + 1}} postlink">
                                    <div class="mx-auto">
                                        <div class="flag yellow"></div>
                                        <div class="blog-card">
                                            <div class="picture">
                                                <img class="w-100 press" src="{{ $slider['img'] }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            @endforeach
                        </div>
                    @else
                        <div class="nothing-placeholder">Ingenting här ännu</div>
                    @endif
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