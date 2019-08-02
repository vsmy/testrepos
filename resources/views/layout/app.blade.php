<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html" charset="ISO-8859-1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    <title>test</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    {{--<link href="css/app.css" rel="stylesheet">--}}
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/imagefill.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
{{--    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>--}}

</head>
<body >

{{--<nav class="mb-4 navbar navbar-expand-lg navbar-dark cyan container">--}}
{{--    <div class="logo-wrapper">--}}
{{--        <a href="{{ route('welcome') }}"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></a>--}}
{{--    </div>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"--}}
{{--            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <div class="collapse navbar-collapse nav-links" id="navbarSupportedContent-4">--}}
{{--        <ul class="navbar-nav ml-auto">--}}
{{--            <li class="nav-item">--}}
{{--                Boroughs--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                Blog--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                Projects--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                About Us--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                Contact Us--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</nav>--}}
    @include('layout.navbar')
    <main class="content">
        @yield('content')
    </main>
    @include('layout.footer')
{{--<footer class="footer" id="footer">--}}
{{--    <div class="container">--}}
{{--        <div class="footer-line">--}}
{{--            <span class="footer-link">alltomsundbyberg.se © 2015-2019</span>--}}
{{--            <span class="footer-link">Vår integritetspolicy</span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
{{--<script>--}}
{{--    $('#header').prepend('<div id="menu-icon"><span class="first"></span><span class="second"></span><span class="third"></span></div>');--}}

{{--    $("#menu-icon").on("click", function(){--}}
{{--        $("nav").slideToggle();--}}
{{--        $(this).toggleClass("active");--}}
{{--    });--}}

{{--</script>--}}


<script>
    var $page = $('.page');

    $('.menu_toggle').on('click', function(){
        $page.toggleClass('shazam');
    });
    $('.content').on('click', function(){
        $page.removeClass('shazam');
    });
</script>

</body>
</html>
