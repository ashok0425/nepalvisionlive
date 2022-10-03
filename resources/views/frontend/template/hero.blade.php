
@push('style')
{{-- owl carousel  --}}
<style>
.hero_carousel  .owl-nav button{
position: absolute;
cursor: pointer;
top: 70% !important;
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

</style>
@endpush


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
    main .hero {
    background-image: url("{{asset($banners->image)}}");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 80vh;
    color: #fff;
}
.thirty_year{
    position: absolute;
    top: 40%;
    left: 10%;
width: 250px;
font-weight: 600;
font-size: 23px;
background: rgba(10, 92, 146, 0.4);
padding:2.2rem 1.1rem;
border-radius: 0px 25px 0px 0px;
text-align: center
}
</style>



    <section class="hero">
        <div class="container">
            <div class="search-box">
                <div class="thirty_year d-none d-md-block">
                    <div class="border_style">
                       <p>
                        CELEBRATING 30 <br> PLUS GLORIOUS <br> YEARS OF <br> SERVICES
                       </p>
                    </div>
                </div>
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



