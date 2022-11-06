@php
$destinations = DB::table('destinations')
    ->where('status', 1)
    ->get();

$website = DB::table('websites')->first();
@endphp
<style>
    .quick_trips_carousel .owl-prev{
        top: 0%!important;
        left: -1%!important;
    }

    .quick_trips_carousel .owl-next{
        top: 0%!important;
        right: -1%!important;
    }
</style>

@include('frontend.layout.mobile_menu', $destinations)
<header id='header'>
    <div class="container d-none d-md-block py-1">
        <div class="row ">

            <div class="top-header col-md-10">
                <div class="row">
                    <div class="col-md-2 ">
                        <a href="{{ route('/') }}">
                            <img src="{{ asset($website->image) }}" alt="Logo" class="img-fluid  " width="220" height="100">
                        </a>

                    </div>
                    <div class="col-md-3">
                        <p><a  rel="noreferrer"  target="_blank" href="#" class="text-dark text-decoration-none d-flex align-items-center">
                            <i class="fab fa-whatsapp custom-fs-25 text-success"></i>&nbsp;{{  $website->phone }}
                            </a></p>
                    </div>
                    <div class="col-md-3">
                        <p>
                        <p><a  rel="noreferrer"  target="_blank" href="#" class="text-dark text-decoration-none">

                                {{ $website->email }}
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>{{ $website->address }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 text-right">
                <a class="btn btn-primary btn-xs mt-1 click_to_get_quick_trip" href="#" data-bs-toggle="modal"
                    data-bs-target="#quickTrip">
                    Quick Trip
                </a>

            </div>


        </div>
    </div>
    <div class="top_header"></div>

    <div class="custom_primary">

        <div class="container">

            <div class="bottom-header d-flex justify-content-between">

                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link text-md-white text-dark @if (PAGE == 'home') active @endif"
                                        aria-current="page" href="{{ route('/') }}">Home</a>
                                </li>

                                @foreach ($destinations as $destination)

                                    @if ($destination->id != 12)
                                        @php
                                            $categories = DB::table('categories_destinations')
                                                ->where('status', 1)
                                                ->orderBy('order', 'asc')
                                                ->where('destination_id', $destination->id)
                                                ->get();
                                        @endphp


@php
$places = DB::table('categories_places')
    ->where('status', 1)
    ->orderBy('id', 'asc')
    ->where('destination_id', $destination->id)
    ->get();
@endphp


                                        <li class="nav-item dropdown ">

                                            <span class="d-flex align-items-center text-md-white ">
                                                <a class="nav-link d-flex align-items-center text-md-white text-dark
                                        @if (PAGE == 'destination') active @endif"
                                                    href="{{ route('destination', ['url' => $destination->url]) }}"
                                                    aria-expanded="false">
                                                    {{ $destination->name }}


                                                </a>
                                                @if (count($categories) > 0)
                                                    <i class="fas fa-chevron-down"></i>
                                                @endif
                                            </span>


                                            @if (count($categories) > 0)
                                                <ul class="dropdown-menu first_drop"
                                                    aria-h3ledby="navbarDropdownMenuLink">



 @foreach ($places as $place)
                                                        @php
                                                            $packages = DB::table('packages')
                                                                ->where('status', 1)
                                                                ->orderBy('order', 'desc')
                                                                ->where('destination_id', $destination->id)
                                                                ->where('category_place_id', $place->id)
                                                                ->limit(12)
                                                                ->get();
                                                        @endphp

                                                        <li class="dropdown_menu"><a
                                                                class="dropdown-item d-flex justify-content-between align-items-center 
                                                        "
                                                                href="{{ route('package.place', ['url' => $place->url]) }}">{{ $place->name }}
                                                                @if (count($packages) > 0)
                                                                    <i class="fas fa-caret-right"></i>
                                                                @endif

                                                            </a>
                                                            @if (count($packages) > 0)
                                                                <ul class=" sub">
                                                                    @foreach ($packages as $package)
                                                                        <li><a class="dropdown-item"
                                                                                href="{{ route('package.detail', ['url' => $package->url]) }}">{{ $package->name }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                                @endif
                                                            </li>
                                                        @endforeach








                                                    @foreach ($categories as $category)
                                                        @php
                                                            $packages = DB::table('packages')
                                                                ->where('status', 1)
                                                                ->orderBy('order', 'desc')
                                                                ->where('destination_id', $destination->id)
                                                                ->where('category_destination_id', $category->id)
                                                                ->limit(12)
                                                                ->get();
                                                        @endphp

                                                        <li class="dropdown_menu"><a
                                                                class="dropdown-item d-flex justify-content-between align-items-center 
                                                        "
                                                                href="{{ route('package.category', ['url' => $category->url]) }}">{{ $category->name }}
                                                                @if (count($packages) > 0)
                                                                    <i class="fas fa-caret-right"></i>
                                                                @endif

                                                            </a>
                                                            @if (count($packages) > 0)
                                                                <ul class=" sub">
                                                                    @foreach ($packages as $package)
                                                                        <li><a class="dropdown-item"
                                                                                href="{{ route('package.detail', ['url' => $package->url]) }}">{{ $package->name }}</a>
                                                                        </li>
                                                                    @endforeach


                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            @endif

                                        </li>
                                    @endif

                                @endforeach

                                <li class="nav-item">
                                    <a class="nav-link text-md-white text-dark @if (PAGE == 'event') active @endif"
                                        href="{{ route('events') }}">Activity</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-md-white text-dark @if (PAGE == 'about') active @endif"
                                        href="{{ route('cms.page', ['page' => 'about-us']) }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-md-white text-dark @if (PAGE == 'blog') active @endif"
                                        href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-md-white text-dark @if (PAGE == 'contact') active @endif"
                                        href="{{ route('contactus') }}">Contact</a>
                                </li>
                            </ul>

                        </div>


                    </div>
                </nav>

            </div>
        </div>
    </div>
    <div class="top_header"></div>

</header>

@php
use App\Models\CategoryDestination;
use App\Models\CategoryPlace;

use App\Models\Destination;

$quick_trips = CategoryDestination::where('quick_trips', 1)
    ->where('status', 1)
    ->orderBy('order')
    ->get();
    
$categories_place = CategoryPlace::where('status', 1)
    ->get();
$destination_not_nepal = Destination::whereIn('id', [10, 11])
    ->where('status', 1)
    ->get();

@endphp


<div class="modal fade " id="quickTrip" tabindex="-1" role="dialog" aria-labelledby="quickTripLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl " role="document">
        <div class="modal-content quick-trip-modal">
            
        </div>
    </div>
</div>


@push('scripts')
    <script>
        if ($(window).width() > 900) {
            $('.dropdown-menu').addClass('main')
        } else {
            $('.dropdown-menu').removeClass('main')

        }

        $('.quick_trips_carousel .nav-link').click(function(){
            let link=$('.quick_trips_carousel .nav-link');
link.each((index,element) => {
element.classList.remove('active')
});
            $(this).addClass('active')
        })

        $('.click_to_get_quick_trip').click(function(){
            $.ajax({
                url:'{{url('load-quick-trip')}}',
                success:function(res){
                  $('.quick-trip-modal').html(res)
                }
            })
        })
    </script>

    
@endpush
