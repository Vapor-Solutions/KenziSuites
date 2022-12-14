<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome To Destinypal where your driver is your friend">
    <meta name="keywords" content="offering you on-the-go driver allocation services for all your transportation needs">
    <meta name="author" content="Destinypal">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }} @yield('title') </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @includeIf('layouts.partial.css')
    @livewireStyles
    @stack('css')
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-25"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @includeIf('layouts.partial.header')
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            @includeIf('layouts.partial.sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                @if (isset($header))
                    <x-breadcrumb>
                        <x-slot name="breadcrumb_title">
                            {{ $header }}
                        </x-slot>
                    </x-breadcrumb>
                @endif
                <!-- Container-fluid starts-->
                {{ $slot }}
                <!-- Container-fluid Ends-->
            </div>

        </div>
    </div>
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // if (localStorage.getItem("color"))
        //     $("#color").attr("href", "../assets/css/" + localStorage.getItem("color") + ".css");\
        if (localStorage.getItem('body') == null) {
            localStorage.setItem('body', 'light-only');
        }
        if (!(localStorage.getItem('body') == 'light-only' || localStorage.getItem('body') == 'dark-only' || localStorage
                .getItem('body') == 'dark-sidebar')) {
            localStorage.setItem('body', 'light-only');
        }
        if (localStorage.getItem('body') == 'dark-only') {
            $("body").addClass('dark-only')
            $("body").removeClass('dark-sidebar')
            $("body").removeClass('light-only')
            $('.mode i').removeClass('fa-moon-o')
            $('.mode i').addClass('fa-lightbulb-o')
            $('.mode i').removeClass('fa-hourglass-half')
        } else if (localStorage.getItem('body') == 'dark-sidebar') {
            $("body").addClass('dark-sidebar')
            $("body").removeClass('dark-only')
            $("body").removeClass('light-only')
            $('.mode i').addClass('fa-moon-o')
            $('.mode i').removeClass('fa-lightbulb-o')
            $('.mode i').removeClass('fa-hourglass-half')
        }
        if (localStorage.getItem('body') == 'light-only' || !localStorage.getItem('body')) {
            $("body").addClass('light-only')
            $("body").removeClass('dark-sidebar')
            $("body").removeClass('dark-only')
            $('.mode i').removeClass('fa-moon-o')
            $('.mode i').removeClass('fa-lightbulb-o')
            $('.mode i').addClass('fa-hourglass-half')
        }


        $(".mode").on("click", function() {
            // // $('.mode-sun').toggleClass("show")
            if (localStorage.getItem('body') == 'dark-only') {
                localStorage.setItem('body', 'light-only');
                $("body").addClass('light-only')
                $("body").removeClass('dark-only')
                $("body").removeClass('dark-sidebar')
                $('.mode i').removeClass('fa-lightbulb-o')
                $('.mode i').removeClass('fa-moon-o')
                $('.mode i').addClass('fa-hourglass-half')
            } else if (localStorage.getItem('body') == 'dark-sidebar') {
                localStorage.setItem('body', 'dark-only');
                $("body").addClass('dark-only')
                $("body").removeClass('dark-sidebar')
                $("body").removeClass('light-only')
                $('.mode i').removeClass('fa-moon-o')
                $('.mode i').removeClass('fa-hourglass-half')
                $('.mode i').addClass('fa-lightbulb-o')
            } else if (localStorage.getItem('body') == 'light-only') {
                localStorage.setItem('body', 'dark-sidebar');
                $("body").addClass('dark-sidebar')
                $("body").removeClass('light-only')
                $("body").removeClass('dark-only')
                $('.mode i').addClass('fa-moon-o')
                $('.mode i').removeClass('fa-lightbulb-o')
                $('.mode i').removeClass('fa-hourglass-half')
            }
        });


        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        window.addEventListener('alert', ({
            detail: {
                type,
                message
            }
        }) => {
            Toast.fire({
                icon: type,
                title: message
            })
        })

        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                Toast.fire({
                    icon: 'error',
                    text: "{{ $error }}"
                })
            @endforeach
        @endif

        Livewire.on('done', ()=>{
            Toast.fire({
                icon:'success',
                message:{{ session('message') }}
            })
        })
    </script>
    {{-- <x-livewire-alert::scripts /> --}}
    @includeIf('layouts.partial.js')
    @stack('modals')

    @stack('scripts')
    <!-- latest jquery-->
</body>

</html>
