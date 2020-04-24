<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}"">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}"">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('apple-touch-icon-72x72.png')}}"">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('apple-touch-icon-114x114.png')}}"">

    <title>{{ $title }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="animsition">
    <div class="wrapper boxed">

        <!-- Content CLick Capture-->

        <div class="click-capture"></div>

        <!-- Sidebar Menu-->

        <div class="menu">
            <span class="close-menu icon-cross2 right-boxed"></span>
            <ul class="menu-list right-boxed">
                {{menu('main', 'main_menu')}}
            </ul>
{{--            <div class="menu-footer right-boxed">--}}
{{--                <div class="social-list">--}}
{{--                    <a href="" class="icon ion-social-twitter"></a>--}}
{{--                    <a href="" class="icon ion-social-facebook"></a>--}}
{{--                    <a href="" class="icon ion-social-googleplus"></a>--}}
{{--                    <a href="" class="icon ion-social-linkedin"></a>--}}
{{--                    <a href="" class="icon ion-social-dribbble-outline"></a>--}}
{{--                </div>--}}
{{--                <div class="copy">© Bauhaus 2017. All Rights Reseverd<br> Design by LoganCee</div>--}}
{{--            </div>--}}
        </div>

        <!-- Navbar -->

        <header class="navbar boxed js-navbar">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="brand" href="#">
                <img alt="" src="{{asset('images/logo.png')}}"">
                <div class="brand-info">
                    <div class="brand-name">Optimal<span>Builders</span></div>
                    <div class="brand-text">We build houses in UK</div>
                </div>
            </a>

            <div class="social-list hidden-xs">
                <a href="" class="icon ion-social-youtube"></a>
                <a href="" class="icon ion-social-facebook"></a>
            </div>

            <div class="navbar-spacer hidden-sm hidden-xs"></div>

            <address class="navbar-address hidden-sm hidden-xs">call us: <span class="text-dark">(+44) 790 40 27 817</span></address>
        </header>

        <!-- Pageheader -->

@yield('content')

        <!-- Footer -->

        <footer id="footer" class="footer section">
            <div class="footer-flex">
                <div class="flex-item">
                    <a class="brand pull-left" href="#">
                        <img alt="" src="{{asset('images/logo.png')}}">
                        <div class="brand-info">
                            <div class="brand-name">Optimal<span>Builders</span></div>
                            <div class="brand-text">We build houses in UK</div>
                        </div>
                    </a>
                </div>
                <div class="flex-item">
                    <div class="inline-block">©2020 OptimalBuilders.co.uk<br>All Rights Resevered</div>
                </div>
                <div class="flex-item">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Portfolio</a></li>

                    </ul>
                </div>
                <div class="flex-item">
                    <ul>
                        <li><a href="">Feedback</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Career</a></li>
                    </ul>
                </div>

                <div class="flex-item">
                    <div class="social-list">
                        <a href="" class="icon ion-social-youtube"></a>
                        <a href="" class="icon ion-social-facebook"></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/animsition.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/sly.min.js')}}"></script>


<!-- Slider revolution -->
<script src="{{asset('js/rev-slider/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/rev-slider/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Slider revolution 5x Extensions   -->
<script src="{{asset('js/rev-slider/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('js/rev-slider/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('js/rev-slider/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('js/rev-slider/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('js/rev-slider/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('js/rev-slider/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('js/rev-slider/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('js/rev-slider/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('js/rev-slider/revolution.extension.video.min.js')}}"></script>
{{--@if(url()->current() == route('portfolio.index'))--}}

{{--@endif--}}

<!-- Scripts -->
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/rev-slider-init.js')}}"></script>
</body>
</html>
