


@php
$banners = Cache::remember('banners', 604800, function()
{
    return  DB::table('main_slider')->where('status',1)->orderBy('id','desc')->where('type',1)->first();
});

$destinations = Cache::remember('destinations', 604800, function()
{
    return  DB::table('destinations')->where('status',1)->get();
});

$categories = Cache::remember('categories', 604800, function()
{
    return  DB::table('categories_destinations')->where('status',1)->where('destination_id',8)->orderBy('id','desc')->get();
});

@endphp

<style>
    .hero_carousel  .owl-nav button{
    position: absolute;
    cursor: pointer;
    top: 70% !important;
    }
    
    .custom-fs-32{
        font-size: 36px;
    }    
    .hero_carousel >.owl-nav>.owl-prev{
        color:  rgb(2, 9, 12)ortant;
    left: 33px!important;
    border: 2px solid  rgb(42, 135, 183)!important;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    transition: all .3s ease-in-out;
    color:  #fff!important;
    
    }
    .hero_carousel >.owl-nav>.owl-next{
    right: 33px!important;
    color:  #fff!important;
    border: 2px solid  rgb(42, 135, 183)!important;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    transition: all .3s ease-in-out;
    
    }
    
    .hero_carousel .owl-nav button:hover{
    background-color:  rgb(42, 135, 183)!important;
    color: #fff!important;
    }
    
    .desktop_search{
     
        background: #fff;
        padding: 5px;
        border-radius: 30px;
        text-align: center;
        text-align: center;
    }
    
    .desktop_search_wrapper{
        position: absolute;
        z-index: 99;
        bottom: 20%;
        margin: auto;
        left: 0;
        right: 0;
    }
   .desktop_search_wrapper select {
    border: none;
    outline: white;
    background: #fff;
    }
    .desktop_search_wrapper .btn_primary{
        border-radius: 30px!important;
        border-radius: 30px!important;
    padding: 3px 13px!important;
    margin-top: -7px;

    }
    main .hero {
        background-image: url("{{getimageUrl($banners->image)}}");
        background-color: rgba(2, 9, 12,.4);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 90vh;
        color: #fff;
        background-blend-mode: multiply;
    }
    .thirty_year{
        top: 37%;
        left: 10%;
    width: 250px;
    font-weight: 600;
    font-size: 23px;
    background: rgba(10, 92, 146, 0.4);
    padding:2.2rem 1.1rem;
    border-radius: 0px 25px 0px 0px;
    text-align: center
    }
    
.expanding {
  overflow: hidden;
  width: 0;
  height: 1em;
  word-break: break-all;
  animation-name:  expand-width;
  animation-duration:  10s;
  animation-fill-mode: forwards;
  position: absolute;
  bottom: 50%;
}



@keyframes expand-width {
  0% {
    width: 0ch;
  }
  0.975609756097561% {
    width: 0.5ch;
  }
  1.951219512195122% {
    width: 1ch;
  }
  2.926829268292683% {
    width: 1.5ch;
  }
  3.902439024390244% {
    width: 2ch;
  }
  4.878048780487805% {
    width: 2.5ch;
  }
  5.853658536585366% {
    width: 3ch;
  }
  6.829268292682927% {
    width: 3.5ch;
  }
  7.804878048780488% {
    width: 4ch;
  }
  8.78048780487805% {
    width: 4.5ch;
  }
  9.75609756097561% {
    width: 5ch;
  }
  10.73170731707317% {
    width: 5.5ch;
  }
  11.707317073170731% {
    width: 6ch;
  }
  12.682926829268293% {
    width: 6.5ch;
  }
  13.658536585365853% {
    width: 7ch;
  }
  14.634146341463413% {
    width: 7.5ch;
  }
  15.609756097560975% {
    width: 8ch;
  }
  16.585365853658537% {
    width: 8.5ch;
  }
  17.5609756097561% {
    width: 9ch;
  }
  18.53658536585366% {
    width: 9.5ch;
  }
  19.512195121951223% {
    width: 10ch;
  }
  20.487804878048784% {
    width: 10.5ch;
  }
  21.463414634146346% {
    width: 11ch;
  }
  22.439024390243908% {
    width: 11.5ch;
  }
  23.41463414634147% {
    width: 12ch;
  }
  24.390243902439032% {
    width: 12.5ch;
  }
  25.365853658536594% {
    width: 13ch;
  }
  26.341463414634156% {
    width: 13.5ch;
  }
  27.317073170731717% {
    width: 14ch;
  }
  28.29268292682928% {
    width: 14.5ch;
  }
  29.26829268292684% {
    width: 15ch;
  }
  30.243902439024403% {
    width: 15.5ch;
  }
  31.219512195121965% {
    width: 16ch;
  }
  32.19512195121953% {
    width: 16.5ch;
  }
  33.17073170731709% {
    width: 17ch;
  }
  34.14634146341465% {
    width: 17.5ch;
  }
  35.12195121951221% {
    width: 18ch;
  }
  36.097560975609774% {
    width: 18.5ch;
  }
  37.073170731707336% {
    width: 19ch;
  }
  38.0487804878049% {
    width: 19.5ch;
  }
  39.02439024390246% {
    width: 20ch;
  }
  40.00000000000002% {
    width: 20.5ch;
  }
  40.97560975609758% {
    width: 21ch;
  }
  41.951219512195145% {
    width: 21.5ch;
  }
  42.92682926829271% {
    width: 22ch;
  }
  43.90243902439027% {
    width: 22.5ch;
  }
  44.87804878048783% {
    width: 23ch;
  }
  45.85365853658539% {
    width: 23.5ch;
  }
  46.829268292682954% {
    width: 24ch;
  }
  47.804878048780516% {
    width: 24.5ch;
  }
  48.78048780487808% {
    width: 25ch;
  }
  49.75609756097564% {
    width: 25.5ch;
  }
  50.7317073170732% {
    width: 26ch;
  }
  51.70731707317076% {
    width: 26.5ch;
  }
  52.682926829268325% {
    width: 27ch;
  }
  53.65853658536589% {
    width: 27.5ch;
  }
  54.63414634146345% {
    width: 28ch;
  }
  55.60975609756101% {
    width: 28.5ch;
  }
  56.58536585365857% {
    width: 29ch;
  }
  57.560975609756134% {
    width: 29.5ch;
  }
  58.536585365853696% {
    width: 30ch;
  }
  59.51219512195126% {
    width: 30.5ch;
  }
  60.48780487804882% {
    width: 31ch;
  }
  61.46341463414638% {
    width: 31.5ch;
  }
  62.439024390243944% {
    width: 32ch;
  }
  63.414634146341506% {
    width: 32.5ch;
  }
  64.39024390243907% {
    width: 33ch;
  }
  65.36585365853662% {
    width: 33.5ch;
  }
  66.34146341463419% {
    width: 34ch;
  }
  67.31707317073175% {
    width: 34.5ch;
  }
  68.29268292682931% {
    width: 35ch;
  }
  69.26829268292687% {
    width: 35.5ch;
  }
  70.24390243902444% {
    width: 36ch;
  }
  71.219512195122% {
    width: 36.5ch;
  }
  72.19512195121956% {
    width: 37ch;
  }
  73.17073170731712% {
    width: 37.5ch;
  }
  74.14634146341469% {
    width: 38ch;
  }
  75.12195121951224% {
    width: 38.5ch;
  }
  76.09756097560981% {
    width: 39ch;
  }
  77.07317073170736% {
    width: 39.5ch;
  }
  78.04878048780493% {
    width: 40ch;
  }
  79.02439024390249% {
    width: 40.5ch;
  }
  80.00000000000006% {
    width: 41ch;
  }
  80.97560975609761% {
    width: 41.5ch;
  }
  81.9512195122% {
    width: 42ch;
  }
  100% {
    width: 42ch;
  }
}

    </style>

{{-- for mobile view  --}}
    <section class="hero d-block d-md-none">
        <div class="container">
            <div class="search-box">
             
                <h1 class="title mb-3 mt-3 mt-md-5 custom-fs-28 text-white ">
                    {{$banners->title}}
                </h1>
                <form action="{{ route('search') }}" method="GET">

                    <div class="container">
                
                           
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mt-4 mt-md-0">
                                        <h3 class='my-1 py-0 '>
                                            Destination
                                        </h3>
                                        <select name="destination" id="destination" required>
                                            <option value="">Choose Destination</option>
                                            @foreach ($destinations as $destination)
                                            <option value="{{ $destination->id }}" @if (Str::lower($destination->name)=='nepal')
                                                selected
                                            @endif>{{ $destination->name }}</option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mt-4 mt-md-0">
                                        <h3 class='my-1 py-0 '>
                                            Trip Type
                                        </h3>
                                        <select name="category" id="category" required>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if ($loop->first)
                selected
                                            @endif>{{ $category->name }}</option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-md-6 col-sm-12 ">
                                        <h3 class='my-1 py-0 '>
                                            Month
                                        </h3>
                                        <select name="month" id="month" >
                                            <option value="select month">Select Month</option>
                                            <option value="Jan" selected>January</option>
                                            <option value="Feb">February</option>
                                            <option value="Mar">March</option>
                                            <option value="Apr">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="Sep">September</option>
                                            <option value="Oct">October</option>
                                            <option value="Nov">November</option>
                                            <option value="Dec">December</option>
                
                
                                                
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12 d-flex align-items-center">
                                        <button class="btn btn-primary ">
                                            Search
                                        </button>
                                    </div>
                                </div>
                        </div>
                
                    </form>
            </div>
        </div>
    </section>


    {{-- for desktop view  --}}
    <section class="hero d-none d-md-block">
        <div class="container">
           <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1 class="expanding custom-fs-32 mx-5 text-warning ">CELEBRATING 30
                    PLUS GLORIOUS
                    YEARS OF
                    SERVICES</h1>
            </div>
            
           </div>
          </div>
            <div class="col-md-7 offset-md-3 desktop_search_wrapper">
                <div class="target mb-5 ">
                 
                <h2 class="title mb-3 mt-3 mt-md-5 custom-fs-19 text-white font-weight-600 text-capitalize mx-5 text-center">
                    {{$banners->title}}
                </h2>
                <form action="{{ route('search') }}" method="GET" class="desktop_search px-4">

                   
                
                           
                                <div class="row py-1 pt-2">
                                    <div class="col-3 offset-md-1">

                                        <select name="destination" id="destination" required class="w-100">
                                            <option value="">Choose Destination</option>
                                            @foreach ($destinations as $destination)
                                            <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                                
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-2 offset-md-1  ">
    
                                        <select name="category" id="category"  class="w-100">
                                            <option value="">Trip Type</option>

                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" >{{ Str::limit($category->name,35) }}</option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                
                                    <div class="col-2 offset-md-1 ">
                                   
                                        <select name="month" id="month" class="w-100">
                                            <option value=""> Month</option>
                                            <option value="Jan" >January</option>
                                            <option value="Feb">February</option>
                                            <option value="Mar">March</option>
                                            <option value="Apr">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="Sep">September</option>
                                            <option value="Oct">October</option>
                                            <option value="Nov">November</option>
                                            <option value="Dec">December</option>
                
                                        </select>
                                                
                                        </select>
                                </div>

                                    <div class="col-2 text-right">
                                        <button class=" btn_primary btn-small rounded btn btn-primary">
                                            Search
                                        </button>
                                    </div>
                                
                        </div>
                
                    </form>
            </div>
        </div>

    </section>

@push('scripts')
<script>
        $(document).on('change','#destination',function() {
            let data= $(this).val()
            $.ajax({
                type: "GET",
                url: '{{ url('load-category') }}/'+data,
                dataType: "json",
                success: function(data) {
                    $('#category').empty();
                    $.each(data,function(index,item){
                        $('#category').append('<option value ="'+item.id+'">'+item.name+'</option>');
                    });
                },
              
            });
        });


        $('.hero_carousel').owlCarousel({
        center: true,
        items:1,
        loop:true,
        dots:false,
        nav:false,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            600:{
                items:1,
                nav:true,

            }
        }
    });

    </script>
@endpush



