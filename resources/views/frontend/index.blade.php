@extends('frontend.layout.master')
@php
    define('PAGE','home')
@endphp

@section('content')

{{-- hero section  --}}
@include('frontend.template.hero')

{{-- adventure section  --}}
@include('frontend.template.adventure')

{{-- top rated package section  --}}
@include('frontend.template.top_package')
{{-- why choose section  --}}
@include('frontend.template.why')


{{-- Destination section  --}}
@include('frontend.template.test')

{{-- Tour package section  --}}
@include('frontend.template.tour_package')

{{-- Special package section  --}}
@include('frontend.template.special_package')

{{-- User Testinomail section  --}}
@include('frontend.template.testinomial')

{{-- Blog section  --}}
@include('frontend.template.blog')


{{-- Afflicate section  --}}
@include('frontend.template.afflicate')

@include('frontend.template.subscribe')

@endsection
@push('scripts')
<script>
    $(window).on('load',function(){
        $('.page_loader').addClass('d-none')
    })
</script>
@endpush