@php
    $packages = Cache::remember('tour_packages', 604800, function()
{
    return DB::table('packages')->orderBy('id','desc')->where('status',1)->where('banner','!=',null)->where('duration','!=',null)->where('activity','!=',null)->where('discounted_price',null)->limit(6)->get();
})
@endphp
<section class="tour-packages d-none d-md-block">
    <div class="container">
        <div class="heading mt-5">
            <h2>Tour Packages</h2>
        </div>
        <div class="owl-carousel allpackages ">
            @foreach ($packages as $package)
            <div class="mx-2">
                <div class="card-style-2">
                    <a href="{{ route('package.detail',['url'=>$package->url]) }}" class="text-decoration-none">
                    <div class="img-container">
                       
                        @if ($package->banner==null)
                        <img src="{{ asset('frontend/product_image_thumbnail_placeholder.webp')}}" data-src="{{ asset('frontend/assets/tour-1.png')}}" alt="{{$package->name  }}" class="img-fluid w-100 w-100 lazy" width="200" height="300">
                        @else 
                        <img src="{{ asset('frontend/product_image_thumbnail_placeholder.webp')}}" data-src="{{ asset($package->banner)}}" alt="{{$package->name  }}" class="img-fluid w-100 lazy" width="200" height="300">
                        @endif
                    </div>
                    <div class="img-desc">
                        <div class="about-img row">
                            <div class="col-12">
                               <p class="px-0 mx-0">
                                @if (!empty($package->duration))
                                {{ $package->duration }} |
                                @endif
                                @if (!empty($package->activity))
                              {{ Str::limit($package->activity,38) }}
                                    
                                @endif
                                   </p> 

                        </div>
                        <div class="col-6 ">

                            <div class="rating">
                                @for ($i=1;$i<=$package->rating;$i++)
                                <i class="fas fa-star text-warning"></i>
                                @endfor
                                @for ($i=1;$i<=5-$package->rating;$i++)
                                <i class="far fa-star text-gray"></i>
                                @endfor
                             
                            </div>
                        </div>
                        <div class="col-6">
                        <span class="custom-fs-18 custom-fw-600 custom-text-primary">
                            US ${{ $package->price }}

                        </span>
                        </div>
                        </div>
                        <div class="title mt-1 custom-fs-18">
                            {{ $package->name }}
                        </div>
                        
                    </div>
            </a>

                </div>
            </div>
            @endforeach

        </div>
            <div class="col-12">
                <a class="btn btn-primary mt-4" href="{{ route('package.all') }}">
                    View all
                </a>
            </div>
        </div>
    </div>
</section>