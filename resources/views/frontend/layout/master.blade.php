@php
    $setting = DB::table('websites')->first();
    $agent = new \Jenssegers\Agent\Agent();
    
@endphp
@if ($agent->isMobile())
    @section('title')
        {{ $setting->mobile_title }}
    @endsection
    @section('descr')
        {{ $setting->mobile_description }}
    @endsection
    @section('keyword')
        {{ $setting->mobile_keyword }}
    @endsection
@else
    @section('title')
        {{ $setting->title }}
    @endsection
    @section('descr')
        {{ $setting->descr }}
    @endsection
    @section('keyword')
        {{ $setting->title }}
    @endsection
@endif
@section('img')
    {{ getImageurl($setting->image) }}
@endsection
@section('url')
    {{ Request::url() }}
@endsection
@section('fev')
    {{ getImageurl($setting->fev) }}
@endsection

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="fb:app_id" content="160443599540603" />
    <meta property="og:url" content="@yield('url')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('descr')" />
    <meta property="og:image" content="@yield('img')" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('noindex')
    <meta name="keyword" content="@yield('keyword')">
    <meta name="description" content="@yield('descr')">
    @if (url()->current() == 'https://www.nepalvisiontreks.com' ||
            url()->current() == 'https://www.nepalvisiontreks.com/index.php')
        <link rel="canonical" href="https://www.nepalvisiontreks.com" />
    @else
    @endif
    <link rel="shortcut  icon" href="@yield('fev')" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ getFilePath('frontend/main.css') }}">
    <link rel="apple-touch-icon" href="@yield('fev')" />

    <title>@yield('title')</title>
    <style>
        .text-right {
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

        * :not(i) {
            font-family: "Rubik", sans-serif !important;
        }
    </style>
    @stack('style')

    <!--{{-- Please replace tag manager code with following --}}-->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WB2LZGJ');
    </script>
    <!--End Google Tag Manager -->

    <!--Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB2LZGJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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




    <link defer
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link defer href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link defer rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- Owl Stylesheets -->
    <link defer rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    {{-- toastr --}}
    <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/62aeabb6b0d10b6f3e781366/1g5t4tgjc';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "Nepal Vision Treks",
  "image": " {{ getImageurl($setting->image) }}",
  "description": " {{ $setting->descr }}",
  "brand": {
    "@type": "Brand",
    "name": "Nepal Vision Treks"
  },
  
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "4",
    "ratingCount": "1",
    "reviewCount": "1"
  },
  "review": {
    "@type": "Review",
    "name": "Amazing Experience",
    "reviewBody": "The moment our guides met us at the airport, we knew we made the right choice in choosing Nepal Visions. Everything that happened after that reinforced that Nepal Visions was the best choice, from our first meeting with Chet to the departure dinner at the end. As you can see by this photo above, we became a family. Our guides Kashar and Giri helped us realize a lifelong dream of trekking in the shadow of Mt. Everest. Their expertise in trekking kept us all very healthy so we could enjoy every step. At Nepal Visions – you are treated like family! Albert Lepore EBC Trek - 20 Days: April - May, 2012 7868 S. Hill Drive Littleton, USA Email - al.lepore@aeroastro.com",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "5",
      "bestRating": "5",
      "worstRating": "4"
    },
    "datePublished": "2022-08-01",
    "author": {"@type": "Person", "name": "Np"},
    "publisher": {"@type": "Organization", "name": "Albert Lepore"}
  }
}
</script>
    {{-- script tags --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ getFilePath('frontend/appp.js') }}"></script>

    <!--owl carousel-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="{{ getFilePath('frontend/jquery.lazy.min.js') }}"></script>

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



    @stack('scripts')

</body>

</html>
