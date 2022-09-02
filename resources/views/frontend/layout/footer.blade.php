

<footer>
    {{-- https://www.figma.com/file/AooxbPw11smLpkqBr6iaYi/Nepal-Vision-T%26E?node-id=0%3A1 --}}
    <div class="container">
        <div class="main-footer">
            <div class="row">
                <div class="col-md-3 col-sm-6 d-none d-md-block">
                   
                    <img src="{{ asset('frontend/assets/footer-img.webp')}}" alt="logo" class="img-fluid" height="250px" width="250px">
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-title custom-text-primary">
                        About Us
                    </div>
                    <ul>
                        @php
                            $children=DB::table('cms')->where('parent_id',1)->where('status',1)->get();
                            $term=DB::table('cms')->where('id',38)->first();
                        @endphp
                      @foreach ($children as $child)
                      @if ($child->url!='our-affiliations')
                      <li><a  rel="noreferrer"  target="_blank"  href="{{ route('cms.detail',['page'=>1,'id'=>$child->url]) }}" class="text-decoration-none text-light">{{ $child->title }}</a></li>  
                      @endif
                        
                      @endforeach

                      <li><a  rel="noreferrer"  target="_blank"  href="{{ route('cms.page', ['page' => $term->url]) }}" class="text-decoration-none text-light">Term & Conditions</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-title custom-text-primary">
                        Things to know
                    </div>
                    <ul>
                        @php
                            $children=DB::table('cms')->where('parent_id',15)->limit(6)->where('status',1)->get();
                        @endphp
                      @foreach ($children as $child)
                          <li><a  rel="noreferrer"  target="_blank"  href="{{ route('cms.detail',['page'=>15,'id'=>$child->url]) }}" class="text-decoration-none text-light">{{ $child->title }}</a></li>
                      @endforeach
                    </ul>
                </div>
               
                <div class="col-md-3 col-sm-6">
                    <div class="footer-title custom-text-primary">Pay Safe With US</div>
                    <div class="payment-methods d-flex">
                        <i class="fab fa-paypal"></i> <i class="fab fa-cc-visa"></i> <i
                            class="fab fa-cc-mastercard"></i>
                    </div>
                    <p>We use secured 256-bit
                        encription while making
                        Payment.</p>
                </div>
            </div>
         <div class="row mt-1 mt-md-5">
             <div class="col-md-3 offset-md-3  text-left">
                <div class="footer-title custom-text-primary">
                    Head office (Nepal)
                </div>
                    <ul>
                        <li>
                            Bhagwan Bahal, Thamel

                        </li>
                        <li>
                        Phone: <a  rel="noreferrer"  target="_blank"  href="tel:977-1-4524762" class="text-white text-decoration-none">977-1-4524762</a>

                        </li>
                        <li>
                    Fax:  977-1-4523296

                        </li>
                        <li>
                            Email:
                        </li>
                        <li>
                            <a  rel="noreferrer"  target="_blank"  href="mailto:info@nepalvisiontreks.com" class="text-white text-decoration-none">
                                info@nepalvisiontreks.com
                                </a>
                            

                        </li>
                        <li>
                            <a  rel="noreferrer"  target="_blank"  href="mailto:sales@nepalvisiontreks.com
                            " class="text-white text-decoration-none">
                                sales@nepalvisiontreks.com

                                </a>

                        </li>
                    </ul>

             </div>

             <div class="col-md-3   text-left">
                <div class="footer-title custom-text-primary">
                    USA Contact Office
                </div>
                    <ul>
                        <li>
                            Washington, DC, USA

                        </li>
                        <li>
                            Phone:<a  rel="noreferrer"  target="_blank"  href="tel:+1 202-368-6657" class="text-white text-decoration-none"> +1 202-368-6657</a>


                        </li>
                        <li>
                            Parashu Nepal
                           

                        </li>
                        <li>
                            Marketing Director
                        </li>
                        <li>
                            Email:


                        </li>
                        <li>
                            <a  rel="noreferrer"  target="_blank"  href="mailto:parashu@nepalvisiontreks.com" class="text-white text-decoration-none">
                            parashu@nepalvisiontreks.com
                            </a>

                        </li>
                    </ul>

             </div>





             <div class="col-md-3  text-left">
                <div class="footer-title custom-text-primary">
                    Australia  Branch Office
                </div>
                    <ul>
                        <li>
                            Sydney, Australia
                        </li>
                        <li>
                            Phone: <a  rel="noreferrer"  target="_blank"  href="tel:+61 426 730 548" class="text-white text-decoration-none"> +61 426 730 548</a>
                        </li>
                        <li>
                            Ashim Wagle
                        </li>
                        <li>
                            Marketing Director

                        </li>
                        <li>
                            Email:
                        </li>
                        <li>
                            <a  rel="noreferrer"  target="_blank"  href="mailto:ashim@nepalvisiontreks.com" class="text-white text-decoration-none">
                                ashim@nepalvisiontreks.com
                            </a>

                        </li>
                      
                    </ul>

                </div>







         </div>
        </div>
@php
    $website=DB::table('websites')->first();
@endphp
        <div class="bottom-footer d-flex justify-content-between flex-column flex-md-row">
            <p>Copyright  © {{ date('Y') }} NepalVisionTreks. All right Reserved</p>
            <p>Follow Us : <a  rel="noreferrer"  target="_blank"  href="{{ $website->facebook }}" class="text-white text-decoration-none"><img src="{{ asset('facebook.webp') }}" alt="facebook" width="20px" height="20px"></a> | <a  rel="noreferrer"  target="_blank"  href="{{ $website->instagram }}" class="text-white text-decoration-none"> <img src="{{ asset('insta.webp') }}" alt="insta" width="20px" height="20px"> </a>  |<a  rel="noreferrer"  target="_blank"  href="{{ $website->youtube }}" class="text-white text-decoration-none"><img src="{{ asset('trip.webp') }}" alt="tripadvisior" width="40px" height="40px"> </a></p>
        </div>
    </div>
</footer>


{{-- <div class="whatsapp-link d-md-none">
	<span>
		<a  rel="noreferrer"  target="_blank"  href="https://api.whatsapp.com/send?phone=9779851189771"><i class="fab fa-whatsapp"></i></a>
	</span>
</div> --}}
<style>
	.whatsapp-link{
		position:fixed;
		bottom:1rem;
		left:1rem;
	}
	.whatsapp-link span{
		width:36px;
		height:36px;
		font-size:38px;
		background:green;
		border-radius:100%;
		display: block;
		color:white;
		position: relative;
	}
	.whatsapp-link a{
		color:white;
		position:absolute;
		display: block;
		top:-10px;
		left:3px;
		height:100%;
		width:100%;
	}
</style>