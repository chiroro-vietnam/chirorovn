<header>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="{{asset("frontend/common/image/logo.png")}}" alt=""></a>
			</div>
			<div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
				<div class="language">
					<span>
						<a href="{{LaravelLocalization::getLocalizedURL('vi') }}" hreflang="vi" title="Tiếng Việt">
						<img title="Tiếng Việt" src="{{asset("frontend/common/image/vn.png")}}"/></a>
					</span>						
					<span><a href="{{LaravelLocalization::getLocalizedURL('en') }}" hreflang="en" title="English">
						<img title="English" src="{{asset("frontend/common/image/gb.png")}}"/></a>
					</span>
					<span>
						<a href="{{LaravelLocalization::getLocalizedURL('ja') }}" hreflang="ja" title="日本語">
						<img title="日本語" src="{{asset("frontend/common/image/jp.png")}}"/></a>
					</span>
				</div>

				<ul class="nav navbar-nav">
					<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#home">{{trans('common.lbl_front_homepage')}}</a></li>
					<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#services">{{trans('common.lbl_front_service')}}</a></li>
					<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#portfolio">{{trans('common.lbl_front_template')}}</a></li>
					<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#about">{{trans('common.lbl_front_information')}}</a></li>
					<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#position">{{trans('common.lbl_front_position')}}</a></li>
					<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#recruit">{{trans('common.lbl_front_recruit')}}</a></li>
					<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#contact">{{trans('common.lbl_front_inquiry')}}</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>