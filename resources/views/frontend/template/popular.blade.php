@php
    use App\Models\CategoryPlace;
    $city = CategoryPlace::with('packages')
        ->where('status', 1)
        ->get();
@endphp
@push('style')
    <style>
        .popular_location {
            gap: 10px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 2fr;
            grid-template-rows: 1fr 1fr;
            width: 100%;
            
        }

        .popular_location a {
            background-size: cover;
            background-position: center center;
            border-radius: 15px;
            background-color: rgba(55, 55, 56, .3);
            transition: 0.4s;
            box-shadow: 0 0 0px rgba(0, 0, 0, 1);
            position: relative;
            background-blend-mode: multiply;
            height: 250px;
            object-fit: cover;
            position: relative;
        }

        .popular_location a span {
            position: absolute;
            right: 0px;
            top: 40%;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            background: linear-gradient(103.86deg,#00c6ff -22.01%,#0183e7 117.6%);
    width: 180px;
    height: 60px;
    font-weight: 500;
    font-size: 25px;
    color:#fff;
    text-decoration: none;
    display: flex;
align-items: center;
justify-content: center;
        }
        .popular_location a span small{
            font-size: 13px;
            font-weight: 500;
        }
        .popular_location a span div{
            margin-left: .4rem;
        }
        .popular_location a p {
            position: absolute;
            top: 73%;
            left: 5%;
        }

        .one {
            background-image: url({{ getImageUrl($city[0]->image) }});
            grid-area: 1 / 1 / span 1 / span 2;
        }

        .two {
            background-image: url({{ getImageUrl($city[1]->image) }});
            grid-area: 1 / 3 / span 1 / span 2;
        }

        .three {
            background-image: url({{ getImageUrl($city[2]->image) }});
            grid-area: 2 / 1 / span 1 / span 2;
        }

        .four {
            background-image: url({{ getImageUrl($city[3]->image) }});
            grid-area: 2 / 3 / span 1 / span 1;

        }

        .five {
            background-image: url({{ getImageUrl($city[4]->image) }});
            grid-area: 2 / 4 / span 1 / span 1;

        }
    </style>
@endpush

<div class="container mt-5 text-center">
    <div class="heading mt-5">
        <p class="custom-fs-36">Popular Locations</p>
    </div>
    <div class="popular_location">
        <a class="one" href="{{ route('package.place', ['url' => $city[0]->url]) }}">
            <span>
                {{ $city[0]->packages->count() }}
                <div><small>Packages</small></div>
                </span>
            <p href="" class="font-weight-bold custom-fs-18 text-white">{{ $city[0]->name }}</p>
        </a>

        <a class="two" href="{{ route('package.place', ['url' => $city[1]->url]) }}">
            <span>
                {{ $city[1]->packages->count() }}
                <div><small>Packages</small></div>
                </span>
            <p class="font-weight-bold custom-fs-18 text-white">{{ $city[1]->name }}</p>
        </a>
        <a class="three" href="{{ route('package.place', ['url' => $city[2]->url]) }}">
            <span>
                {{ $city[2]->packages->count() }}
                <div><small>Packages</small></div>
                </span>
            <p class="font-weight-bold custom-fs-18 text-white">{{ $city[2]->name }}</p>
        </a>
        <a class="four" href="{{ route('package.place', ['url' => $city[3]->url]) }}">
            <span>
                {{ $city[3]->packages->count() }}
                <div><small>Packages</small></div>
                </span>
            <p class="font-weight-bold custom-fs-18 text-white">{{ $city[3]->name }}</p>
        </a>
        <a class="five" href="{{ route('package.place', ['url' => $city[4]->url]) }}">
            <span>
                {{ $city[4]->packages->count() }}
                <div><small>Packages</small></div>
                </span>
            <p class="font-weight-bold custom-fs-18 text-white">{{ $city[4]->name }}</p>
        </a>

    </div>

</div>
