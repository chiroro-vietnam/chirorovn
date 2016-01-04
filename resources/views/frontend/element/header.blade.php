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
						<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>">Trang chủ</a></li>
						<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#services">Dịch vụ</a></li>
						<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#blog">Template</a></li>
						<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#about">Thông tin</a></li>
						<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#position">Vị trí</a></li>
						<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#recruit">Tuyển dụng</a></li>
						<li><a data-scroll="" href="<?php echo route('frontend.homepage'); ?>#contact">Liên hệ</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>