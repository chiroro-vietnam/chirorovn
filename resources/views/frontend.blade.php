<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>{{@$setting->title}}</title>
	<meta name="Keywords" content="{{@$setting->meta_key}}">
	<meta name="Description" content="{{@$setting->meta_desc}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<link href="{{asset("frontend/common/css/import.css")}}" rel="stylesheet" type="text/css" media="all" />

	<script src="{{asset('/frontend/common/js/jquery.min.js')}}"></script>
	<script src="{{asset('/frontend/common/js/jquery.bxslider.min.js')}}"></script>
	<script src="{{asset('/frontend/common/js/jquery.rollover.js')}}"></script>
	<script src="{{asset('/frontend/common/js/jquery.flatheights.js')}}"></script>
	<script src="{{asset('/frontend/common/js/top.js')}}"></script>
	<script src="{{asset('/frontend/common/js/analytics.js')}}"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-65671287-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<script src="{{asset('/frontend/common/js/telemetry.js')}}"></script>
	<script src="{{asset('/frontend/common/js/menu_handler.js')}}"></script>

</head>
<body>
	<?php $locale = LaravelLocalization::getCurrentLocale();?>
	@include('frontend/element/header')
	<ul class="bxslider" id="home">
		<li class="first"><img src="{{asset('/frontend/common/image/top-img7.jpg')}}" alt=""></li>
		<li><img src="{{asset('/frontend/common/image/top-img8.jpg')}}" alt=""></li>
	</ul>
	<!-- Start services section -->
		<?php $service = 'frontend/element/locale/'.$locale.'/service';?>
		@include($service)
	<!-- End services section -->
	<!-- Start blog section -->

<section id="portfolio">
	<div class="container">
		<header>
			<h2 style="visibility: visible; animation-name: fadeInDown;" class="wow fadeInDown animated">{{trans('common.lbl_template_title')}}</h2>
		</header>
	</div>
	<div class="template">
		<ul class="bxslider2">
			<li class="first"><img src="{{asset('frontend/common/image/img1-1-template.png')}}" class="img-responsive" alt=""></li>
			<li><img src="{{asset('frontend/common/image/img2-2-template.png')}}" class="img-responsive" alt=""></li>
			<li><img src="{{asset('frontend/common/image/img3-3-template.png')}}" class="img-responsive" alt=""></li>
			<li><img src="{{asset('frontend/common/image/img4-4-template.png')}}" class="img-responsive" alt=""></li>
			<li><img src="{{asset('frontend/common/image/img5-5-template.png')}}" class="img-responsive" alt=""></li>
			<li><img src="{{asset('frontend/common/image/img6-6-template.png')}}" class="img-responsive" alt=""></li>
			<li><img src="{{asset('frontend/common/image/img7-7-template.png')}}" class="img-responsive" alt=""></li>
			<li><img src="{{asset('frontend/common/image/img8-8-template.png')}}" class="img-responsive" alt=""></li>
		</ul>
		<div class="control-slider">
			<span style="padding-right:40px;" id="slider-prev"></span>
			<span id="slider-next"></span>
		</div>
		<script>
			$('.bxslider2').bxSlider({
			  auto: true,
			  nextSelector: '#slider-next',
			  prevSelector: '#slider-prev',
			  nextText: '<img src="{{asset('/frontend/common/image/icon-next.png')}}" />',
			  prevText: '<img src="{{asset('/frontend/common/image/icon-prev.png')}}" />',
			});
		</script>
	</div>
	<div class="projects row">
		<figure style="display: inline-block;" class="mix all portfolio-item icons col-md-4 col-sm-12 wow fadeInLeft animated" data-wow-delay="0.3s">
			<img src="{{asset('/frontend/common/image/img1-1-template.png')}}" class="img-responsive" alt="">
			<figcaption class="mask">
				<h3><a href="http://www.kawaguchi-hp.or.jp" at="">{{trans('common.lbl_template_img1_title')}}</a></h3>
				<span>{{trans('common.lbl_template_img1_desc')}}</span>
			</figcaption>
		</figure>
		<figure style="display: inline-block;" class="mix portfolio-item ui-kits col-md-4  col-sm-12 wow fadeInLeft animated" data-wow-delay="0.6s">
			<img src="{{asset('/frontend/common/image/img2-2-template.png')}}" class="img-responsive" alt="">
			<figcaption class="mask">
				<h3><a href="http://www.yubara-kikunoyu.com/" at="">{{trans('common.lbl_template_img2_title')}}</a></h3>
				<span>{{trans('common.lbl_template_img2_desc')}}</span>
			</figcaption>
		</figure>
		<figure style="display: inline-block;" class="mix portfolio-item icons col-md-4  col-sm-12 wow fadeInLeft animated" data-wow-delay="0.9s">
			<img src="{{asset('/frontend/common/image/img3-3-template.png')}}" class="img-responsive" alt="">
			<figcaption class="mask">
				<h3><a href="http://www.hiruzen-hills.co.jp/" at="">{{trans('common.lbl_template_img3_title')}}</a></h3>
				<span>{{trans('common.lbl_template_img3_desc')}}</span>
			</figcaption>
		</figure>
		<figure style="display: inline-block;" class="mix portfolio-item icons col-md-4  col-sm-12 wow fadeInLeft animated" data-wow-delay="1.2s">
			<img src="{{asset('/frontend/common/image/img4-4-template.png')}}" class="img-responsive" alt="">
			<figcaption class="mask">
				<h3><a href="http://www.okaken.net" at="">{{trans('common.lbl_template_img4_title')}}</a></h3>
				<span>{{trans('common.lbl_template_img4_desc')}}</span>
			</figcaption>
		</figure>
		<figure style="display: inline-block;" class="mix portfolio-item icons col-md-4  col-sm-12 wow fadeInLeft animated" data-wow-delay="1.5s">
			<img src="{{asset('/frontend/common/image/img5-5-template.png')}}" class="img-responsive" alt="">
			<figcaption class="mask">
				<h3><a href="http://www.fujitaya-fff.jp/" at="">{{trans('common.lbl_template_img5_title')}}</a></h3>
				<span>{{trans('common.lbl_template_img5_desc')}}</span>
			</figcaption>
		</figure>
		<figure style="display: inline-block;" class="mix portfolio-item icons col-md-4  col-sm-12 wow fadeInLeft animated" data-wow-delay="1.8s">
			<img src="{{asset('/frontend/common/image/img6-6-template.png')}}" class="img-responsive" alt="">
			<figcaption class="mask">
				<h3><a href="http://www.nppc.co.jp" at="">{{trans('common.lbl_template_img6_title')}}</a></h3>
				<span>{{trans('common.lbl_template_img6_desc')}}</span>
			</figcaption>
		</figure>
			
			<!--
			<figure style="display: inline-block;" class="mix portfolio-item mockups col-md-3  col-sm-6">
				<img src="common/image/img4-template.png" class="img-responsive" alt="">
				<figcaption class="mask">
					<h3><a href="http://www.kawaguchi-hp.or.jp" at="">Website kawaguchi-hp</a></h3>
					<span>Description</span>
				</figcaption>
			</figure>
			<figure style="display: inline-block;" class="mix portfolio-item templates col-md-3  col-sm-6">
				<img src="common/image/img5-template.png" class="img-responsive" alt="">
				<figcaption class="mask">
					<h3><a href="http://www.kawaguchi-hp.or.jp" at="">Website kawaguchi-hp</a></h3>
					<span>Description</span>
				</figcaption>
			</figure>
			<figure style="display: inline-block;" class="mix portfolio-item templates col-md-3  col-sm-6">
				<img src="common/image/img6-template.png" class="img-responsive" alt="">
				<figcaption class="mask">
					<h3><a href="http://www.kawaguchi-hp.or.jp" at="">Website kawaguchi-hp</a></h3>
					<span>Description</span>
				</figcaption>
			</figure>
			<figure style="display: inline-block;" class="mix portfolio-item web mockups col-md-3  col-sm-6">
				<img src="common/image/img7-template.png" class="img-responsive" alt="">

				<figcaption class="mask">
					<h3><a href="http://www.kawaguchi-hp.or.jp" at="">Website kawaguchi-hp</a></h3>
					<span>Description</span>
				</figcaption>
			</figure>
			<figure style="display: inline-block;" class="mix portfolio-item print ui-kits col-md-3  col-sm-6">
				<img src="common/image/img8-template.png" class="img-responsive" alt="">
				<figcaption class="mask">
					<h3><a href="http://www.kawaguchi-hp.or.jp" at="">Website kawaguchi-hp</a></h3>
					<span>Description</span>
				</figcaption>
			</figure>-->

		</div>
	</div>
</section>

<!-- End blog section -->

<!-- Start about section -->
	<?php $company = 'frontend/element/locale/'.$locale.'/company';?>
	@include($company)
<!-- End about section -->
<!-- Start position section -->
<section id="position">
	<div class="container">
		<div class="row">
			<iframe marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3221885233947!2d106.69225631362639!3d10.78661699231461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f347db81139%3A0x6bc4ed999aa6eb9c!2zMTg3LzcgxJBp4buHbiBCacOqbiBQaOG7pywgxJBhIEthbywgUXXhuq1uIDEsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2sus!4v1446888170585" frameborder="0" scrolling="no" width="100%"></iframe>
			<p>{{trans('common.lbl_position_company')}}</p>
			<p>{{trans('common.lbl_position_tax_code')}}: 0313455340</p>
			<address>{{trans('common.lbl_position_address')}}<br />TEL：<a href="tel:84844540020">84-8-4454-0020</a> / FAX:84-8-3823-0599 </address>
		</div>
	</div>
</section>
<!-- End position section -->
<!-- Start  section -->
	<?php $recruit = 'frontend/element/recruit';?>
	@include($recruit)
<!-- End contact section -->
<!-- Start  section -->
	
<!-- End contact section -->
<!-- Start footer section -->
@include('frontend/element/footer')
<!-- End footer section -->
<!-- Load jQuery -->

<!-- Load Booststrap -->
<script type="text/javascript" src="{{asset('/frontend/common/js/bootstrap.js')}}"></script>
<!-- Load custom js plugins -->
<script type="text/javascript" src="{{asset('/frontend/common/js/jquery_002.js')}}"></script>
<script type="text/javascript" src="{{asset('/frontend/common/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('/frontend/common/js/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('/frontend/common/js/smooth-scroll.js')}}"></script>
<script type="text/javascript" src="{{asset('/frontend/common/js/show.js')}}"></script>
<!-- Load custom js for theme -->
<script type="text/javascript" src="{{asset('/frontend/common/js/app.js')}}"></script>
<div class="post-detail-pop" id="post-detail-pop">
	<div class="icon post-detail-pop-close"></div>
	<div class="content" id="post-detail-pop-content">content</div>
</div>
<script type="text/javascript" src="{{asset('/frontend/common/js/function.js')}}"></script>
<div data-uilang="en" data-uiid="1" data-p2murl="https://c2c-p2m-secure.skype.com/p2m/v1/push" data-murl="https://pipe.skype.com/Client/2.0/" data-fp="{9C7C7449-420F-416A-859D-12BA24E265B9}" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" style="display: none;" id="skype_c2c_menu_container" class="skype_c2c_menu_container notranslate"><div class="skype_c2c_menu_click2call"><a target="_self" id="skype_c2c_menu_click2call_action" class="skype_c2c_menu_click2call_action">Call</a></div><div class="skype_c2c_menu_click2sms"><a target="_self" id="skype_c2c_menu_click2sms_action" class="skype_c2c_menu_click2sms_action">Send SMS</a></div><div class="skype_c2c_menu_push_to_mobile"><a target="_blank" id="skype_c2c_menu_push_to_mobile_action" class="skype_c2c_menu_push_to_mobile_action">Call from mobile</a></div><div class="skype_c2c_menu_add2skype"><a target="_self" id="skype_c2c_menu_add2skype_text" class="skype_c2c_menu_add2skype_text">Add to Skype</a></div><div class="skype_c2c_menu_toll_info"><span class="skype_c2c_menu_toll_callcredit">You'll need Skype Credit</span><span class="skype_c2c_menu_toll_free">Free via Skype</span></div></div></body></html>