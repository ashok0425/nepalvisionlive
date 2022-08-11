@php
$setting = DB::table('websites')->first();

@endphp

@section('title')
    {{ $setting->title }}
@endsection
@section('descr')
    {{ $setting->descr }}
@endsection
@section('keyword')
    {{ $setting->title }}
@endsection
@section('title')
    {{ $setting->title }}
@endsection
@section('img')
    {{ asset($setting->image) }}
@endsection
@section('url')
    {{ Request::url() }}
@endsection
@section('fev')
    {{ asset($setting->fev) }}
@endsection

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!--Jquery Ui Css-->
    <link rel="stylesheet" href="{{ asset('frontend/main.css') }}">
    <meta property="fb:app_id" content="160443599540603" />
    <meta property="og:url" content="@yield('url')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('descr')" />
    <meta property="og:image" content="@yield('img')" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <meta name="author" content="{{$seo->meta_author}}"> --}}
    <meta name="keyword" content="@yield('keyword')">
    <meta name="description" content="@yield('descr')">

    <link rel="shortcut  icon" href="@yield('fev')" type="image/icon type">

    <title>@yield('title')</title>
    <style>
        .text-right{
            text-align: right;
        }
        .card-style-2 img {
            height: 250px !important;
        }

        .event-cards img {
            height: 300px !important;
        }

        .card-style-1 img {
            height: 280px !important;

        }




        .owl-nav .owl-prev {
            color: rgb(42, 135, 183) !important;
            left: 0% !important;
            border: 2px solid rgb(42, 135, 183) !important;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transition: all .3s ease-in-out;
            position: absolute;
            cursor: pointer;
            top: 50% !important;
            background-color: rgb(42, 135, 183) !important;
            color: #fff !important;

        }

        .owl-nav .owl-next {
            right: 0% !important;
            color: rgb(42, 135, 183) !important;
            border: 2px solid rgb(42, 135, 183) !important;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transition: all .3s ease-in-out;
            position: absolute;
            cursor: pointer;
            top: 50% !important;
            background-color: rgb(42, 135, 183) !important;
            color: #fff !important;


        }

        .owl-nav button:hover {
            color: rgb(42, 135, 183) !important;
            background-color: #fff !important;
        }

        #xsatpea8kg31655563810050,
        .eARkMz {
            display: none;
        }
    </style>
    @stack('style')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XHV2W2P49F"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-XHV2W2P49F');
    </script>
</head>

<body>
    {{-- include header --}}
    @include('frontend.layout.header')

    <main>
        {{-- main content dinamically --}}
        @yield('content')
    </main>


    {{-- include header --}}
    @include('frontend.layout.footer')





    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                facebook: "273833563619", // Facebook page ID
                whatsapp: "+977", // WhatsApp number
                call_to_action: "Message us", // Call to action
                button_color: "#129BF4", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "whatsapp,facebook", // Order of buttons
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->
    {{-- script tags --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('frontend/app.js') }}">
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--owl carousel-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    {{-- toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- toastr --}}
    <script>
        @if (Session::has('messege')) //toatser
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('messege') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('messege') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('messege') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('messege') }}");
                    break;
            }
        @endif
    </script>


    <!--tab collapse-->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/62ade19e7b967b117995376a/1g5rjilk3';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->








    <script>
        $('.destinations').owlCarousel({
            autoplay: true,
            autoplayTimeout: 6000,
            loop: true,
            dots: false,
            // navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            margin: 0,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        });


        $('.allpackages').owlCarousel({
            autoplay: true,
            autoplayTimeout: 6000,
            loop: true,
            dots: false,
            // navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            margin: 0,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });


        $('.special_packages').owlCarousel({
            autoplay: true,
            autoplayTimeout: 6000,
            loop: true,
            dots: false,
            // navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            margin: 0,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });

        $('.testimonials').owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            loop: true,
            dots: false,
            // navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            margin: 0,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });


        $('.afflicated').owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            loop: true,
            dots: false,
            nav: false,

            // navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            margin: 0,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    </script>
    @stack('scripts')

</body>

</html>
