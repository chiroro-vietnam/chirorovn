<!doctype html>
<html lang="ja">
	<link href="{{asset("frontend/common/css/import.css")}}" rel="stylesheet" type="text/css" media="all" />
	<script src="{{asset('/frontend/common/js/jquery.min.js')}}"></script>
	<script src="{{asset('/frontend/common/js/jquery.bxslider.min.js')}}"></script>
	<script src="{{asset('/frontend/common/js/jquery.rollover.js')}}"></script>
	<script src="{{asset('/frontend/common/js/jquery.flatheights.js')}}"></script>
	<script src="{{asset('/frontend/common/js/top.js')}}"></script>
	<script src="{{asset('/frontend/common/js/analytics.js')}}"></script>
@include('frontend/element/header')
<body>
<form>	
	<section id="contact">
	<?php $locale = LaravelLocalization::getCurrentLocale();?>
	<?php $inquiry = 'frontend/element/locale/'.$locale.'/inquiry';?>
	@include($inquiry)

	</section>
</form>
@include('frontend/element/footer')
</body>
</html>