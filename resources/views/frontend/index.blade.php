@extends('frontend.layout.master')
@php
    define('PAGE','home')
@endphp
<style>
      .custom-fs-19{
        font-size: 19px;
        font-weight: 600!important;
    }

    .custom-fs-26{
        font-size: 31px!important;
        font-weight: 700!important;

    }

    .custom-fs-36{
        font-size: 36px!important;
        font-weight: 700!important;
text-align: center;
    }
</style>
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

<div class="d-none d-md-block">
{{-- User Testinomail section  --}}
@include('frontend.template.testinomial')
</div>

<div class="d-none d-md-block">
    {{-- Popular section  --}}
@include('frontend.template.popular')
</div>
{{-- Blog section  --}}
@include('frontend.template.blog')


{{-- Afflicate section  --}}
@include('frontend.template.afflicate')

@include('frontend.template.subscribe')

@endsection
@push('scripts')
<script>
    $(document).ready(function(){

    $(window).on('load',function(){
        $('.page_loader').addClass('d-none')
    })
})

</script>
@endpush