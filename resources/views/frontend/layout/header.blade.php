@php
$destinations = DB::table('destinations')
    ->where('status', 1)
    ->get();

$website = DB::table('websites')->first();
@endphp
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
                        <p><a  rel="noreferrer"  target="_blank" href="#" class="text-dark text-decoration-none">
                                {{ $website->phone }}
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
                <a class="btn btn-primary btn-xs mt-1 " href="#" data-bs-toggle="modal"
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
use App\Models\Destination;

$quick_trips = CategoryDestination::where('quick_trips', 1)
    ->where('status', 1)
    ->orderBy('order')
    ->get();
$destination_not_nepal = Destination::whereIn('id', [10, 11])
    ->where('status', 1)
    ->get();

@endphp


<div class="modal fade quick-trip-modal" id="quickTrip" tabindex="-1" role="dialog" aria-labelledby="quickTripLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quickTripLabel">Quick Trip</h5>
                <a class="close text-dark text-decoration-none" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times fa-2x"></i></span>
                </a>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @foreach ($quick_trips as $key => $quick_trip)
                        <li class="nav-item">
                            <a class="nav-link {{ $key == 0 ? 'active' : '' }}" id="cat-{{ $quick_trip->id }}-tab"
                                data-bs-toggle="tab" href="#cat-{{ $quick_trip->id }}" role="tab"
                                aria-controls="cat-{{ $quick_trip->id }}"
                                aria-selected="true">{{ $quick_trip->name }}</a>
                        </li>
                    @endforeach
                    @foreach ($destination_not_nepal as $key => $destination_not_nepa)
                        <li class="nav-item">
                            <a class="nav-link" id="dest-{{ $destination_not_nepa->id }}-tab" data-bs-toggle="tab"
                                href="#dest-{{ $destination_not_nepa->id }}" role="tab"
                                aria-controls="dest-{{ $destination_not_nepa->id }}"
                                aria-selected="true">{{ $destination_not_nepa->name }}</a>
                        </li>
                    @endforeach

                </ul>
                <div class="tab-content" id="myTabContent">
                    @foreach ($quick_trips as $key => $quick_trip)
                        <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                            id="cat-{{ $quick_trip->id }}" role="tabpanel"
                            aria-labelledby="cat-{{ $quick_trip->id }}-tab">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Trip Id</th>
                                        <th scope="col">Trip Name</th>
                                        <th scope="col">Trip Length</th>
                                        <th scope="col">Trip Cost</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quick_trip->packages()->where('status', 1)->orderBy('name')->get() as $quickpackage)
                                        <tr>
                                            <td>{{ $quickpackage->trip_id }}</td>
                                            <td><a
                                                    href="{{ route('package.detail', ['url' => $quickpackage->url]) }}">{{ $quickpackage->name }}</a>
                                            </td>
                                            <td>{{ $quickpackage->duration }} </td>
                                            <td>US ${{ $quickpackage->price }} </td>
                                            <td><a href="{{ route('booknow', ['url' => $quickpackage->url]) }}"
                                                    class="btn  btn-primary btn-sm">Book now</a>
                                                {{-- <a class="btn btn-sample2 btn-sm" href="#">Join Group</a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                    @foreach ($destination_not_nepal as $key => $destination_not_nepa)
                        <div class="tab-pane fade" id="dest-{{ $destination_not_nepa->id }}" role="tabpanel"
                            aria-labelledby="dest-{{ $destination_not_nepa->id }}-tab">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Trip Id</th>
                                        <th scope="col">Trip Name</th>
                                        <th scope="col">Trip Length</th>
                                        <th scope="col">Trip Cost</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($destination_not_nepa->packages()->where('status', 1)->orderBy('name')->get() as $quickpackage1)
                                        <tr>
                                            <td>{{ $quickpackage1->trip_id }}</td>
                                            <td><a href="{{ route('package.detail', ['url' => $quickpackage1->url]) }}">{{ $quickpackage1->name }}</a></td>
                                            <td>{{ $quickpackage1->duration }} days</td>
                                            <td>US ${{ $quickpackage1->price }} </td>
                                            <td><a href="{{ route('booknow', ['url' => $quickpackage1->url]) }}"
                                                    class="btn btn-primary btn-sm">Book now</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach

                </div>
            </div>
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
    </script>
@endpush
