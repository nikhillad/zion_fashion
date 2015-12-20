@extends('main')

@section('title')
Zion Fashion
@endsection

@section('content')
<!-- SLIDESHOW -->
	<span class="breakPoint" id="sTop"></span>
	<div class="tp-banner-container">
		<div class="tp-banner">
			<ul>
				<!-- SLIDE 1 -->
				<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('img/full-width/a/1.jpg')}}" data-saveperformance="off" data-title="">
					<!-- MAIN IMAGE -->
					<img src="{{asset('img/full-width/a/1.jpg')}}" alt="Welcome to Zion Fashion" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<div class="tp-caption s-title-v2 customin stt  tp-resizeme" data-x="center" data-y="150" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1100" data-easing="Power4.easeOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endeasing="Power4.easeIn" data-endspeed="500" style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">Welcome to Zion Fashion
					</div>
					<div style="font-weight:bold" class="tp-caption s-subtitle-v2 customin stt tp-resizeme" data-x="center" data-y="230" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:1;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;" data-speed="1000" data-start="2600" data-easing="Power4.easeOut" data-splitin="words" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endeasing="Power4.easeIn" data-endspeed="600" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">"Our Vision - Best quality products for customer delight in India and across the globe." 
					</div>
				</li>
				
				<!-- SLIDE 2 -->
				<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('img/full-width/b/2.jpg')}}" data-saveperformance="off" data-title="">
					<!-- MAIN IMAGE -->
					<img src="{{asset('img/plugins/slider-revolution/dummy.png')}}" data-lazyload="{{asset('img/full-width/b/2.jpg')}}" alt="Welcome to Zion Fashion" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<div class="tp-caption s-title customin stt tp-resizeme" data-x="700" data-y="278" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1500" data-start="1100" data-easing="Power4.easeOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="500" data-endeasing="Power4.easeIn" style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">Products
					</div>
					<div class="tp-caption s-title customin stt tp-resizeme" data-x="870" data-y="278" data-hoffset="100" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1500" data-start="1800" data-easing="Power4.easeOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="550" data-endeasing="Power4.easeIn" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
					</div>
					<div class="tp-caption s-subtitle s-dark customin stt tp-resizeme" data-x="700" data-y="360" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-speed="1500" data-start="2100" data-easing="Power4.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="600" data-endeasing="Power4.easeIn" style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">KNIT WEAR
					</div>
					<div class="tp-caption s-subtitle s-dark customin stt tp-resizeme" data-x="700" data-y="405" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-speed="1500" data-start="2400" data-easing="Power4.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="700" data-endeasing="Power4.easeIn" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">WOVEN WEAR
					</div>
					<div class="tp-caption s-subtitle s-dark customin stt tp-resizeme" data-x="700" data-y="450" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-speed="1500" data-start="2700" data-easing="Power4.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="800" data-endeasing="Power4.easeIn" style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">HOME TEXTILE
					</div>
					<div class="tp-caption s-subtitle s-dark customin stt tp-resizeme" data-x="700" data-y="495" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-speed="1500" data-start="3000" data-easing="Power4.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="900" data-endeasing="Power4.easeIn" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">SWEATER
					</div>
					<div class="tp-caption s-subtitle s-dark customin stt tp-resizeme" data-x="700" data-y="540" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-speed="1500" data-start="3300" data-easing="Power4.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">LEATHER PRODUCT
					</div>
				</li>

				<!-- SLIDE 3 -->
				<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('img/full-width/c/3.jpg')}}" data-saveperformance="off" data-title="">
					<!-- MAIN IMAGE -->
					<img src="{{asset('img/plugins/slider-revolution/dummy.png')}}" data-lazyload="{{asset('img/full-width/c/3.jpg')}}" alt="Welcome to Zion Fashion" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<div style="color:black;font-weight:bold" class="tp-caption s-subtitle-v2 customin stt tp-resizeme" data-x="100" data-y="278" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-speed="1500" data-start="1100" data-easing="Power4.easeOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.03" data-endelementdelay="0.1" data-endspeed="500" data-endeasing="Power4.easeIn" style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">We have the widest network of manufacturer,
					</div>
					<div style="color:black;font-weight:bold" class="tp-caption s-subtitle-v2 customin stt tp-resizeme" data-x="100" data-y="323" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-speed="1500" data-start="1500" data-easing="Power4.easeOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.03" data-endelementdelay="0.1" data-endspeed="500" data-endeasing="Power4.easeIn" style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">designers and have strong specialization in 
					</div>
					<div style="color:black;font-weight:bold" class="tp-caption s-subtitle-v2 customin stt tp-resizeme" data-x="100" data-y="368" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-speed="1500" data-start="1900" data-easing="Power4.easeOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.03" data-endelementdelay="0.1" data-endspeed="500" data-endeasing="Power4.easeIn" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">men's, women's and childrens wear.
					</div>
				</li>
				<!-- TIMER -->
				<div class="tp-bannertimer tp-bottom"></div>
			</ul>
		</div>
	</div>
	<!-- /SLIDESHOW -->
	
	
	 <!-- PRODUCTS SECTION -->
	<span class="breakPoint" id="s3"></span>
	<div class="bg-dark section-xlg">
		<div class="container">
			<h2 class="lg-title">Products</h2>
			<div class="cbp-panel">
				<div id="filters-container" class="cbp-l-filters-work filter-tabs">
					<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">SHOW ALL
					</div>
					<div data-filter=".knit_wear" class="cbp-filter-item">KNIT WEAR
						<div class="cbp-filter-counter"></div>
					</div>
					<div data-filter=".woven_wear" class="cbp-filter-item">WOVEN WEAR
						<div class="cbp-filter-counter"></div>
					</div>
					<div data-filter=".home_textile" class="cbp-filter-item">HOME TEXTILE
						<div class="cbp-filter-counter"></div>
					</div>
					<div data-filter=".sweater" class="cbp-filter-item">SWEATER
						<div class="cbp-filter-counter"></div>
					</div>
					<div data-filter=".leather_product" class="cbp-filter-item">LEATHER PRODUCT
						<div class="cbp-filter-counter"></div>
					</div>
				</div>
				<div id="grid-container" class="cbp-l-grid-work cbp-animation-quicksand">
				
					@foreach ($arrProducts as $product)
						 <div class="cbp-item {{$product['type']}}">
							<a href="{{URL::asset('img/products/'.$product['type'].'/'.$product['filename'])}}" class="cbp-caption group1" target='_blank'>
								<div class="cbp-caption-defaultWrap">
									<img class="img-portfolio" src="{{URL::asset('img/products/'.$product['type'].'/'.$product['filename'])}}" alt="">
								</div>
								<div class="cbp-caption-activeWrap"></div>
							</a>
							<a href="{{URL::asset('img/products/'.$product['type'].'/'.$product['filename'])}}" class="group1 cbp-l-grid-work-title" target='_blank'>{{$product['type_full']}}</a>
							<!-- <div class="cbp-l-grid-work-desc">{{$product['type_full']}}</div> -->
						</div>
					@endforeach
					
				</div>
				<div class="space"></div>
			   
			</div>
		</div>
	</div>
	<!-- /PRODUCTS SECTION -->
		
	 <!-- FEATURES SECTION -->
	<span class="breakPoint" id="s1"></span>
	<div class="bg-grey">
		<!-- Tab panes -->
		<div class="tab-content" id="features">
			<div class="tab-pane active in" id="responsive">
				<div class="section">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="">
									<h2 class="lg-title">Service</h2>
									<h2 class="text-primary"><i class="fa fa-cube ul-right-indent text-grey"></i>Sourcing Agent</h2>
									<p class="text-block">We work with garment manufacturers in India having excellent expertise in providing best quality garments at very competitive prices. If our sourcing is from an appropriate source, the end product would also be as per our aspirations. We have strong roots penetrated all over for effective sourcing, covering all the product categories for all segments of international market. We make sure product developed is according to buyer’s requirement in best of the quality within stipulated date. </p>
									
									<hr>

									<h2 class="text-primary"><i class="fa fa-cube ul-right-indent text-grey"></i>Zion Advantage</h2>
									<p class="text-block">We believe in partnering with our clients and work dedicatedly as a team rather than just a vendor. </p>
									<p class="text-block">We help with fabric sourcing and selecting, sampling, quality control, shipping etc.</p>
									<p class="text-block">The manufacturers we work with are well equipped and comply with the latest industry standards with respect to quality and export regulations.</p>
									<p class="text-block">Our product range is the widest and we are dedicated to maintain the best standards.</p>

									<hr>

									<h2 class="text-primary"><i class="fa fa-cube ul-right-indent text-grey"></i>Customized Product</h2>
									<p class="text-block">Our product range majorly covers Knitted wear, Woven wear, Winter wear, Home Textiles etc.</p>
									<p class="text-block">We offer personalized set of products to our customers with a special focus short notice designs request, consultation to experts on demand etc. As we have excellent designer team and helps in complete product development.</p>
									<p class="text-block">We believe in customer ecosystem to be business network that help customers to get things done – both the things that they want to receive and that they want to manage.</p>
									<p class="text-block">We further help in design and pattern work for apparel and ready-made textile for a company e.g. embroidery and print logo to be placed on T-Shirts. </p>

									<hr>

									<h2 class="text-primary"><i class="fa fa-cube ul-right-indent text-grey"></i>Bulk Order</h2>
									<p class="text-block">We invest heavily in building a strong supply chain infrastructure and meeting bulk order requirement is our top most priority.</p>
									<p class="text-block">We are one stop solution for customized corporate apparels, ready-made textile for companies, colleges, schools and hospitals.</p>
									<p class="text-block">We entertain requests for branded, unbranded, and all type of cloth making requests with very high consistency in quality.</p>
									

									<div class="space visible-xs visible-sm"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /FEATURES SECTION -->
	
	<!-- ABOUT US -->
	<span class="breakPoint" id="s2"></span>
	<div class="section-xlg">
		<div class="container">
			<h2 class="lg-title">About Us</h2>
			<div class="row">
				<div class="col-md-6">
					<h2 class="text-primary">What we believe</h2>
					<p class="text-block">Perfection! We use the best quality material to come with the finest products. Complete detailing in every step right from understanding your needs to the final production stage. Comfort and pleasant experience in our products is what we believe in. </p>
				</div>
				<div class="col-md-6">
					<h2 class="text-primary">Our goals</h2>
					<p class="text-block">We plan to provide you the widest range of options and be your favourite for apparel and textile needs. Perfection in our products and pleasant experience for our customers is what we strive for.</p>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
				<h2 class="text-primary">Products</h2>
				<p class="text-block">We provide the widest product range. These include:</p> 	
				<ul class="text-block list-unstyled">
					<li><i class="fa fa-hand-o-right ul-right-indent"></i> Knitted Garments – T-Shirt, Polo, Henley, Vest, Sports Wear, Jersey.</li>
					<li><i class="fa fa-hand-o-right ul-right-indent"></i> Woven Garments – All Types of Denim Wear, Shirts, Trouser and Shorts.</li>
					<li><i class="fa fa-hand-o-right ul-right-indent"></i> Sweater Knit - Sweatshirt, Hoodies, Cardigan, Turtle Neck, Shrugs and Sweater</li>
					<li><i class="fa fa-hand-o-right ul-right-indent"></i> Specialized in Kid’s Wear</li>
					<li><i class="fa fa-hand-o-right ul-right-indent"></i> Home Textiles - Bed Linen, Table Linen and Kitchen Linen. Cushion Cover, Face Towel, Terry Bath Towel, Baby Set, Bedding Set, Home Curtain, Glove, Kitchen Towel and Floor Mat.</li>
					<li><i class="fa fa-hand-o-right ul-right-indent"></i> Leather Products – Italian Leather Belt and Wallets, 100% Genuine Leather Products, Purse, Leather Bag, Passport Holder, Leather Mobile Cover etc.</li>
				</ul>	
				</div>
			</div>
			<div class="space-lg"></div>
		</div>
	</div>
	<!-- /ABOUT US -->

		
	<!-- CONTACT SECTION -->
	<span class="breakPoint" id="s5"></span>
	<div class="bg-grey section-xlg">
		<div class="container">
			<h2 class="lg-title">Contact</h2>
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<ul class="list-unstyled info-bar">
						<li>
							<h3>Additional info</h3>
							<p class="text-block">Love us? Want to tell how awesome we are? Care for us? Want to help us improve? Give us a shout, we’ll reach you by all possible means.</p>
						</li>
						<li>
							<h3>Our Location</h3>
							<p class="text-block">No. 11, Hotel Kannimara Buildings,</p>
							<p class="text-block">Prabhu Nagar, Kangayam main road, </p>
							<p class="text-block">Tirupur – 641606, TAMILNADU.</p>
						</li>
						<li>
							<h3>Contact Us</h3>
							<p class="text-block">
								<a target="_blank" href="mailto:info@zionfashions.com"><i style="font-size:20px" class="fa fa-envelope"></i> info@zionfashions.com</a>
							</p>
							<p class="text-block"><i style="font-size:20px" class="fa fa-phone"></i> +91 9833782304</p>
							<br>
							<p class="text-block">Facility exist for those who use it, we are available 24x7!</p>
						</li>
					</ul>
				</div>
				<div class="space visible-xs"></div>
				<div class="col-lg-offset-1 col-lg-7 col-sm-6">
					<!--FORM STRUCTURE STARTS HERE-->
					<div id="form">
						<form id="easy" name="contact" method="post" action="{{route('contact_us_submit')}}" onsubmit="return checkform()">
							<!--ERROR/SUCCESS MESSAGE-->
							<div id="error"></div>
							<div id="success">Thank you, your email has been sent.</div>
							<!--NAME INPUT-->
							<div class="form-group icon">
								<div class="control input">
									<input type="text" name="name" id="name" class="form-control" placeholder="Full name">
									<i class="fa fa-user"></i>
								</div>
							</div>
							<!--EMAIL INPUT-->
							<div class="form-group icon">
								<div class="control input last">
									<input type="text" name="email" class="form-control" id="email" placeholder="Your email">
									<i class="fa fa-envelope"></i>
								</div>
							</div>
							<!--MESSAGE INPUT-->
							<div class="form-group icon">
								<div class="control input textarea">
									<textarea name="message" id="message" class="form-control" rows="9" placeholder="Your message"></textarea>
									<i class="fa fa-comment"></i>
								</div>
							</div>
							<!--VERIFICATION AREA-->
							<div class="row">
								<div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 p-no-right text-center">
									<img id="vimage" src="{{asset('php/EasyForm/captcha.png')}}" alt="Verification code">
								</div>
								<div class="col-lg-4 col-md-5 col-sm-6 col-xs-8 p-no-left">
									<div class="form-group icon">
										<div class="control">
											<a href="#" onclick="document.getElementById(&apos;vimage&apos;).src = &apos;{{asset('php/EasyForm/image.php')}}?&apos; + Math.random(); return false">
												<i class="fa fa-refresh"></i>
											</a>
											<input type="text" name="verify" id="verify" class="form-control" placeholder="Enter the key" title="This confirms you are a human user and not a spam-bot.">
										</div>
									</div>
								</div>
							</div>
							<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
							<div class="form-group icon">
								<button type="submit" class="btn btn-primary btn-xlg" id="send_message">
									<i class="fa fa-paper-plane-o"></i>Send message</button>
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
					<!--FORM STRUCTURE ENDS HERE-->
				</div>
			</div>
		</div>
	</div>
	<!-- /CONTACT SECTION -->
	
@endsection
