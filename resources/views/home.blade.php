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
				<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('img/full-width/c/hangers.jpg')}}" data-saveperformance="off" data-title="">
					<!-- MAIN IMAGE -->
					<img src="{{asset('img/full-width/c/hangers.jpg')}}" alt="Welcome to Influence" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<div class="tp-caption s-title-v2 customin stt  tp-resizeme" data-x="center" data-y="150" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1100" data-easing="Power4.easeOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endeasing="Power4.easeIn" data-endspeed="500" style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">Welcome to Zion Fashion
					</div>
					<div class="tp-caption s-subtitle-v2 customin stt tp-resizeme" data-x="center" data-y="230" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:1;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;" data-speed="1000" data-start="2600" data-easing="Power4.easeOut" data-splitin="words" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endeasing="Power4.easeIn" data-endspeed="600" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">The online fashion store
					</div>
				</li>
				<!-- SLIDE 2 -->
				<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('img/full-width/e/clips.jpg')}}" data-saveperformance="off" data-title="">
					<!-- MAIN IMAGE -->
					<img src="{{asset('img/plugins/slider-revolution/dummy.png')}}" data-lazyload="{{asset('img/full-width/e/clips.jpg')}}" alt="Influence bootstrap theme" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
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
				</div>
				<div id="grid-container" class="cbp-l-grid-work cbp-animation-quicksand">
				
					@foreach ($arrProducts as $product)
						 <div class="cbp-item {{$product['type']}}">
							<a href="{{$product['link']}}" class="cbp-caption" target='_blank'>
								<div class="cbp-caption-defaultWrap">
									<img class="img-portfolio" src="{{$product['image_small']}}" alt="">
								</div>
								<div class="cbp-caption-activeWrap"></div>
							</a>
							<a href="{{$product['link']}}" class="cbp-l-grid-work-title" target='_blank'>{{$product['name']}}</a>
							<div class="cbp-l-grid-work-desc">{{$product['type_full']}}</div>
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
									<p class="text-block">We Have good business Interaction With Manufactures In So We Are Quite Flexible And Confident To Do Any Kind Of Garments. We Can Handle any kind of quantity Easily. Most Of The Factories We Work With Are Approved From Renowned Customers.</p>
									<p class="text-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
					<p class="text-block">We want and do for you the best template what will be ever exist. Our filisofy depend on perfect design and using the products for you, our customers. We don't care about it how many we will sell, we think hard about every detail of our product and we want it to be perfect.</p>
				</div>
				<div class="col-md-6">
					<h2 class="text-primary">Our goals</h2>
					<p class="text-block">Start with our product wasn't easy but we took from that times many oportunities and got new experiences. Which we now really need for our big goals. We plan get into world market and sell it to everyone. In this time we will big company well-know brand and our products will make world better.</p>
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
							<p class="text-block">If you have any questiong about our products or something else, please email us or call us. We"ll get in touch with you as soon as possible.</p>
						</li>
						<li>
							<h3>Our Location</h3>
							<p class="text-block">Mumbai, Maharashtra, India</p>
						</li>
						<li>
							<h3>Email Us</h3>
							<p class="text-block">
								<a target="_blank" href="mailto:support@bootstrapart.net">support@zionfashions.net</a>
							</p>
						</li>
					</ul>
				</div>
				<div class="space visible-xs"></div>
				<div class="col-lg-offset-1 col-lg-7 col-sm-6">
					<!--FORM STRUCTURE STARTS HERE-->
					<div id="form">
						<form id="easy" name="contact" method="post" action="" onsubmit="return checkform()">
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
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
