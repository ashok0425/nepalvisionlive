@push('style')
    <style>
        .custom-fs-20 {
            font-size: 19px;
        }

        .bg_img {
            background: url("{{ getImageurl('alp.webp') }}");
            background-size: cover;
            background-repeat: no-repeat;
            padding: 4rem 1.2rem;
            background-attachment: fixed;
            /* background-blend-mode: multiply; */
        }
    </style>
    {{-- owl carousel  --}}
    <style>
        .destinations .owl-nav button {
            position: absolute;
            cursor: pointer;
            top: 100% !important;
        }


        .destinations>.owl-nav>.owl-prev {
            color: rgb(2, 9, 12) !important;
            left: 155% !important;
            border: 2px solid rgb(42, 135, 183) !important;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transition: all .3s ease-in-out;
            color: #fff !important;

        }

        .destinations>.owl-nav>.owl-next {
            left: 163% !important;

            color: #fff !important;
            border: 2px solid rgb(42, 135, 183) !important;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transition: all .3s ease-in-out;

        }

        .destinations .owl-nav button:hover {
            background-color: rgb(42, 135, 183) !important;
            color: #fff !important;
        }

        @media (max-width: 760px) {

            .destinations .owl-nav button {

                top: 50% !important;
            }


            .destinations>.owl-nav>.owl-prev {
                left: 3px !important;


            }

            .destinations>.owl-nav>.owl-next {
                left: 90% !important;


            }
        }
    </style>
@endpush
@php
    $destinations = DB::table('destinations')
        ->orderBy('id', 'desc')
        ->where('status', 1)
        ->get();
@endphp
<div class="bg_img mt-4">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6 order-2 order-md-1">
                <div class="owl-carousel destinations ">
                    @foreach ($destinations as $destination)
                        <div class="mx-2 card">
                            <a href="{{ route('destination', ['url' => $destination->url]) }}" class="text-decoration-none">

                                <div class="card-style-1  dest_img">


                                    <div class="img ">

                                        @if ($destination->image == null)
                                            <img src="{{ getImageurl('frontend/product_image_thumbnail_placeholder.webp') }}"
                                                data-src="{{ getImageurl('frontend/assets/tour-1.png') }}"
                                                alt="{{ $destination->name }}" class="img-fluid lazy w-100 w-100"
                                                width="200" height="250">
                                        @else
                                            <img src="{{ getImageurl('frontend/product_image_thumbnail_placeholder.webp') }}"
                                                alt="{{ $destination->name }}"
                                                data-src="{{ getImageurl($destination->image) }}"
                                                class="img-fluid lazy w-100" width="200" height="250">
                                        @endif

                                        <div class="places">
                                            @php
                                                $place = DB::table('packages')
                                                    ->where('price', '!=', 0)
                                                    ->where('destination_id', $destination->id)
                                                    ->where('status', 1)
                                                    ->get()
                                                    ->count();
                                                
                                            @endphp
                                            {{ $place }} Places
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="place-name custom-fs-25 text-dark custom-fw-700 text-center">
                                        {{ Str::limit($destination->name, 18) }}
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-md-3 order-1 order-md-2 offset-md-2">
                <div class="py-md-5 my-md-5 py-3 text-center ">
                    <p class="text-lg text-uppercase text-white custom-fs-36">Top Destinations</p>
                    <p class="text-white  custom-fs-20">We have various amazing destinations handpicked for you. Our
                        guide are ready for your adventures in multiple countries.</p>

                </div>
            </div>
        </div>

    </div>
</div>

{{-- 
@push('scripts')

<script>
    $('.dest_img').mouseover(function(){
let src=$(this).closest('img').attr('src')
        alert(src)
    })
</script>
@endpush --}}
