@php
    $packages = Cache::remember('top_packages', 604800, function()
{
    return DB::table('packages')->orderBy('rating','desc')->where('status',1)->where('banner','!=',null)->where('duration','!=',null)->where('rating','!=',null)->where('activity','!=',null)->limit(6)->get();
});
@endphp
<section class="tour-packages">
    <div class="container-fluid">
        <div class="heading mt-5">
            <p class="custom-fs-36">Top Rated Packages</p>
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
