<section id="recruit">
	<div class="box">
		<div class="container">
			<h3>{{trans('common.lbl_recruit_title')}}</h3>
			<span class="delimiter"></span>
			<p style="margin-bottom:50px;">{{trans('common.lbl_recruit_title_cc')}}</p>
			<div class="row">
				@if(count($recruits) > 0)
					<?php $count = 0; ?>
					@foreach($recruits as $recruit)
					<?php $count++;
						if($count == 2){
						 $class = 'right';
						}else{
							$class = 'line';
						}
					?>
						<div class="form-group col-md-6 {{$class}} wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
							<h4>{{$recruit->position}}</h4>
							<?php echo nl2br($recruit->content);?>
						</div>
						<?php if($count > RECRUIT_LIMIT) break;?>
					@endforeach

				@endif

			</div>
		</div>
	</div>
</section>