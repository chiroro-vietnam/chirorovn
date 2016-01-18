    <?php $locale = LaravelLocalization::getCurrentLocale();
    		$route = $locale;
    ?>
    {!! Form::open(array('url' => $route, 'id'=>'inquiry')) !!}
	<section id="contact">
		<div class="container">
			<header>
				<h2 style="visibility: visible; animation-name: fadeInDown;" class="wow fadeInDown animated">Liên hệ</h2>
				<p style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" class="wow fadeInUp animated" data-wow-delay="0.1s">Xin vui lòng điền đầy đủ thông tin dưới form này. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất.
				</p>
			</header>
			<div class="row">
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>Tên Công Ty</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<input name="companyname" placeholder="Tên Công Ty" class="form-control" id="companyname" type="text"><p class="txtFormError">※Vui lòng điền tên công ty.</p>
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>Tiêu Đề</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<input name="title" placeholder="Tiêu Đề" class="form-control" id="title" type="text"><p class="txtFormError">※Vui lòng điền tên tiêu đề.</p>
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>Tên</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<input name="name" placeholder="Tên" class="form-control" id="yourname" type="text"><p class="txtFormError">※Vui lòng điền tên.</p>
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>Jp Use Only</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<input name="jpuse" placeholder="Jp Use Only" class="form-control" id="jpuse" type="text"><p class="txtFormError">※Vui lòng điền Jp Use Only.</p>
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>Địa Chỉ</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<input name="address" placeholder="Địa Chỉ" class="form-control" id="address" type="address"><p class="txtFormError">※Vui lòng điền địa chỉ.</p>
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>Điện Thoại</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<input name="phone" placeholder="Điện Thoại" class="form-control" id="phone" type="text"><p class="txtFormError">※Vui lòng điền điện thoại.</p>
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>Email</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<input name="mail" placeholder="Email" class="form-control" id="email" type="email"><p class="txtFormError">※Vui lòng điền email.</p>
					</div>
				</div>
				<div class="formrow">
					<div class="form-group col-md-3 formleft">
						<span>Ngôn ngữ</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<select class="form-control" name="language">
						  <option value="Nhat">Tiếng Nhật</option>
						  <option value="English">Tiếng Anh</option>
						  <option value="Viet">Tiếng Việt</option>
						</select>
						<p class="txtFormError">※Vui lòng điền ngôn ngữ.</p>
					</div>
				</div>
				<div class="formrow comment">
					<div class="form-group col-md-3 formleft">
						<span>Nội dung</span><span class="icnMust">Required</span>
					</div>
					<div class="form-group col-md-9">
						<textarea name="comment" class="form-control" rows="8" placeholder="Nội dung" id="comment"></textarea><p class="txtFormError">※Vui lòng điền nội dung.</p>
					</div>
				</div>
				<div class="form-group col-md-12">
					<!-- <p class="formEntry btnImportant"><a id="subconfirm">Tiếp tục</a></p> -->
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</div>
	</section>
    {!! Form::close() !!}

