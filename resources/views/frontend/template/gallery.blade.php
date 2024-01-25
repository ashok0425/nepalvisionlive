
<style>
    .img_size{
  max-height: 400px;
    }
    .img_size img{
  object-fit: fill;
    }
</style>
<div class="bg-white px-2">
    <div class="row mb-3 align-items-center">
        <div class="col-md-6">
            <h2 class="custom-text-primary mt-5">Gallery
            </h2>
        </div>
    </div>
    <section class="feedback ">
        <div class="container ">
            <div class="owl-carousel galleries">
                @foreach ($package->gallery as $gallery)
                    <div class="mx-2">
                            <div class="img_size">
                                    <img src="{{ getImageurl($gallery->image) }}" alt="{{ $gallery->name }}"
                                        class="img-fluid lazy img-fluid">
                            </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>

</div>

@push('scripts')
   <script>
             $('.galleries').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
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
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

   </script>
@endpush
