@extends('frontend.layout.master')
@section('title')
{{$data->name}} | Nepal Vision Treks & Expedition
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
    <x-page-header :title="$data->name" :route="route('destination',['id'=>$data->id,'url'=>$data->url])"  />  
    <section class="tour-packages ">
        <div class="container">
       
            {{-- search  --}}

            <form action="abc" method="post" id="filter_package">
                <div class="row">
                    
                    <div class="col-md-12 col-sm-12">
                        <div class="card px-2 py-2">
                        <div class="row">
                         
                            <div class="col-6 col-md-3 my-1">
                                <input type="number"  class="form-control"  id="from" placeholder="Price From" autocomplete="off" min="1">
                            </div>
                            <div class="col-md-3 col-6 my-1">
                                <input type="number"  class="form-control"  id="to" placeholder="Price  To" autocomplete="off" min="1">

                            </div>

                            <div class="col-md-3 col-6 my-1">
                                <input type="text"  class="form-control"  id="name" placeholder="Package name" autocomplete="off" >

                            </div>
                            <div class="col-md-3 col-6 my-1">
                                <input class="btn btn-primary btn-block d-block w-100"  type="submit" value="Search">
                                  </div>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
            



            <div class="row" id="package_data">
                    @foreach ($packages as $package)
                    <div class="col-lg-3 col-sm-6 ">
                            <div class="card-style-2 ">
                                <a href="{{ route('package.detail',['url'=>$package->url]) }}" class="text-decoration-none">
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
                                        US ${{ $package->price }}
            
                                    </span>
                                    </div>
                                    </div>
                                    <div class="title mt-1 custom-fs-18">
                                        {{ $package->name }}
                                    </div>
                                    
                                </div>
                     </a>
                            </div>
                        </div>
                    @endforeach
                    <div class="my-2 py-4">
                       <div class="row">
                           <div class="col-md-4 offset-md-8">
                            {{ $packages->links() }}
                           </div>
                       </div>
                    </div>
              
            </div>
        </div>
    </section>
    
   
</main>
@endsection



@push('scripts')
    
<script>
    async function Filterpackage(from,to,name){
        let token=$("meta[name='csrf-token']").attr('content')
       let data={
           from:from,
           to:to,
           name:name,
           _token:token,

       }

        let url=`{{ route('filter_package') }}`
        $('#package_data').html('');

$.ajax({
    url:url,
    type:'GET',
    data:data,
    success:function(res){
        $('#package_data').html(res);
    }
})
    }

    $('#filter_package').submit(function(e){
        e.preventDefault()
        let from=$('#from').val()
        let to=$('#to').val()
        let name=$('#name').val()

        Filterpackage(from,to,name)
    })
</script>
@endpush