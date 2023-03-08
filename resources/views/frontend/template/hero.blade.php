@php
    $banners = Cache::remember('banners', 604800, function () {
        return DB::table('main_slider')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->where('type', 1)
            ->first();
    });
    
    $destinations = Cache::remember('destinations', 604800, function () {
        return DB::table('destinations')
            ->where('status', 1)
            ->get();
    });
    
    $categories = Cache::remember('categories', 604800, function () {
        return DB::table('categories_destinations')
            ->where('status', 1)
            ->where('destination_id', 8)
            ->orderBy('id', 'desc')
            ->get();
    });
    
@endphp

<style>
    main .hero {
        background-image: url("{{ getImageurl($banners->image) }}");
        background-color: rgba(2, 9, 12, .4);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 90vh;
        color: #fff;
        background-blend-mode: multiply;
    }
</style>

{{-- for mobile view  --}}
<section class="hero d-none">
    <div class="container">
        <div class="search-box">

            <h2 class="title mb-3 mt-3 mt-md-5 custom-fs-28 text-white ">
                {{ $banners->title }}
            </h2>
            <form action="{{ route('search') }}" method="GET">
                <div class="container">


                    <div class="row">
                        <div class="col-md-6 col-sm-12 mt-4 mt-md-0">
                            <strong class='my-1 py-0 '>
                                Destination
                            </strong>
                            <select name="destination" id="destination" required>
                                <option value="">Choose Destination</option>
                                @foreach ($destinations as $destination)
                                    <option value="{{ $destination->id }}"
                                        @if (Str::lower($destination->name) == 'nepal') selected @endif>{{ $destination->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 mt-4 mt-md-0">
                            <strong class='my-1 py-0 '>
                                Trip Type
                            </strong>
                            <select name="category" id="category" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @if ($loop->first) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-6 col-sm-12 ">
                            <strong class='my-1 py-0 '>
                                Month
                            </strong>
                            <select name="month" id="month">
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
<section class="hero ">
    <div class="container d-none d-md-block">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1 class="expanding custom-fs-32 mx-5 text-warning ">CELEBRATING 30
                    PLUS GLORIOUS
                    YEARS OF
                    SERVICES</h1>
            </div>

        </div>
    </div>
    {{-- desktop search  --}}
    <div class="col-md-7 offset-md-3 desktop_search_wrapper d-none d-md-block">
        <div class="target mb-5 ">

            <h2
                class="title mb-3 mt-3 mt-md-5 custom-fs-19 text-white font-weight-600 text-capitalize mx-5 text-center">
                {{ $banners->title }}
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

                        <select name="category" id="category" class="w-100">
                            <option value="">Trip Type</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ Str::limit($category->name, 35) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-2 offset-md-1 ">

                        <select name="month" id="month" class="w-100">
                            <option value=""> Month</option>
                            <option value="Jan">January</option>
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


    {{-- mobilesearch   --}}
    <div class=" desktop_search_wrapper  d-block d-md-none mt-5">
        <div class="target mb-5 ">

            <h1
                class="title mb-3 mt-3 mt-md-5 custom-fs-22 text-white font-weight-600 text-capitalize mx-5 text-center">
                {{ $banners->title }}
            </h1>
            <form action="{{ route('search') }}" method="GET" class="desktop_search px-4 mx-2">




                <div class="row py-1 pt-2">
                    <div class="col-9 px-0">
                        <div class="form-group">

                            <input type="search" id="" class="form-control btn_primary border-0 outline-none"
                                placeholder="Enter your keyword ..." name="keyword">
                        </div>
                    </div>

                    <div class="col-3 text-right px-0">
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
        $(document).on('change', '#destination', function() {
            let data = $(this).val()
            $.ajax({
                type: "GET",
                url: '{{ url('load-category') }}/' + data,
                dataType: "json",
                success: function(data) {
                    $('#category').empty();
                    $.each(data, function(index, item) {
                        $('#category').append('<option value ="' + item.id + '">' + item.name +
                            '</option>');
                    });
                },

            });
        });


        $('.hero_carousel').owlCarousel({
            center: true,
            items: 1,
            loop: true,
            dots: false,
            nav: false,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsive: {
                600: {
                    items: 1,
                    nav: true,

                }
            }
        });
    </script>
@endpush
