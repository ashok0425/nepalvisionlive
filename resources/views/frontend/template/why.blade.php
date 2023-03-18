@php
    $why_choose_us = DB::table('frontend_section_control')
        ->where('id', 27)
        ->first();
    $image_why = Cache::remember('image_why', 604800, function () {
        return getFilePath('frontend/assets/whychooseus.webp');
    });
@endphp
<section class="why-choose-us mt-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <img src="{{ $image_why }}" alt="nepalvisiontreks" class="img-fluid" width="100%" height="100%">
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="right-artile mt-5">
                    <p class="custom-fs-36">
                        Why Choose us ?
                    </p>
                    <p>

                        {{ $why_choose_us->details }}


                    </p>
                    <div class="stats d-flex justify-content-between">
                        <div class="stat">
                            <h3>3000</h3>
                            <p>Sucessful Tour</p>
                        </div>
                        <div class="stat">
                            <h3>30,000</h3>
                            <p>Happy Tourists</p>
                        </div>
                        <div class="stat">
                            <h3>500</h3>
                            <p>Places Explored</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
