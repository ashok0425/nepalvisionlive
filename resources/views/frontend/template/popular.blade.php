@php
use App\Models\CategoryPlace;
    $city1=CategoryPlace::where('status',1)->first();
    $city2=CategoryPlace::skip(1)->take(1)->where('status',1)->first();
    $city3=CategoryPlace::skip(2)->take(1)->where('status',1)->first();
    $city4=CategoryPlace::skip(3)->take(1)->where('status',1)->first();
    $city5=CategoryPlace::skip(4)->take(1)->where('status',1)->first();
@endphp

<style>  

    .popular_location{
 gap: 10px;
 display: grid;
 grid-template-columns: 1fr 1fr 1fr 2fr;
 grid-template-rows: 1fr 1fr ;
 width: 100%;
}
.popular_location a{
 background-size: cover;
 background-position: center center;
 border-radius: 15px;
 background-color: rgba(55, 55, 56,.3);
 transition: 0.4s;
 box-shadow: 0 0 0px rgba(0,0,0,1);
 position: relative;
 background-blend-mode: multiply;
 height: 150px;
 object-fit: cover;
}
.popular_location  a p{
    position: absolute;
    top: 73%;
    left: 5%;
}
.one{
 background-image: url({{getImageUrl($city1->image)}});
 grid-area: 1 / 1 / span 1 / span 2;
}
.two{
 background-image:url({{getImageUrl($city2->image)}});
 grid-area: 1 / 3 / span 1 / span 2;
}
.three{
 background-image:url({{getImageUrl($city3->image)}});
 grid-area: 2 / 1 / span 1 / span 2;
}
.four{
 background-image: url({{getImageUrl($city4->image)}});
 grid-area: 2 / 3 / span 1 / span 1;

}
.five{
 background-image:url({{getImageUrl($city5->image)}});
 grid-area: 2 / 4 / span 1 / span 1;

}

</style>

<div class="container mt-5 text-center">
    <div class="heading mt-5">
            <p class="custom-fs-36">Popular Locations</p>
        </div>
   
<p>
    We have selected some best locations around the world for you.
</p>
    <br>
    
<div class="popular_location">
        <a class="one" href="{{ route('package.place', ['url' => $city1->url]) }}">
            <p href="" class="font-weight-bold custom-fs-18 text-white">{{$city1->name}}</p>
        </a>

        <a class="two"  href="{{ route('package.place', ['url' => $city2->url]) }}" >
            <p class="font-weight-bold custom-fs-18 text-white">{{$city2->name}}</p>
        </a>
        <a class="three" href="{{ route('package.place', ['url' => $city3->url]) }}" >
            <p class="font-weight-bold custom-fs-18 text-white">{{$city3->name}}</p>
        </a>
        <a class="four" href="{{ route('package.place', ['url' => $city4->url]) }}">
            <p  class="font-weight-bold custom-fs-18 text-white">{{$city4->name}}</p>
        </a>
        <a class="five" href="{{ route('package.place', ['url' => $city5->url]) }}">
            <p  class="font-weight-bold custom-fs-18 text-white">{{$city5->name}}</p>
        </a>
       
</div>

    </div>
