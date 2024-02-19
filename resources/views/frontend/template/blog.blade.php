<style>
    .recent-post img {
        height: 220px !important;
        min-width: 100% !important;
        max-width: 100% !important;

    }
</style>
<section class="recent-post ">
    <div class="container-fluid">
        <div class="heading my-5">
            <p class="custom-fs-36">Recent Posts</p>
        </div>
        @php

            $blogs = Cache::remember('blogs', 604800, function () {
                return DB::table('blogs')
                    ->orderBy('id', 'desc')
                    ->where('post_status', 'publish')
                    ->limit(3)
                    ->get();
            });
        @endphp

        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-4 col-sm-12  my-2">
                    <div class="post-card-1 card">
                        <a href="{{ route('blog.detail', ['url' => $blog->url]) }}">
                            <div class="img-container">
                                @if ($blog->guid != null)
                                    <img data-src="{{ getImageurl($blog->guid) }}" class="img-fluid w-100 lazy"
                                        alt="{{ $blog->post_title }}" width="200" height="200">
                                @else
                                    <img src="{{ getImageurl('frontend/assets/recent-post.png') }}"
                                        alt="{{ $blog->post_title }}" class="img-fluid" alt="{{ $blog->post_title }}"
                                        width="100%" height="100%">
                                @endif
                                <div class="date">
                                    <span>
                                        {{ carbon\carbon::parse($blog->post_date)->format('d') }}
                                    </span>
                                    {{ carbon\carbon::parse($blog->post_date)->format('M Y') }}

                                </div>
                            </div>
                            <div class="px-2">

                                <div class="img-desc">
                                    <p class="custom-fs-19 text-dark custom-fs-700">
                                        {{ Str::limit($blog->post_title, 40) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

            <div class="col-12 mt-4">
                <a class="btn btn-primary" href="{{ route('blog') }}">
                    Read More
                </a>
            </div>
        </div>
    </div>
</section>
