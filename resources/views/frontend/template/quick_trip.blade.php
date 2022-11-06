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

        <div class="modal-header">
            <h5 class="modal-title" id="quickTripLabel">Quick Trip</h5>
            <a class="close text-dark text-decoration-none" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-times fa-2x"></i></span>
            </a>
        </div>
        <div class="modal-body">
            <ul class="nav nav-tabs quick_trips_carousel owl-carousel px-5" id="myTab" role="tablist">


                @foreach ($categories_place as $key => $quick_trip)
                    <li class="nav-item">
                        <a class="nav-link {{ $key == 0 ? 'active' : '' }}" id="place-{{ $quick_trip->id }}-tab"
                            data-bs-toggle="tab" href="#place-{{ $quick_trip->id }}" role="tab"
                            aria-controls="place-{{ $quick_trip->id }}"
                            aria-selected="true">
                        @php
                            $ex=explode(' ',$quick_trip->name )
                        @endphp
                              {{ $ex[0]}}
                              @if(isset($ex[2]))
                              {{$ex[2]}}
                              @elseif(isset($ex[1])) 
                              {{$ex[1]}}
      
                              @endif
                    </a>
                    </li>
                @endforeach


                @foreach ($quick_trips as $key => $quick_trip)
                    <li class="nav-item">
                        <a class="nav-link" id="cat-{{ $quick_trip->id }}-tab"
                            data-bs-toggle="tab" href="#cat-{{ $quick_trip->id }}" role="tab"
                            aria-controls="cat-{{ $quick_trip->id }}"
                            aria-selected="true">  @php
                            $ex=explode(' ',$quick_trip->name )
                        @endphp
                     {{ $ex[0]}}
                     @if(isset($ex[2]))
                     {{$ex[2]}}
                     @elseif(isset($ex[1])) 
                     {{$ex[1]}}

                     @endif
                    </a>
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
                @foreach ($categories_place as $key => $quick_trip)
                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                    id="place-{{ $quick_trip->id }}" role="tabpanel"
                    aria-labelledby="place-{{ $quick_trip->id }}-tab">
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


                @foreach ($quick_trips as $key => $quick_trip)
                    <div class="tab-pane fade {{ $key == 0 ? '' : '' }}"
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
   
        <script>
            
    $('.quick_trips_carousel').owlCarousel({
            autoplay: false,
            autoplayTimeout: 2000,
            loop: true,
            dots: false,
            // navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            margin: 0,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        });
        </script>