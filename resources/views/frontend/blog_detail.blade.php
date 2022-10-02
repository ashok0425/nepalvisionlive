@extends('frontend.layout.master')


@section('title')
{{ $blog->meta_title }}
@endsection
@section('descr')
{{ $blog->meta_description }}
@endsection
@section('keyword')
{{ $blog->keywords }}
@endsection

@section('img')
{{ asset($blog->guid) }}
@endsection
@section('url')
{{Request::url()}}
@endsection
@php
    define('PAGE','blog')
@endphp

@section('content')

<style>
    .attachment{
        display: none;
    }

    .blog-img img{
   height: 320px!important;

       }
       .blog_content_image img{
           width: 45%!important;

       }
   </style>
<section class="blog-img my-5 py-3">
    <div class="container">
        @if ($blog->cover_image!=null && file_exists($blog->cover_image))
        <img src="{{ asset($blog->cover_image)}}"  class="img-fluid w-100" alt="{{$blog->post_title}}">
       
        @else 
        <img src="{{ asset('frontend/assets/recent-post.png')}}" alt="{{$blog->post_title}}" class="img-fluid w-100"  >
        @endif
    </div>
</section>
<section class="blog-container mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <h1 >
                    {!! $blog->post_title !!}

                </h1>
                <br>
                <br>

               <div class="blog_content_image">
                {!! $blog->post_content !!}
               </div>
            </div>
            <div class="col-md-4">
                <aside>
                  
                   
                    <div class="recent-blogs-wrapper">
                        <h4>More Blogs</h4>
                        @foreach ($mores as $more)
                            
                        <div class="recent-blog mb-3">
                            <a href="{{ route('blog.detail',['url'=>$more->url]) }}">

                                <div class="row">
                                    <div class="col-5">
                                        @if ($more->guid!=null && file_exists($more->guid))
                        <img src="{{ asset($more->guid)}}"  class="img-fluid w-100" alt="{{$more->post_title}}">
                       
                        @else 
                        <img src="{{ asset('frontend/assets/recent-post.png')}}" alt="{{$more->post_title}}" class="img-fluid"  >
                        @endif
                                    </div>
                                    <div class="col-7">
                                        <p>{{ $more->post_title }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                       
                    </div>
                  
                </aside>
            </div>
        </div>
    </div>
</section>
<div class="bot-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <a href="{{ route('blog') }}"><i class="fas fa-long-arrow-alt-left"></i> Back to Blogs</a>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-5">
                        <a href="{{ route('blog.detail',['url'=>$prev->url]) }}"><i class="fas fa-long-arrow-alt-left"></i> Previous Blog</a>
                    </div>
                    <div class="col-2">|</div>
                    <div class="col-5">
                        <a href="{{ route('blog.detail',['url'=>$next->url]) }}"> Next Blog <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
        "photo" :"{{getImageUrl($gallery)}}",
        "starRating": {
            "@type": "Rating",
            "ratingValue": "4.3"},
        "image" :"{{getImageUrl($gallery)}}",
         "priceRange": "₹1000"
    }</script> --}}
@endpush