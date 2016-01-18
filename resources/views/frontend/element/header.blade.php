<header>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
		<link rel="icon" href="{{asset('/favicon/favicon.png')}}" type="image/gif" >
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo route('frontend.homepage'); ?>#home"><img src="{{asset('/logo/logo_site.png')}}" alt=""></a>
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
					<li><a class="atv" href="<?php echo route('frontend.homepage'); ?>#home">{{trans('common.lbl_front_homepage')}}</a></li>
					<li><a class="atv" href="<?php echo route('frontend.homepage'); ?>#services">{{trans('common.lbl_front_service')}}</a></li>
					<li><a class="atv" href="<?php echo route('frontend.homepage'); ?>#portfolio">{{trans('common.lbl_front_template')}}</a></li>
					<li><a class="atv" href="<?php echo route('frontend.homepage'); ?>#about">{{trans('common.lbl_front_information')}}</a></li>
					<li><a class="atv" href="<?php echo route('frontend.homepage'); ?>#position">{{trans('common.lbl_front_position')}}</a></li>
					<li><a class="atv" href="<?php echo route('frontend.homepage'); ?>#recruit">{{trans('common.lbl_front_recruit')}}</a></li>
					<li><a class="atv <?php echo (isset($class) && !empty($class)) ? $class : '';?>" href="<?php echo route('frontend.inquiry'); ?>">{{trans('common.lbl_front_inquiry')}}</a></li>
				</ul>


			</div>
		</div>
	</nav>

<script type="text/javascript">
	$("a.atv").click(function(){
		$(".atv").removeClass('active');
		$(this).addClass('active');
	});	

	$(document).ready(function(){
		var action = window.location.hash;		
		var classNow = "{{@$class}}";
		if(classNow == ''){
			$(".atv").removeClass('active');
			if(action == '#home' || action == '')
			{
				$("ul li:eq(0) a.atv").addClass('active');
			}else if(action == '#services'){
				$("ul li:eq(1) a.atv").addClass('active');
			}else if(action == '#portfolio'){
				$("ul li:eq(2) a.atv").addClass('active');
			}else if(action == '#about'){
				$("ul li:eq(3) a.atv").addClass('active');
			}else if(action == '#position'){
				$("ul li:eq(4) a.atv").addClass('active');
			}else if(action == '#recruit'){
				$("ul li:eq(5) a.atv").addClass('active');
			}else{
				$("ul li:eq(6) a.atv").addClass('active');
			}
		}
		
	});
</script>
</header>
