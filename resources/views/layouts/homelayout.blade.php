<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#856d47" />
    <title>Kenzi Suites | Where Comfort Matters</title>
    <meta name="author" content="Themezinho">
    <meta name="description" content="Beautiful premium look hotels website">
    <meta name="keywords"
        content="hotel, room, restaurant, events, pool, nightlife, bed, matras, balcony, vacation, honeymoon, suit, premium, deluxe, penthouse, vip">

    <!-- SOCIAL MEDIA META -->
    {{-- <meta property="og:description" content="Quardo | Deluxe Premium Hotels">
<meta property="og:image" content="http://www.themezinho.net/quardo/preview.png">
<meta property="og:site_name" content="Quardo">
<meta property="og:title" content="Quardo">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.themezinho.net/quardo"> --}}

    <!-- TWITTER META -->
    {{-- <meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@Quardo">
<meta name="twitter:creator" content="@Quardo">
<meta name="twitter:title" content="Quardo">
<meta name="twitter:description" content="Quardo | Deluxe Premium Hotels">
<meta name="twitter:image" content="http://www.themezinho.net/quardo/preview.png"> --}}

    <!-- FAVICON FILES -->
    <link href="/frontend/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="/frontend/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
    <link href="/frontend/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="/frontend/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="/frontend/ico/favicon.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="/frontend/css/lineicons.css">
    <link rel="stylesheet" href="/frontend/css/datepicker.min.css">
    <link rel="stylesheet" href="/frontend/css/fancybox.min.css">
    <link rel="stylesheet" href="/frontend/css/swiper.min.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="/frontend/css/style.css"> --}}

    @vite(['resources/scss/style.scss'])

    @stack('css')
</head>

<body>
    <div class="cursor js-cursor"></div>
    <div class="preloader">
        <div class="loadbar"></div>
        <figure>
            <span>LOADING KENZI SUITES</span>
            <img src="/frontend/images/preloader.png" alt="Image">
        </figure>
    </div>
    <div class="page-transition">
        <div class="layer"></div>
    </div>
    <main id="main">
        @yield('content')
        <x-home.footer></x-home.footer>
    </main>

    <!-- JS FILES -->

    <script src="/frontend/js/jquery.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/fancybox.min.js"></script>
    <script src="/frontend/js/swiper.min.js"></script>
    <script src="/frontend/js/datepicker.min.js"></script>
    <script src="/frontend/js/smooth-scrollbar.js"></script>
    <script src="/frontend/js/overscroll.js"></script>
    <script src="/frontend/js/TweenMax.min.js"></script>
    <script src="/frontend/js/scripts.js"></script>
    @stack('scripts')

    <script>
        $('#emailErrorMsg').text(null);
        $('#checkInErrorMsg').text(null);
        $('#checkOutErrorMsg').text(null);
        $('#paxErrorMsg').text(null);
        $('#booking-request-form').on('submit', function(e) {
            e.preventDefault();
            var _self = $(this);
            $('#emailErrorMsg').text(null);
            $('#checkInErrorMsg').text(null);
            $('#checkOutErrorMsg').text(null);
            $('#paxErrorMsg').text(null);
            var __selector = _self.closest('input,textarea');
            _self.closest('div').find('input,textarea').removeAttr('style');
            _self.find('.error-msg').remove();
            _self.closest('div').find('button[type="submit"]').attr('disabled', 'disabled');
            var data = $(this).serialize();
            $.ajax({
                url: '/contact',
                type: "post",
                dataType: 'json',
                data: data,
                success: function(data) {
                    _self.closest('div').find('button[type="submit"]').removeAttr('disabled');
                    if (data.code == false) {
                        _self.closest('div').find('[name="' + data.field + '"]');
                        _self.find('.rn-btn').after('<div class="error-msg"><p>*' + data.err +
                            '</p></div>');
                    } else {
                        $('.error-msg').hide();
                        $('.form-group').removeClass('focused');
                        _self.find('.rn-btn').after('<div class="success-msg"><p>' + data.success +
                            '</p></div>');
                        _self.closest('div').find('input,textarea').val('');

                        setTimeout(function() {
                            $('.success-msg').fadeOut('slow');
                        }, 5000);
                    }
                },
                error: function(response) {
                    $('#emailErrorMsg').text(response.responseJSON.errors.name);
                    $('#checkInErrorMsg').text(response.responseJSON.errors.email);
                    $('#checkOutErrorMsg').text(response.responseJSON.errors.phone_number);
                    $('#paxErrorMsg').text(response.responseJSON.errors.subject);
                    _self.closest('div').find('button[type="submit"]').attr('disabled', false);
                }
            });
        });
    </script>
</body>

</html>
