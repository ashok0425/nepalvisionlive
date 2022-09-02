<nav class="navbar navbar-expand-lg navbar-light bg-light  shadow d-block d-md-none">
    <div class="container-fluid">
 
<div class="d-md-none d-block w-100">
      <div class="d-flex w-100 justify-content-between  py-2">
        <a href="{{ route('/') }}" class="">
            <img src="{{ asset($website->image) }}" alt="Logo" class="img-fluid   w-50">
        </a>
  
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
            <div class="hamburger-toggle">
              <div class="hamburger">
                <i class="fas fa-bars"></i>
              </div>
            </div>
          </button>
      
    </div>
  </div>
      <div class="collapse navbar-collapse" id="navbar-content">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            @foreach ($destinations as $destination)

            @if ($destination->id!=12)
                
                @php
                    $categories = DB::table('categories_destinations')
                        ->where('status', 1)
                        ->orderBy('order', 'asc')
                        ->where('destination_id', $destination->id)
                        ->get();
                @endphp
              <li class="dropend">
                    <i class="fas fa-caret"></i>
                <a href="{{ route('destination', ['url' => $destination->url]) }}" class="dropdown-item " data-bs-toggle="dropdown" data-bs-auto-close="outside">{{$destination->name}} <i class="fas fa-chevron-right"></i></a>

                    @if (count($categories)>0)
                        
                <ul class="dropdown-menu ">
                    @foreach ($categories as $category)
                    @php
                    $packages = DB::table('packages')
                        ->where('status', 1)
                        ->where('destination_id', $destination->id)
                        ->where('category_destination_id', $category->id)
->limit(6)
                        ->get();
@endphp
                  <li class="dropend">
                    <a href="{{ route('package.category', ['url' => $category->url]) }}" class="dropdown-item " data-bs-toggle="dropdown">{{$category->name}}
                        <i class="fas fa-chevron-right"></i></a>
                    </a>

                    @if (count($packages))
                        
                    <ul class="dropdown-menu dropdown-submenu ">
                        @foreach ($packages as $package)
                            
                      <li><a class="dropdown-item" href="{{route('package.detail',['url'=>$package->url])}}">{{$package->name}}</a></li>
                      @endforeach
               
                    </ul>
                    @endif

                  </li>
                    @endforeach
                  
                 
                </ul>
                @endif

              </li>

@endif

              @endforeach

              <li><a class="dropdown-item" href="{{ route('cms.page', ['page' => 'about-us']) }}">About</a></li>
              <li><a class="dropdown-item" href="{{route('blog')}}">Blog</a></li>
              
              <li><a class="dropdown-item" href="{{route('contactus')}}">Contact</a></li>
            </ul>
         
          
      </div>
    </div>
  </nav>