
<style>
    .user_img {
        width: 90px !important;
        height: 90px !important;
        margin: auto;
        border-radius: 50%;
        margin-bottom: 1rem;

    }

    .user_no_img {
        max-width: 140px !important;
        max-height: 140px !important;
        margin: auto;
        margin-bottom: 1rem;

    }

    .see_more {
        cursor: pointer;
    }

    .modal {
        border-radius: : 0px;

    }




    .testimonial-container {
        background-color: rgb(42, 135, 183);
        color: #fff;
        padding: 30px 40px;
        position: relative;
    }

    .fa-quote {
        color: rgba(255, 255, 255, 0.3);
        font-size: 28px;
        position: absolute;
        top: 70px;
    }

    .fa-quote-right {
        left: 40px;
    }

    .fa-quote-left {
        right: 40px;
    }

    .testimonial {
        line-height: 22px;
        text-align: justify;
    }

    .user {
        text-align: center
    }

    .user .user-image {
        border-radius: 50%;
        height: 75px;
        width: 75px;
        object-fit: cover;
    }

    .user .user-details {
        margin-left: 10px;
    }

    .user .username {
        margin: 0;
    }

    .user .role {
        font-weight: normal;
        margin: 10px 0;
    }

    .progress-bar {
        background-color: #fff;
        height: 2px;
        width: 100%;
        animation: grow 10s linear infinite;
        transform-origin: left;
    }

    @keyframes grow {
        0% {
            transform: scaleX(0);
        }
    }

    @media (max-width: 768px) {
        .testimonial-container {
            padding: 20px 30px;
        }

        .fa-quote {
            display: none;
        }
    }
</style>
<div class="bg-white px-2">
    <div class="row mb-3 align-items-center">
        <div class="col-md-6">
            <h2 class="custom-text-primary mt-5">Traveller's Reviews
            </h2>
        </div>
        <div class="col-md-3 offset-md-3 text-right">
            <a class="btn btn-primary" href="{{ route('testimonials') }}">Write
                Review</a>
        </div>
    </div>
    <section class="feedback ">
        <div class="container ">
            <div class="owl-carousel testimonials">
                @foreach ($reviews as $testimonial)
                    <div class="mx-2">
                        <div class="feedback-box text-center ">
                            <div>
                                @if ($testimonial->image != null)
                                    <img src="{{ getImageurl($testimonial->image) }}" alt="{{ $testimonial->name }}"
                                        class="user_img img-fluid lazy" width="100" height="100">
                                @else
                                    <img src="{{ getFilePath('frontend/user.webp') }}" alt="{{ $testimonial->name }}"
                                        class="user_no_img lazy" width="100" height="100">
                                @endif
                            </div>
                            <p class="=">{!! Str::limit(strip_tags($testimonial->content),100) !!}
                                @if (Str::length($testimonial->content) > 102)
                                    <a href="#" class='see_more custom-text-primary' data-bs-toggle="modal"
                                        data-bs-target="#seemore_modal" data-content="{!! strip_tags($testimonial->content) !!}"
                                        data-name="{{ $testimonial->name }}" data-bs-target="{{ $testimonial->rating }}">See
                                        more</a>
                                @endif

                            </p>
                            <div class="client-name custom-text-primary">
                                <i class="fas fa-quote-right custom-text-primary"></i>
                                <p class="my-0 py-0 custom-fw-700 custom-fs-25 custom-text-primary">

                                    {{ $testimonial->name }}
                                </p>

                            </div>

                        </div>
                    </div>
                @endforeach


            </div>

            <div class="text-center mt-3">
                <a class="btn btn-primary" href="{{ route('testimonials') }}">All
                    Review</a>
            </div>
        </div>
    </section>

</div>

<!-- Modal -->
<div class="modal fade " id="seemore_modal" tabindex="-1" aria-labelledby="seemore_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-gray">
            <div class="modal-header" style="background:#f9fafb;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="testimonial-container">
                <div class="progress-bar"></div>
                <div class="fas fa-quote-right fa-quote"></div>
                <div class="fas fa-quote-left fa-quote"></div>
                <p class="testimonia see_more_data">

                </p>
                <div class="user">
                    <img src="{{ getFilePath('frontend/user.png') }}" alt="user" class="user-image" />
                    <div class="user-details ">
                        <h4 class="username"></h4>
                        <p class="role"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
   <script>
             $('.testimonials').owlCarousel({
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
                items: 2
            }
        }
    });
        $(document).ready(function() {

            $('.see_more').click(function() {
                $('.see_more_data').html('')
                let content = $(this).data('content');
                let name = $(this).data('name');
                let rating = $(this).data('rating');
                $('.see_more_data').html(content)
                $('.username').html(name)

            })
        });
   </script>
@endpush
