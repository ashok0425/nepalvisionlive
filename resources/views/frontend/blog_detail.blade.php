@extends('frontend.layout.master')

@php
    $agent = new \Jenssegers\Agent\Agent();
@endphp
@if ($agent->isMobile())
    @section('title')
        {{ $blog->mobile_title }}
    @endsection
    @section('descr')
        {{ $blog->mobile_description }}
    @endsection
    @section('keyword')
        {{ $blog->mobile_keyword }}
    @endsection
@else
    @section('title')
        {{ $blog->meta_title }}
    @endsection
    @section('descr')
        {{ $blog->meta_description }}
    @endsection
    @section('keyword')
        {{ $blog->keywords }}
    @endsection
@endif
@section('img')
    {{ getImageurl($blog->guid) }}
@endsection
@section('url')
    {{ Request::url() }}
@endsection
@php
    define('PAGE', 'blog');
@endphp

@section('content')
    <style>
        .attachment {
            display: none;
        }

        .blog-img img {
            height: 320px !important;

        }

        /*.blog_content_image img{*/
        /*    width: 45%!important;*/

        /*}*/

        .blog-container {
            position: relative;
            top: -150px;
        }

        .bot-nav .container {
            border: 0px;
            padding: 0px;
        }

        .line_height {
            line-height: 50px !important;
            font-size: 27px !important;
        }
    </style>
    <section class="blog-img my-5 py-3">
        <div class="container">
            @if ($blog->cover_image != null)
                <img src="{{ getImageurl($blog->cover_image) }}" class="img-fluid w-100" alt="{{ $blog->post_title }}">
            @else
                <img src="{{ getImageurl('frontend/assets/recent-post.png') }}" alt="{{ $blog->post_title }}"
                    class="img-fluid w-100">
            @endif
        </div>
    </section>
    <section class="blog-container mt-5 pt-3 ">
        <div class="container">
            <div class="row ">
                <div class="col-md-10 offset-md-1 card border-0 shadow-sm">
                    <div class="px-md-5  ">

                        <div class="d-flex pt-5 justify-content-between align-items-center">
                            <h1 class="custom-text-primary line_height">
                                {!! $blog->post_title !!}


                            </h1>
                            <div class="date fw-600 text-right d-none d-md-none">
                                <span>
                                    {{ carbon\carbon::parse($blog->post_date)->format('d') }}
                                </span>
                                {{ carbon\carbon::parse($blog->post_date)->format('M Y') }}
                            </div>
                        </div>

                        <br>
                        <br>

                        <div class="blog_content_image">
                            {!! $blog->post_content !!}
                        </div>
                        <br />
                        <br />
                    </div>
                </div>

                <div class="bot-nav my-4">
                    <div class="container  ">
                        <div class="row px-md-5 px-2 mx-md-5 mx-2">
                            <div class="col-md-9">
                                <a href="{{ route('blog') }}"><i class="fas fa-long-arrow-alt-left"></i> Back to Blogs</a>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-5">
                                        <a href="{{ route('blog.detail', ['url' => $prev->url]) }}"><i
                                                class="fas fa-long-arrow-alt-left"></i> Previous Blog</a>
                                    </div>
                                    <div class="col-2">|</div>
                                    <div class="col-5">
                                        <a href="{{ route('blog.detail', ['url' => $next->url]) }}"> Next Blog <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<div class="mt-3">
    @php
      $features=DB::table('packages')->join('package_featured','packages.id','package_featured.featured_id')->select('packages.*')->where('status',1)->limit(4)->get();

    @endphp
    <section class="packages">
        <div class="container">
            <div class="heading my-5">
                <h2 class='my-0 py-0 custom-fs-22'>Featured Packages</h2>
            </div>
            <div class="row">
                @foreach ($features as $packaged)
                    <div class="col-md-3 col-sm-4">
                        @include('frontend.template.card1', ['package' => $packaged])
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>

                {{-- <div class=" mt-3 ">

                    <h2 class="text-center">Related Blogs</h4>

                        <div class="row ">

                            @foreach ($mores as $blog)
                                <div class="col-md-3 col-sm-12  my-2">
                                    <div class="post-card-1 card">
                                        <a href="{{ route('blog.detail', ['url' => $blog->url]) }}">
                                            <div class="img-container">
                                                @if ($blog->guid != null)
                                                    <img src="{{ getImageurl($blog->guid) }}" class="img-fluid w-100"
                                                        alt="{{ $blog->post_title }}">
                                                @else
                                                    <img src="{{ getImageurl('frontend/assets/recent-post.png') }}"
                                                        alt="{{ $blog->post_title }}" class="img-fluid">
                                                @endif
                                                <div class="date">
                                                    <span>
                                                        {{ carbon\carbon::parse($blog->post_date)->format('d') }}
                                                    </span>
                                                    {{ carbon\carbon::parse($blog->post_date)->format('M Y') }}

                                                </div>
                                            </div>
                                            <div class="px-2">

                                                <div class="img-desc">
                                                    <h2 class="custom-fs-18 text-dark custom-fw-700">
                                                        {{ Str::limit($blog->post_title, 35) }}</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                </div> --}}

               
            </div>
        </div>
    </section>
@endsection


@push('script')
    {{-- 
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Hotel",
        "name": "{{$place->name}}",
        "description": "{{ Str::limit($place->description, 120) }}",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "IN",
            "addressLocality": "{{$place->address}}",
            "addressRegion": "{{$place->address}}",
            "postalCode": "602000",
            "streetAddress": "Technikerstrasse 21"},
        "telephone": "+91 9958277997",
        "photo" :"{{getImageurl($gallery)}}",
        "starRating": {
            "@type": "Rating",
            "ratingValue": "4.3"},
        "image" :"{{getImageurl($gallery)}}",
         "priceRange": "₹1000"
    }</script> --}}
@endpush
