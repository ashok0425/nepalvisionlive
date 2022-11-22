@php
    $packages = Cache::remember('tour_packages', 604800, function()
{
    return DB::table('packages')->where('category_destination_id',13)->where('status',1)->where('banner','!=',null)->where('duration','!=',null)->where('activity','!=',null)->where('discounted_price',null)->inRandomOrder()->limit(6)->get();
})
@endphp
<section class="tour-packages">
    <div class="container">
        <div class="heading mt-5">
            <h2>Expedition Packages</h2>
        </div>
        <div class="owl-carousel allpackages ">
            @foreach ($packages as $package)
            <div class="mx-2">

            @include('frontend.template.card1',['package'=>$package])
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