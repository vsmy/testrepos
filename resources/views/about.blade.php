@extends('layout.app')

@section('content')
    <section class="full-screen header">
        <div class="container">
            <div class="row h-100 main-content-text">
                <div class="col-md-6">
                    <h1 class="futura font-54">
                        Om oss
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="world-map-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 futura">
                    <h2 class="font-32 header">Lär känna oss</h2>
                    <p class="font-18">
                        Alltomsundbyberg är en webbportal för Social hållbarhet inom stadsutveckling, näringsliv och kultur.
                        I Sveriges snabbast växande stad tycker vi det är både intressant men framför allt viktigt att dokumentera de förändringar som Sundbyberg står inför.
                        Många Sundbybergare efterfrågar ett större inflytande och mer delaktighet. AlltomSundbyberg samarbetar med aktörer som är verksamma i staden, för att bidra till medborgardialog genom projekt och undersökningar.
                        Med hjälp av deltagande stadsutveckling kan medborgarna dela med sig av idéer för att påverka planeringen av nya områden på ett enkelt sätt.
                        Vi definierar enkelhet som ett sätt att uppnå klarhet, transparens och empati. Vårt mål är att förstå människor och hur vi interagerar genom digitalisering.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="street-bg">
            <div class="main-content-text row container">
                <div class="header">
                    <h1 class="futura font-42">Kommunikation</h1>
                    <p class="subheader-info font-18">
                        Vi arbetar omsorgsfullt med spridning av våra artiklar, insamling och återföring av frågor mm från våra sociala kanaler. Vi strävar vi efter att dela intressant information direkt i mobilen och formar hemsidan löpande för att erbjuda ett attraktivt flöde.
                        På Instagram kan du följa
                        <a href="" class="intext-link">Gatureportern</a> som kontinuerligt kartlägger stadens liv och rörelse.</p>
                </div>
                <div class="cards row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="flag blue"></div>
                            <div class="picture">
                                <img src="img/church.png" alt="">
                            </div>
                            <div class="article">
                                <p class="main-text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                </p>
                                <span><img src="img/face-avatar.png" alt="">johndue</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 card-youtube-container">
                        <div class="card card-youtube">
                            <div class="flag blue"></div>
                            <div class="picture">
                                <img src="img/church.png" class="preview" alt="">
                            </div>
                            <div class="article">
                                <p class="main-text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                </p>
                                <span><img src="img/face-avatar.png" alt="">johndue</span>
                            </div>
                            <div class="play" data-video_id="" data-toggle="modal" data-target="#exampleModalCenter"><img src="img/play_button.svg" alt="" class="play_button center"></div>
                        </div>
{{--                        <div class="card card-youtube">--}}
{{--                            <div class="flag yellow"></div>--}}
{{--                            <div class="shadow-box"></div>--}}
{{--                            <p class="caption-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitrundefined</p>--}}
{{--                            <span class="author"><img class="face-avatar" src="img/face-avatar.png" alt="">johndue</span>--}}
{{--                            <div class="play" data-video_id="" data-toggle="modal" data-target="#exampleModalCenter"><img src="img/play_button.svg" alt="" class="play_button"></div>--}}
{{--                        </div>--}}
                    </div>
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
        </div>
    </section>
    <section class="bakgrund">
        <div class="container">
            <div class="main-info">
                <h2 class="title font-32">Bakgrund</h2>
                <p class="text font-18">
                    Alltomsundbyberg grundades 2015 i form av en enkel hemsida där vi delade information kring stadens historiska minnen. Sundbybergs historia är så väldokumenterad från att den första tomten såldes att vi ville dela med oss av den informationen på ett modernt sätt. Intresset för vårt innehåll växte och vi utvecklade sedan sedan med att dokumentera stadsutvecklingen i staden.
                </p>
            </div>
        </div>
        <div class="bs-wizard">
            <div class="col-xs-3 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum">
                    <div class="progress-img">
                        <img src="img/progressbar/1.svg" alt="">
                    </div>
                </div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">
                    <p class="year">2015</p>
                    <p class="details">Informationssidan grundas</p>
                </div>
            </div>

            <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
                <div class="text-center bs-wizard-stepnum">
                    <div class="progress-img">
                        <img src="img/progressbar/2.svg" alt="">
                    </div>
                </div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">
                    <p class="year">2016</p>
                    <p class="details">Löpande dokumentering av stadsutvecklings projekt</p>
                </div>
            </div>

            <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
                <div class="text-center bs-wizard-stepnum">
                    <div class="progress-img">
                        <img src="img/progressbar/3.svg" alt="">
                    </div>
                </div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">
                    <p class="year">2017</p>
                    <p class="details">Vi inför kreativa projekt för deltagande stadsutveckling </p>
                </div>
            </div>

            <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                <div class="text-center bs-wizard-stepnum">
                    <div class="progress-img">
                        <img src="img/progressbar/4.svg" alt="">
                    </div>
                </div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">
                    <p class="year">2019</p>
                    <p class="details">Nylansering med ny profil</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        progressTimer();
        inputYoutube();

        function inputYoutube(data) {
            fetch('https://www.googleapis.com/youtube/v3/search?key=AIzaSyBjHKpeOy52O1oeGZo_JsVBdkF9GG7gb9s&channelId=UC6RUthnVTLdmlCvSDs7_vzw&part=snippet,id&order=date&maxResults=1&type=video')
                .then(response => response.json())
                .then(data => {
                    var videos = data;
                    fetch('https://www.googleapis.com/youtube/v3/search?key=AIzaSyBjHKpeOy52O1oeGZo_JsVBdkF9GG7gb9s&channelId=UC6RUthnVTLdmlCvSDs7_vzw&part=snippet,id&maxResults=2&type=channel')
                        .then(response => response.json())
                        .then(data => {
                            var channel = data;
                            console.log(videos, 'videos');
                            console.log(channel, 'channel');
                            $('.preview').attr('src', videos.items[0].snippet.thumbnails.high.url);
                            $('.play').attr('data-video_id', videos.items[0].id.videoId);
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

        function progressTimer () {
            let progressPoints = $('.bs-wizard').children();
            var i = 0;
            setInterval(function () {
                if (i > 4) {
                    for (k = 0; k < progressPoints.length; k++) {
                        $(progressPoints[k]).removeClass('active').removeClass('complete').addClass('disabled');
                    }
                    i = 0;
                } else {
                    if (i > 0) {
                        $(progressPoints[i-1]).removeClass('active').addClass('complete');
                    }
                    setTimeout(function () {
                        if (i < 4) $(progressPoints[i]).removeClass('disabled').addClass('active');
                        i++;
                    }, 600);
                }
            }, 2000);
        }
    </script>
@stop