@php
    $faqs=App\Models\Faq::with('package')->where('show_on_home_page',1)->latest()->get();
@endphp
<div class="container">
    <div class="heading my-5">
        <p class="custom-fs-36">Frequently Asked Question's</p>
    </div>
    <div class="accordion bg-transparent" id="accordionExample">
        @foreach ($faqs as $key => $faq)
                <div class="accordion-item mb-1">
                        <h2 class="accordion-header"
                            id="heading{{ $key}}">
                            <button class="accordion-button" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $key }}"
                                aria-expanded="true"
                                aria-controls="collapse{{ $key}}">
                                {!! strip_tags($faq->question) !!}
                            </button>
                        </h2>
                        <div id="collapse{{ $key }}"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading{{ $key }}"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body m-0  bg-transparent">
                                {!! strip_tags($faq->answer) !!}
                            </div>
                        </div>
                </div>
        @endforeach
    </div>

</div>