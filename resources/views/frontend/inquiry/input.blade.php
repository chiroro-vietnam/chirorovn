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
<?php $url = LaravelLocalization::getCurrentLocale().'/inquiry';?>
{!! Form::open( ['method' => 'post', 'id'=>'frmContact', 'url' => $url]) !!} 	
	<section id="contact">
		<div class="container">
			<header>
				<h2 style="visibility: visible; animation-name: fadeInDown;" class="wow fadeInDown animated">{{trans('common.lbl_inquiry')}}</h2>
				<p style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" class="wow fadeInUp animated" data-wow-delay="0.1s">{{trans('common.lbl_sub_title')}}
				</p>
			</header>
			<div class="row">
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_company')}}</span><span class="icnMust">{{trans('common.icnMust')}}</span>
					</div>
					<div class="form-group col-md-9">
						<input name="company" placeholder="{{trans('common.lbl_inquiry_company')}}" class="form-control" id="company" type="text" value="{{Input::old('company')}}">
						@if($errors->first('company'))
						<p class="txtFormError">※ {{$errors->first('company')}}</p>
						@endif
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_title')}}</span><span class="icnMust">{{trans('common.icnMust')}}</span>
					</div>
					<div class="form-group col-md-9">
						<input name="title" placeholder="{{trans('common.lbl_inquiry_title')}}" class="form-control" id="title" type="text" value="{{Input::old('title')}}">
						@if($errors->first('title'))
						<p class="txtFormError">※ {{$errors->first('title')}}</p>
						@endif
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_name')}}</span><span class="icnMust">{{trans('common.icnMust')}}</span>
					</div>
					<div class="form-group col-md-9">
						<input name="name" placeholder="{{trans('common.lbl_inquiry_name')}}" class="form-control" id="name" type="text" value="{{Input::old('name')}}">
						@if($errors->first('name'))
						<p class="txtFormError">※ {{$errors->first('name')}}</p>
						@endif
					</div>
				</div>
				@if(LaravelLocalization::getCurrentLocale() == 'ja')
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_furigana')}}</span><span class="icnMust">{{trans('common.icnMust')}}</span>
					</div>
					<div class="form-group col-md-9">
						<input name="furigana" placeholder="{{trans('common.lbl_furigana')}}" class="form-control" id="furigana" type="text" value="{{Input::old('furigana')}}">
						@if($errors->first('furigana'))
						<p class="txtFormError">※ {{$errors->first('furigana')}}</p>
						@endif
					</div>
				</div>
				@endif
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_address')}}</span><span class="icnMust">{{trans('common.icnMust')}}</span>
					</div>
					<div class="form-group col-md-9">
						<input name="address" placeholder="{{trans('common.lbl_inquiry_address')}}" class="form-control" id="address" type="text" value="{{Input::old('address')}}">
						@if($errors->first('address'))
						<p class="txtFormError">※ {{$errors->first('address')}}</p>
						@endif
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_phone')}}</span><span class="icnMust">{{trans('common.icnMust')}}</span>
					</div>
					<div class="form-group col-md-9">
						<input name="phone" placeholder="{{trans('common.lbl_inquiry_phone')}}" class="form-control" id="phone" type="text" value="{{Input::old('phone')}}">
						@if($errors->first('phone'))
						<p class="txtFormError">※ {{$errors->first('phone')}}</p>
						@endif
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_email')}}</span><span class="icnMust">{{trans('common.icnMust')}}</span>
					</div>
					<div class="form-group col-md-9">
						<input name="email" placeholder="{{trans('common.lbl_inquiry_email')}}" class="form-control" id="email" type="text" value="{{Input::old('email')}}">
						@if($errors->first('email'))
						<p class="txtFormError">※ {{$errors->first('email')}}</p>
						@endif
					</div>
				</div>				
				<div class="formrow comment">
					<div class="form-group col-md-3 formleft">
						<span>{{trans('common.lbl_inquiry_comment')}}</span><span class="icnMust">{{trans('common.icnMust')}}</span>
					</div>
					<div class="form-group col-md-9">
						<textarea name="comment" class="form-control" rows="8" placeholder="{{trans('common.lbl_inquiry_comment')}}" id="comment" value="{{Input::old('comment')}}">{{Input::old('comment')}}</textarea>
						@if($errors->first('comment'))
						<p class="txtFormError">※ {{$errors->first('comment')}}</p>
						@endif
					</div>
				</div>
				<div class="form-group col-md-12" style="height: 55px;">
					<p class="formEntry btnImportant">
						<a id="subsendcontent" onclick="submitForm()";>{{trans('common.btn_inquiry_submit')}}</a>
					</p>
				</div>
			</div>
		</div>
	</section>

{!! Form::close() !!}

<script>
function submitForm() {
    document.getElementById("frmContact").submit();
}
</script>

@include('frontend/element/footer')
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
</body>
</html>