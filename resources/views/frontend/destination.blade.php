@extends('frontend.layout.master')
@section('title')
Destination in {{Request::segment(3)}} | Nepal Vision Treks & Expedition

@endsection
@section('descr')
Visit the beautiful destinations in Nepal, the home of the Himalayas, culture, and natural beauties.
@endsection
@section('keyword')
Destination
@endsection

@section('url')
{{Request::url()}}
@endsection
@php
    define('PAGE','destination')
@endphp
@section('content')
<main>
    @if ($data->name=='Bhutan')
    <x-page-header :title="$data->name" :route="route('destination',['id'=>$data->id,'url'=>$data->url])"  :img="asset('Destination_Bhutan.jpg')"/>
    @endif
    
    @if ($data->name=='India')
    <x-page-header :title="$data->name" :route="route('destination',['id'=>$data->id,'url'=>$data->url])"  :img="asset('Destination_India.jpg')"/>
        @endif

    @if ($data->name=='Luxury Trips')
    <x-page-header :title="$data->name" :route="route('destination',['id'=>$data->id,'url'=>$data->url])"  :img="asset('Destination_LuxuryTrip.jpg')"/>
    @endif

    @if ($data->name=='Tibet')
    <x-page-header :title="$data->name" :route="route('destination',['id'=>$data->id,'url'=>$data->url])"  :img="asset('Destination_Tibet.jpg')"/>
      @endif

      @if ($data->name=='Nepal')
    <x-page-header :title="$data->name" :route="route('destination',['id'=>$data->id,'url'=>$data->url])"  />
      @endif




    <section class="best-place-destination">
        <div class="container">
            {{-- <div class="col-12">
                <p>
                    {!! $data->details!!}
                </p>
            </div> --}}
            <div class="heading ">
                <h2>
                    Best Category
                </h2>
            </div>
            <div class="row ">
                @foreach ($categories as $destination)
                   
                <div class="col-lg-3 col-sm-6 my-2 ">
                    <a href="{{ route('package.category',['url'=>$destination->url]) }}" class="text-decoration-none card ">
                    <div class="card-style-1 ">
              

                        <div class="img ">
                        
                            @if ($destination->image==null)
                            <img src="{{ asset('frontend/assets/tour-1.png')}}" alt="{{$destination->name  }}" class="img-fluid w-100 w-100">
                            @else 
                            <img src="{{ asset($destination->image)}}" alt="{{$destination->name  }}" class="img-fluid w-100">
                            @endif
                           
                            <div class="places">
                                @php
                                    $place=DB::table('packages')->where('category_destination_id',$destination->id)->where('price','!=',0)->where('status',1)->get()->count();

                                @endphp
                                {{ $place }} Places
                            </div>
                        </div>
                        
                    </div>
            <div class="card-body">
                <div class="place-name custom-fs-25 text-dark custom-fw-700 text-center ">
                    {{Str::limit($destination->name,18) }}
                </div>
            </div>
                </a>

                </div>
                @endforeach
            
            </div>
        </div>
    </section>
  
    <section class="tour-packages ">
        <div class="container">
            <div class="heading mt-md-5 mt-2">
                <h2>Tour Packages</h2>
            </div>
            <div class="row">
                    @foreach ($packages as $package)
                    <div class="col-lg-3 col-sm-6 ">
                        <a href="{{ route('package.detail',['url'=>$package->url]) }}" class="text-decoration-none">

                            <div class="card-style-2 ">
                                <div class="img-container">
                              
                        @if ($package->banner==null)
                        <img src="{{ asset('frontend/assets/tour-1.png')}}" alt="{{$package->name  }}" class="img-fluid w-100 w-100">
                        @else 
                        <img src="{{ asset($package->banner)}}" alt="{{$package->name  }}" class="img-fluid w-100">
                        @endif
                                </div>
                                <div class="img-desc">
                                    <div class="about-img row">
                                        <div class="col-12">
                                           <p class="px-0 mx-0">
                                            @if (!empty($package->duration))
                                            {{ $package->duration }} |
                                            @endif
                                            @if (!empty($package->activity))
                                          {{ Str::limit($package->activity,38) }}
                                                
                                            @endif
                                               </p> 
            
                                    </div>
                                    <div class="col-6 ">
            
                                        <div class="rating">
                                            @for ($i=1;$i<=$package->rating;$i++)
                                            <i class="fas fa-star text-warning"></i>
                                            @endfor
                                            @for ($i=1;$i<=5-$package->rating;$i++)
                                            <i class="far fa-star text-gray"></i>
                                            @endfor
                                         
                                        </div>
                                    </div>
                                    <div class="col-6">
                                    <span class="custom-fs-18 custom-fw-600 custom-text-primary">
                                        $USD {{ $package->price }}
            
                                    </span>
                                    </div>
                                    </div>
                                    <div class="title mt-1 custom-fs-18">
                                        {{ $package->name }}
                                    </div>
                                    
                                </div>
                            </div>
                     </a>
                        </div>
                    @endforeach
                    <div class="my-2 py-4"></div>
              
            </div>
        </div>
    </section>
    
   
</main>
@endsection