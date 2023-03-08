<style>
    .border_left {
        border-left: 1px solid rgb(90, 90, 90);
    }

    .line_height {
        line-height: 20px !important;
    }
</style>
<div class="mx-2">
    <div class="card-style-2">
        <a href="{{ route('package.detail', ['url' => $package->url]) }}" class="text-decoration-none">
            <div class="img-container">

                @if ($package->banner == null)
                    <img src="{{ getImageurl('frontend/product_image_thumbnail_placeholder.webp') }}"
                        data-src="{{ getImageurl('frontend/assets/tour-1.png') }}" alt="{{ $package->name }}"
                        class="img-fluid w-100 w-100 lazy" width="200" height="300">
                @else
                    <img src="{{ getImageurl('frontend/product_image_thumbnail_placeholder.webp') }}"
                        data-src="{{ getImageurl($package->banner) }}" alt="{{ $package->name }}"
                        class="img-fluid w-100 lazy" width="200" height="300">
                @endif
            </div>
            <div class="img-desc d-none d-md-block">
                <div class="about-img row">
                    <div class="col-12">
                        <p class="px-0 mx-0">
                            @if (!empty($package->duration))
                                {{ $package->duration }} |
                            @endif
                            @if (!empty($package->activity))
                                {{ Str::limit($package->activity, 38) }}
                            @endif
                        </p>

                    </div>
                    <div class="col-6 ">

                        <div class="rating">
                            @for ($i = 1; $i <= $package->rating; $i++)
                                <i class="fas fa-star text-warning"></i>
                            @endfor
                            @for ($i = 1; $i <= 5 - $package->rating; $i++)
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

            <div class="img-desc d-block d-md-none ">
                <div class="title mt-1 custom-fs-18 line_height">
                    {{ $package->name }}
                </div>
                <div class="row mt-3">
                    <div class="col-md-7 col-8">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="py-0 my-0 text-dark">Destination</p>
                                <strong class="text-dark">Nepal</strong>
                            </div>
                            <div class="text-dark">
                                {{ $package->duration }}
                            </div>
                        </div>

                        <div class="text-dark mt-1">
                            @if (!empty($package->activity))
                                {{ Str::limit($package->activity, 38) }}
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4 col-4 border_left">

                        <div class="rating">
                            @for ($i = 1; $i <= $package->rating; $i++)
                                <i class="fas fa-star text-warning"></i>
                            @endfor
                            @for ($i = 1; $i <= 5 - $package->rating; $i++)
                                <i class="far fa-star text-gray"></i>
                            @endfor

                        </div>
                        <div class="custom-fs-16 mt-3 custom-fw-600 custom-text-primary">
                            US ${{ $package->price }}

                        </div>
                    </div>

                </div>
            </div>
        </a>

    </div>
</div>
