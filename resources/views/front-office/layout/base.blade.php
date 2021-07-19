<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Slidefolio</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="{{ asset('css/slidefolio.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>

<body>
    @include('front-office.partials.base.header-area')
    @include('front-office.partials.navbar')

    @yield('content')

    @include('front-office.partials.footer')
    
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('js/jquery.vegas.js') }}"></script>
    <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- Slideshow Background  -->
    <script>
        $.vegas('slideshow', {
            delay: 5000,
            backgrounds: [{
                    src: './img/nature1.jpg',
                    fade: 2000
                },
                {
                    src: './img/bw1.jpg',
                    fade: 2000
                },
                {
                    src: './img/portrait1.jpg',
                    fade: 2000
                },
                {
                    src: './img/portrait5.jpg',
                    fade: 2000
                },
                {
                    src: './img/portrait2.jpg',
                    fade: 2000
                },
                {
                    src: './img/portrait3.jpg',
                    fade: 2000
                },
                {
                    src: './img/portrait4.jpg',
                    fade: 2000
                },
                {
                    src: './img/forest.jpg',
                    fade: 2000
                }

            ]
        })('overlay', {
            src: './img/overlay.png'
        });
    </script>
    <!-- /Slideshow Background -->

    <!-- Mixitup : Grid -->
    <script>
        $(function() {
            $('#Grid').mixitup();
        });
    </script>
    <!-- /Mixitup : Grid -->

    <!-- Custom JavaScript for Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
    <script>
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
                    location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
    <!-- Navbar -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#nav').scrollToFixed();
        });
    </script>
    <!-- /Navbar-->

</body>

</html>
