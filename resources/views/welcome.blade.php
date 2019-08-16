@extends ('layout.app')

@section('title')
    Home page
@stop

@section ('content')

    <section class="full-screen video-bg">
        <div class="fullscreen-bg video_wrap">
            <video loop muted autoplay class="fullscreen-bg__video video_bg" src="media/AOS website background.webm">
            </video>
        </div>
        <div class="container h-100">
            <div class="row h-100 main-content-text">
                <div class="col-md-6">
                    <h1 class="futura font-54 main-header">
                        Vi kartlägger staden med allt du vill veta!
                    </h1>
{{--                    <br>--}}
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
                    @include('map')
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
                <a href="" class="btn-yellow">
                    Öppna bloggen
                </a>
            </div>
        </div>
    </section>
  <section>
        <div class="container-wider">
            <div class="tabs">
                <div class="tab-toggler nav flex-column nav-pills" id="myTab"  id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <span class="current_tab">Instagram</span>
                    <img src="/img/arrow.svg" alt="" class="arrow" id="arrow">
                    <a class="nav-link active" id="v-pills-instagram-tab" data-toggle="pill" href="#v-pills-instagram" role="tab" aria-controls="v-pills-instagram" aria-selected="true">
                        <div class="tab-btn tab-btn-instagram act">
                            <i class="icon-instagram icon-gradient-inst"></i>
                        </div>
                    </a>
                    <a class="nav-link" id="v-pills-youtube-tab" data-toggle="pill" href="#v-pills-youtube" role="tab" aria-controls="v-pills-youtube" aria-selected="false">
                        <div class="tab-btn tab-btn-youtube">
                            <i class="icon-youtube"></i>
                        </div>
                    </a>
                    <a class="nav-link" id="v-pills-bookopened-tab" data-toggle="pill" href="#v-pills-bookopened" role="tab" aria-controls="v-pills-bookopened" aria-selected="false">
                        <div class="tab-btn tab-btn-bookopened">
                            <i class="icon-book_opened"></i>
                        </div>
                    </a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-instagram" role="tabpanel" aria-labelledby="v-pills-instagram-tab">
                        <div class="grid-container" id="insta-images">
                            <div class="img1">
                                <a class="post-link" href="#" target="_blank">
                                    <div class="card">
                                        <div class="flag yellow"></div>
                                            <div class="shadow-box">
{{--                                            <img src="img/instagram-card-picture-1.png" class="inst-photo">--}}
                                            </div>
                                        <p class="caption-text"></p>
                                        <span class="author"><img class="face-avatar" src="" alt=""></span>
                                    </div>
                                </a>
                            </div>
                            <div class="img2">
                                <a class="post-link" href="" target="_blank">
                                    <div class="card">
                                        <div class="flag green"></div>
                                        <div class="shadow-box">
{{--                                            <img src="img/instagram-card-picture-2.png" class="inst-photo">--}}
                                        </div>
                                        <p class="caption-text"></p>
                                        <span class="author"><img class="face-avatar" src="" alt=""></span>
                                    </div>
                                </a>
                            </div>
                            <div class="img3">
                                <a class="post-link" href="" target="_blank">
                                    <div class="card">
                                        <div class="flag salad"></div>
                                        <div class="shadow-box">
{{--                                            <img src="img/instagram-card-picture-3.png" class="inst-photo">--}}
                                        </div>
                                        <p class="caption-text"></p>
                                        <span class="author"><img class="face-avatar" src="" alt=""></span>
                                    </div>
                                </a>
                            </div>
                            <div class="img4">
                                <a class="post-link" href="" target="_blank">
                                    <div class="card">
                                        <div class="flag blue"></div>
                                        <div class="shadow-box">
{{--                                            <img src="img/instagram-card-picture-4.png" class="inst-photo">--}}
                                        </div>
                                        <p class="caption-text"></p>
                                        <span class="author"><img class="face-avatar" src="" alt=""></span>
                                    </div>
                                </a>
                            </div>
                            <div class="img5">
                                <a class="post-link" href="" target="_blank">
                                    <div class="card">
                                        <div class="flag purple"></div>
                                        <div class="shadow-box">
{{--                                            <img src="img/instagram-card-picture-5.png" class="inst-photo">--}}
                                        </div>
                                        <p class="caption-text"></p>
                                        <span class="author"><img class="face-avatar" src="" alt=""></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-youtube" role="tabpanel" aria-labelledby="v-pills-youtube-tab">
                        <div class="grid-container" id="youtube-videos">
                            <div class="img1"></div>
                            <div class="img2"></div>
                            <div class="img3"></div>
                            <div class="img4"></div>
                            <div class="img5"></div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal_custom" role="document">
                            <div class="modal-content">
                                <div class="modal-body mb-0 p-0">
                                    <div id="youtube_video_container" class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <div class="button-block see-all">
                                        <button data-dismiss="modal">
                                            <span class="button-text">Close</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-bookopened" role="tabpanel" aria-labelledby="v-pills-bookopened-tab">
                        <div class="grid-container-2" id="wp-posts">
                            <div class="img1"></div>
                            <div class="img2"></div>
                            <div class="img3"></div>
                            <div class="img4"></div>
                            <div class="img5"></div>
                            <div class="img6"></div>
                        </div>
                    </div>
                </div>
                <a href="" class="btn-yellow">
                    Se mer
                </a>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $('#myTab .tab-btn').on('click', function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
        $('.tab-btn-instagram').on('click', function (e) {
            $('.tabs').css('background-image', 'url(/img/tabs-instagram-bg.png)');
            $('.current_tab').text("Instagram");
            $('.act').removeClass('act');
            $(this).addClass("act");

        });
        $('.tab-btn-youtube').on('click', function (e) {
            $('.tabs').css('background-image', 'url(/img/tabs-youtube-bg.png)');
            $('.current_tab').text("Youtube");
            $('.act').removeClass('act');
            $(this).addClass("act");
        });
        $('.tab-btn-bookopened').on('click', function (e) {
            $('.tabs').css('background-image', 'url(/img/tabs-bloggen-bg.png)');
            $('.current_tab').text("Bloggen");
            $('.act').removeClass('act');
            $(this).addClass("act");
        });
        $('.tab-btn-instagram').mouseover(function (e) {
            $('.arrow').css('transform', 'rotate(50deg)');
        });
        $('.tab-btn-youtube').mouseover(function (e) {
            $('.arrow').css('transform', 'rotate(0deg)');
        });
        $('.tab-btn-bookopened').mouseover(function (e) {
            $('.arrow').css('transform', 'rotate(-50deg)');
        });
        $('.tab-btn').mouseleave(function (e) {
           if ($('.tab-btn-instagram').hasClass('act')) {
               $('.arrow').css('transform', 'rotate(50deg)');
           } else if ($('.tab-btn-youtube').hasClass('act')) {
               $('.arrow').css('transform', 'rotate(0deg)');
           } else if ($('.tab-btn-bookopened').hasClass('act')) {
               $('.arrow').css('transform', 'rotate(-50deg)');
           }
        });
        $(document).ready(function () {
            getphoto();
            inputYoutube();
            getAllposts();
            // $('#instagram_container').imagefill();
        });

        function inputInst(data) {
            $container_selector_i = "#insta-images";
            $image_holders = $($container_selector_i).children();
            for (var i = 0; i < data.data.length; i++) {
                $($image_holders[i]).find('.post-link').attr('href', data.data[i].link);
                $($image_holders[i]).find('.card').css('background-image',  'url("' + data.data[i].image_url + '")');
                $($image_holders[i]).find('.caption-text').text(data.data[i].caption.text);
                $($image_holders[i]).find('.face-avatar').attr('src', data.data[i].profile_picture);
                $($image_holders[i]).find('.author').append(data.data[i].username);
            }
        }
        function inputYoutube(data) {
            fetch('https://www.googleapis.com/youtube/v3/search?key=AIzaSyBjHKpeOy52O1oeGZo_JsVBdkF9GG7gb9s&channelId=UC6RUthnVTLdmlCvSDs7_vzw&part=snippet,id&order=date&maxResults=5&type=video')
                .then(response => response.json())
                .then(data => {
                    var videos = data;
                    fetch('https://www.googleapis.com/youtube/v3/search?key=AIzaSyBjHKpeOy52O1oeGZo_JsVBdkF9GG7gb9s&channelId=UC6RUthnVTLdmlCvSDs7_vzw&part=snippet,id&maxResults=2&type=channel')
                        .then(response => response.json())
                        .then(data => {
                            var channel = data;
                            $container_selector_i = "#youtube-videos";
                            $frame_holders = $($container_selector_i).children();
                            for (var i = 0; i < videos.items.length; i++) {
                                $($frame_holders[i]).html("\n" +
                                    "<div class=\"card card-youtube\" style=\'background-image: url(\"" + videos.items[i].snippet.thumbnails.high.url + "\")'>\n" +
                                    "    <div class=\"flag \" style='background-color: rgba(" + Math.floor(Math.random()*255) + ", " + Math.floor(Math.random()*255) + ", " + Math.floor(Math.random()*255) + ", 0.9)'\"></div>\n" +
                                    "    <div class=\"shadow-box\"></div>\n" +
                                    "    <p class=\"caption-text\">" + videos.items[i].snippet.title + "</p>\n" +
                                    "    <span class=\"author\"><img class=\"face-avatar\" src=\"" + channel.items[0].snippet.thumbnails.default.url + "\" alt=\"\">" + channel.items[0].snippet.channelTitle + "</span>\n" +
                                    "    <div class=\"play\" data-video_id=\"" + videos.items[i].id.videoId +"\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><img src=\"img/play_button.svg\" alt=\"\" class=\"play_button\"></div>\n" +
                                    "</div>");
                            }
                            $('.play').on('click', function () {
                                let video_id = this.dataset.video_id;
                                let iframe_video = `<iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/${video_id}" allowfullscreen></iframe>`;
                                document.getElementById('youtube_video_container').innerHTML = iframe_video;
                            });
                            $('.modal').on('hidden.bs.modal', function () {
                                $('#youtube_video_container').html("");
                            });
                        });
                });
        }

        function inputWp(data) {
            $container_selector_i = "#wp-posts";
            $frame_holders = $($container_selector_i).children();
            for (var i = 0; i < data.length; i++) {
                let date = data[i].date.match(/[0-9-]+/);
                let text = data[i].excerpt.rendered.replace(/<\/?[a-zA-Z0-9]*>/g,'');
                $($frame_holders[i]).html(
                    "<div class=\"blog-card\">" +
                    "   <div class=\"flag\" style='background-color: rgba(" + Math.floor(Math.random()*255) + ", " + Math.floor(Math.random()*255) + ", " + Math.floor(Math.random()*255) + ", 0.9)'></div>" +
                    "   <div class=\"picture\">" +
                    "       <img src=\"img/blog-card-picture-5.png\" alt=\"\">" +
                    "   </div>" +
                    "   <div class=\"article\">" +
                    "       <div class=\"headliner\">" +
                    "           <h2 class=\"title font-24 bold\">" + data[i].title.rendered + "</h2>" +
                    "           <span class=\"date font-16\">" + date + "</span>" +
                    "       </div>" +
                    "       <p class=\"main-text\">" + text + "</p>" +
                    "   </div>" +
                    "</div>");
            }
        }
        function getphoto () {
            fetch('/api/instagram/5')
                .then(response => response.json())
                .then(data => {
                    inputInst(data);
                });
        }
        function getYoutube() {
            fetch('https://www.googleapis.com/youtube/v3/search?key=AIzaSyBjHKpeOy52O1oeGZo_JsVBdkF9GG7gb9s&channelId=UC6RUthnVTLdmlCvSDs7_vzw&part=snippet,id&order=date&maxResults=5&type=video')
                .then(response => response.json())
                .then(data => {
                    console.log(data, 'videos');
                });
        }
        function getChannel() {
            fetch('https://www.googleapis.com/youtube/v3/search?key=AIzaSyBjHKpeOy52O1oeGZo_JsVBdkF9GG7gb9s&channelId=UC6RUthnVTLdmlCvSDs7_vzw&part=snippet,id&maxResults=2&type=channel')
                .then(response => response.json())
                .then(data => {
                    console.log(data, 'channel');
                });
        }
        function getAllposts() {
            $container_wp = "#wp_container";
            fetch('http://13.48.98.79/wp-json/wp/v2/posts')
                .then(response => response.json())
                .then(data => {
                    inputWp(data);
                });
        }
    </script>


@endsection