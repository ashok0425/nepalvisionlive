@extends('frontend.layout.master')
@php
    define('PAGE','home')
@endphp

@section('content')
<style>
   
   .page_loader{
    height: 100vh;
    width:  100vw;
background: rgba(0,0,0,0.6);
position: fixed;
top: 0;
left: 0;
z-index: 999;

   }

    
    
    
    .page_loader .container{
       width: 30%;
      height: 30%;
      animation: rotate 1.5s ease-in-out infinite;
      position: relative;
      top: 40%;

    }
    
    .set1{
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 25px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .set2{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      gap: 25px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    
    .ball{
      width: 40px;
      height: 40px;
      background: dodgerblue;
      border-radius: 50%;
    }
    
    .set1  .ball:nth-child(2){
      background: #ea1b26;
      animation: scale 1.5s ease-in-out infinite forwards;
    }
    
    .set1  .ball:nth-child(1){
      background: #ea1b26;
      animation: scale 1.5s ease-in-out infinite forwards;
    }
    
    .set2 .ball:nth-child(1){
      background: rgb(42, 135, 183);
      animation: scale2 1.5s ease-in-out infinite forwards;
    }
    
    .set2 .ball:nth-child(2){
      background:rgb(42, 135, 183) ;
      animation: scale2 1.5s ease-in-out infinite forwards;
    }
    
    @keyframes scale2 {
      0%{
        transform: scale(1);
      }
      50%{
        transform: scale(0);
      }
      100%{
        transform: scale(.8);
      }
    }
    
    
    @keyframes scale {
      0%{
        transform: scale(0);
      }
      50%{
        transform: scale(.8);
      }
      100%{
        transform: scale(0);
      }
    }
    
    @keyframes rotate{
      0%{
        transform: rotate(0deg);
      }
      100%{
        transform: rotate(360deg);
      }
    }
        </style>
<div class="page_loader">
    <div class="container">
        <div class="set1">  
          <div class="ball"></div>
          <div class="ball"></div>
        </div>
        <div class="set2">
          <div class="ball"></div>
          <div class="ball"></div>
        </div>
      
      </div>
</div>

{{-- hero section  --}}
@include('frontend.template.hero')

{{-- adventure section  --}}
@include('frontend.template.adventure')

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