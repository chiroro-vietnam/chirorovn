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

{!! Form::open( ['method' => 'post', 'id'=>'frmContact', 'routr' => 'frontend.inquiry.confirm']) !!} 		
	<section id="contact">
		<div class="container">
			<header>
				<h2 style="visibility: visible; animation-name: fadeInDown;" class="wow fadeInDown animated">Liên hệ</h2>
				<p style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" class="wow fadeInUp animated" data-wow-delay="0.1s">Xin vui lòng xác nhận thông tin dưới form này. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất.
				</p>
			</header>
			<div class="row">
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_company')}}</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<p class="lbFormConfirm"><span class="lbtitlesp">{{trans('common.lbl_inquiry_company')}}: </span>{{$data['company']}}</p>
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_title')}}</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<p class="lbFormConfirm"><span class="lbtitlesp">{{trans('common.lbl_inquiry_title')}}: </span>{{$data['title']}}</p>
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_name')}}</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<p class="lbFormConfirm"><span class="lbtitlesp">{{trans('common.lbl_inquiry_name')}}: </span>{{$data['name']}}</p>
					</div>
				</div>
				@if(LaravelLocalization::getCurrentLocale() == 'ja')
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_furigana')}}</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<p class="lbFormConfirm"><span class="lbtitlesp">{{trans('common.lbl_inquiry_furigana')}}: </span>{{@$data['furigana']}}</p>
					</div>
				</div>
				@endif
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_address')}}</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<p class="lbFormConfirm"><span class="lbtitlesp">{{trans('common.lbl_inquiry_address')}}: </span>{{$data['address']}}</p>
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_phone')}}</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<p class="lbFormConfirm"><span class="lbtitlesp">{{trans('common.lbl_inquiry_phone')}}: </span>{{$data['phone']}}</p>
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_email')}}</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<p class="lbFormConfirm"><span class="lbtitlesp">{{trans('common.lbl_inquiry_email')}}: </span>{{$data['email']}}</p>
					</div>
				</div>				
				<div class="formrow comment">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_comment')}}</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9 formright">
						<p class="lbFormConfirm"><span class="lbtitlesp">{{trans('common.lbl_inquiry_comment')}}: </span><?php echo nl2br($data['comment']);?></p>
					</div>
				</div>

				<div class="form-group col-md-12">

					<!-- <p class="formEntry btnImportant">
					<a style="background:#A0A0A0;" id="subsendcontent" onclick="goBack()";>{{trans('common.btn_inquiry_back')}}</a>					
						<a id="subsendcontent" href="<?php echo route('frontend.inquiry.complete');?>">&nbsp;&nbsp;&nbsp;{{trans('common.btn_inquiry_send')}}&nbsp;&nbsp;&nbsp;</a>
					</p> -->

					<p class="formEntry btnImportant" style="height: 55px;">
						<a style="background:#A0A0A0;" id="subsendcontent" onclick="goBack()";>{{trans('common.btn_inquiry_back')}}</a>
						<a id="subsendcontent" onclick="submitForm()";>{{trans('common.btn_inquiry_send')}}</a>
					</p>

				</div>
			</div>
		</div>
	</section>

{!! Form::close() !!}
@include('frontend/element/footer')
<script>
	function goBack() {
	    window.history.back();
	}

	function submitForm() {
    	document.getElementById("frmContact").submit();
	}
</script>
</body>
</html>