<div>
    <section class="hero2">
        @if (empty($img))
            
        <img src="{{ asset('frontend/assets/hero4.png')}}" alt="cover image">
            @else  
        <img src="{{ $img }}" alt="cover image">

        @endif
        <div class="container">
            <div class="hero-text">
                <h1>{{ $title }}</h1>
                <p>
                    <a href="{{ route('/') }}">Home  </a> >
                    @if (!empty($before))
                        
                  
                     <a href="{{ $beforeroute }}">{{ $before }}</a> >
                        
                    @endif
                     <a href="{{ $route }}">{{ $title }}</a>
                </p>
            </div>
        </div>
    </section>
</div>