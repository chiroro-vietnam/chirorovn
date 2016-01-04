<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<link href="{{asset("frontend/common/css/import.css")}}" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script src="{{asset('/frontend/common/js/jquery.bxslider.min.js')}}"></script>
	<script src="{{asset('/frontend/common/js/jquery.rollover.js')}}"></script>
	<script src="{{asset('/frontend/common/js/jquery.flatheights.js')}}"></script>
	<script src="{{asset('/frontend/common/js/top.js')}}"></script>
	<script src="{{asset('/frontend/common/analytics.js')}}"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-65671287-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<script src="{{asset('/frontend/common/telemetry.js')}}"></script>
	<script src="{{asset('/frontend/common/menu_handler.js')}}"></script>

</head>
<body>
@include('frontend/element/header')
	<ul class="bxslider">
		<li class="first"><img src="{{asset("frontend/common/image/top-img7.jpg")}}" alt=""></li>
		<li><img src="{{asset("frontend/common/image/top-img8.jpg")}}" alt=""></li>
	</ul>
	<!-- Start services section -->
	<section id="services">
		<div class="container">
			<header>
				<h2 style="visibility: visible; animation-name: fadeInDown;" class="wow fadeInDown animated">Dịch vụ website</h2>
				<p style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" class="wow fadeInUp animated" data-wow-delay="0.1s">Chúng tôi được trang bị và hỗ trợ từ Công ty Chiroro-Net ( Nhật Bản) với bề dày thành tựu và kinh nghiệm 15 năm.
				</p>
			</header>
			<div class="row">
				<div class="col-md-4">
					<div style="visibility: visible; animation-name: fadeInUp;" class="service-item text-right wow fadeInUp animated">
						<div class="service-text">
							<h3>Thiết kế</h3>
							<p>Đó là một đội ngũ kỹ sư giàu kinh nghiệm trong thiết kế sản phẩm và chất lượng dựa trên yêu cầu của tất cả khách hàng.</p>
						</div>
						<div class="service-icon">
							<i><img title="" src="{{asset("frontend/common/image/icon-design.png")}}" /></i>
						</div>
					</div>
					<div style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" class="service-item text-right wow fadeInUp animated" data-wow-delay="0.1s">
						<div class="service-text">
							<h3>Dịch thuật</h3>
							<p>Dịch vụ dịch website các ngôn ngữ Anh, Nhật, Việt.</p>
						</div>
						<div class="service-icon">
							<i><img title="" src="{{asset("frontend/common/image/icon-translate.png")}}" /></i>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<img src="{{asset("frontend/common/image/phone.png")}}" alt="Phone" class="img-responsive" >
				</div>
				<div class="col-md-4">
					<div style="visibility: visible; animation-name: fadeInUp;" class="service-item text-left wow fadeInUp animated">
						<div class="service-text">
							<h3>Lập trình và kiểm tra</h3>
							<p>Phát triển website nền tảng CMS,WordPress,EC- CUBE... và đội ngũ test chuyên nghiệp.</p>
						</div>
						<div class="service-icon">
							<i><img title="" src="{{asset("frontend/common/image/icon-code.png")}}" /></i>
						</div>
					</div>
					<div style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" class="service-item text-left wow fadeInUp animated" data-wow-delay="0.1s">
						<div class="service-text">
							<h3>Ứng dụng</h3>
							<p>Phát triển website trên nhiều thiết bị Pc, Ipad, Iphone.</p>
						</div>
						<div class="service-icon">
							<i><img title="" src="{{asset("frontend/common/image/icon-apps.png")}}" /></i>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<!-- End services section -->
<!-- Start blog section -->
<section id="blog" class="dark">
	<div class="container">
		<header>
			<h2 style="visibility: visible; animation-name: fadeInDown;" class="wow fadeInDown animated">Template website</h2>
		</header>
	</div>
	<ul class="bxslider template">
		<li class="first"><img src="common/image/img1-tempalte.png" class="img-responsive" alt=""></li>
		<li><img src="{{asset("frontend/common/image/img2-tempalte.png")}}" class="img-responsive" alt=""></li>
		<li><img src="{{asset("frontend/common/image/img3-tempalte.png")}}" class="img-responsive" alt=""></li>
		<li><img src="{{asset("frontend/common/image/img4-tempalte.png")}}" class="img-responsive" alt=""></li>
		<li><img src="{{asset("frontend/common/image/img5-tempalte.png")}}" class="img-responsive" alt=""></li>
		<li><img src="{{asset("frontend/common/image/img6-tempalte.png")}}" class="img-responsive" alt=""></li>
		<li><img src="{{asset("frontend/common/image/img7-tempalte.png")}}" class="img-responsive" alt=""></li>
		<li><img src="{{asset("frontend/common/image/img8-tempalte.png")}}" class="img-responsive" alt=""></li>
	</ul>
	<div class="blog-items clearfix">
		<div class="row">
			<div style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;" class="blog-item col-md-3 wow fadeInLeft animated" data-wow-delay="0.4s">
				<img src="{{asset("frontend/common/image/img1-tempalte.png")}}" class="img-responsive" alt="">
			</div>
			<div style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;" class="blog-item col-md-3 wow fadeInLeft animated" data-wow-delay="0.4s">
				<img src="{{asset("frontend/common/image/img2-tempalte.png")}}" class="img-responsive" alt="">
				
			</div>
			<div style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;" class="blog-item col-md-3 wow fadeInLeft animated" data-wow-delay="0.4s">
				<img src="{{asset("frontend/common/image/img3-tempalte.png")}}" class="img-responsive" alt="">
			</div>
			<div style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;" class="blog-item col-md-3 wow fadeInLeft animated" data-wow-delay="0.4s">
				<img src="{{asset("frontend/common/image/img4-tempalte.png")}}" class="img-responsive" alt="">
			</div>
		</div>
		<div class="row" style="margin-top:30px;">
			<div style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;" class="blog-item col-md-3 wow fadeInLeft animated" data-wow-delay="0.4s">
				<img src="{{asset("frontend/common/image/img5-tempalte.png")}}" class="img-responsive" alt="">
			</div>
			<div style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;" class="blog-item col-md-3 wow fadeInLeft animated" data-wow-delay="0.4s">
				<img src="{{asset("frontend/common/image/img6-tempalte.png")}}" class="img-responsive" alt="">
			</div>
			<div style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;" class="blog-item col-md-3 wow fadeInLeft animated" data-wow-delay="0.4s">
				<img src="{{asset("frontend/common/image/img7-tempalte.png")}}" class="img-responsive" alt="">
			</div>
			<div style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;" class="blog-item col-md-3 wow fadeInLeft animated" data-wow-delay="0.4s">
				<img src="{{asset("frontend/common/image/img8-tempalte.png")}}" class="img-responsive" alt="">
			</div>
		</div>
	</div>
</section>
<!-- End blog section -->

<!-- Start about section -->
<section id="about" style="visibility: visible; animation-name: fadeInUp;" class="wow fadeInUp animated">
	<div class="box">
		<div class="container">
			<div class="row">
					<h3>Some words about us</h3>
					<span class="delimiter"></span>
					<p>Chúng tôi là những người trợ giúp trong xã hội thông tin. Trong bất cứ lĩnh vực kinh doanh nào, thành công của một công ty đều phải dựa vào sự hài lòng của khách hàng và phản ứng của họ trước những sản phẩm công ty đó. Đối với Chiroro - một công ty dịch vụ máy tính, chúng tôi hỗ trợ khách hàng khi sử dụng sản phẩm của chúng tôi. lui một bước để tiến những bước đại trong tương lai, chúng tôi là người hậu thuẫn của khách hàng, hỗ trợ khách hàng.</p>
					<p>Chúng tôi tự hào được thành lập bởi một công ty Nhật Bản với bề dày tinh thần truyền thống nổi tiếng trong kinh doanh “Sanpou – Yoshi”. Từ “Sanpou” được sử dụng bởi một chủ tàu buôn thời Edo (1603-186), bao gồm là người bạn, khách hàng và xã hội. Trong khi đó “Yoshi” có nghĩa là “Tốt”.</p>
					<p>Với tiêu chí này, mục tiêu của chúng tôi là mang đến những dịch vu tốt nhất cho khách hàng ở Việt Nam. Vì thế, Ông Kyuma ANDO (Chủ tịch của Công ty Chiroro-Net tại Nhật) quyết định thành lập công ty Chiroro-net Việt với 100% vốn đầu tư từ công ty Chiroro-Net Co.,Ltd. tại Nhật Bản.</p>
					<h3>Lĩnh vực</h3>
						<ul>
							<li>Sản xuất phần mềm máy tính</li>
							<li>Dịch vụ tư vấn phần mềm và hệ thống</li>
							<li>Dịch vụ phân tích hệ thống</li>
							<li>Dịch vụ thiết kế hệ thống</li>
							<li>Dịch vụ lập trình</li>
							<li>Dịch vụ bảo trì hệ thống</li>
						</ul>
			</div>
		</div>
	</div>
</section>
<!-- End about section -->
<!-- Start position section -->
<section id="position">
		<div class="container">
			<div class="row">
				<iframe marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3221885233947!2d106.69225631362639!3d10.78661699231461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f347db81139%3A0x6bc4ed999aa6eb9c!2zMTg3LzcgxJBp4buHbiBCacOqbiBQaOG7pywgxJBhIEthbywgUXXhuq1uIDEsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2sus!4v1446888170585" frameborder="0" scrolling="no" width="100%"></iframe>
				<p>CÔNG TY TNHH CHIRORO-NET VIỆT</p>
				<p>MST: 0313455340</p>
				<address>Địa chỉ:187/7 Điện Biên Phủ, phường Đa Kao, Quận 1, TPHCM<br />TEL：<a href="tel:84844540020">84-8-4454-0020</a> / FAX:84-8-3823-0599 </address>
			</div>
		</div>
</section>
<!-- End position section -->
<!-- Start  section -->
<section id="recruit">
	<div class="box">
		<div class="container">
			<h3>Tuyển dụng</h3>
			<span class="delimiter"></span>
			<p style="margin-bottom:50px;">Vui lòng gửi đơn xin việc bằng Tiếng Anh đến địa chỉ email: info@chiroro.com.vn</p>
			<div class="row">
				<div class="form-group col-md-6 line wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
					<h4>Lập trình viên</h4>
					<p>Thành phố Hồ Chí Minh</p>
					<p>Mức lương : 6,500,000 - 8,500,000 VND</p>
					<p><h4>Mô tả công việc</h4></p>
					<p>Thực hiện hệ thống trang web
						<ul>
							<li>Thiết kế cơ sở dữ liệu và phần mềm</li>
							<li>Lập trình và kiểm tra</li>
						</ul>
					</p>
					<h4>Kỹ năng và kinh nghiệm yêu cầu</h4>
					<p>
						<ul>
							<li>Kinh nghiệm sử dụng PHP framework</li>
							<li>Kinh nghiệm ít nhất 1 năm MySQL và PostgreSQL</li>
							<li>Sử dụng Linux OS</li>
							<li>Tiếng Anh hoặc tiếng Nhật chuyên ngành</li>
						</ul>
					</p>
					<h4>Khác</h4>
					<p>
						<ul>
							<li>Trình độ học vấn: Cử nhân</li>
							<li>Tuổi: 25 - 35</li>
							<li>Không yêu cầu giới tính</li>
						</ul>
					</p>
				</div>
				<div class="form-group col-md-6 right wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
					<h4>Front-End Coder</h4>
					<p>Thành phố Hồ Chí Minh</p>
					<p>Mức lương : 6,500,000 - 8,500,000 VND</p>
					<h4>Mô tả công việc</h4>
					<p>Làm trang web (HTML/CSS coding)</p>
					<h4>Kỹ năng và kinh nghiệm yêu cầu</h4>
					<ul>
						<li>Kinh nghiệm HTML/CSS, Javascript, HTML5&CSS3 ít nhất 1 năm.</li>
						<li>Đọc PHP và Javascript source code</li>
						<li>Sử dụng Photoshop hoặc Fireworks</li>
					</ul>
					<h4>Kỹ năng và kinh nghiệm yêu cầu</h4>
					<ul>
						<li>Trình độ học vấn: Cử nhân</li>
						<li>Tuổi: 24 - 35</li>
						<li>Không yêu cầu giới tính</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End contact section -->
<!-- Start  section -->
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
					<input name="companyname" placeholder="Tên Công Ty" class="form-control" id="companyname" type="text"><p class="lbFormConfirm"><span class="lbtitlesp">Tên Công Ty: </span>Tên Công Ty</p><p class="txtFormError">※Vui lòng điền tên công ty.</p>
				</div>
			</div>
			<div class="formrow">
				<div class="form-group col-md-3 formleft">
					<span>Tiêu Đề</span><span class="icnMust">Required</span>
				</div>
				<div class="form-group col-md-9">
					<input name="title" placeholder="Tiêu Đề" class="form-control" id="title" type="text"><p class="lbFormConfirm"><span class="lbtitlesp">Tiêu Đề: </span>Tiêu Đề</p><p class="txtFormError">※Vui lòng điền tên tiêu đề.</p>
				</div>
			</div>
			<div class="formrow">
				<div class="form-group col-md-3 formleft">
					<span>Tên</span><span class="icnMust">Required</span>
				</div>
				<div class="form-group col-md-9">
					<input name="name" placeholder="Tên" class="form-control" id="yourname" type="text"><p class="lbFormConfirm"><span class="lbtitlesp">Tên: </span>Tên</p><p class="txtFormError">※Vui lòng điền tên.</p>
				</div>
			</div>
			<div class="formrow">
				<div class="form-group col-md-3 formleft">
					<span>Jp Use Only</span><span class="icnMust">Required</span>
				</div>
				<div class="form-group col-md-9">
					<input name="jpuse" placeholder="Jp Use Only" class="form-control" id="jpuse" type="text"><p class="lbFormConfirm"><span class="lbtitlesp">Jp Use Only: </span>Jp Use Only</p><p class="txtFormError">※Vui lòng điền Jp Use Only.</p>
				</div>
			</div>
			<div class="formrow">
				<div class="form-group col-md-3 formleft">
					<span>Địa Chỉ</span><span class="icnMust">Required</span>
				</div>
				<div class="form-group col-md-9">
					<input name="address" placeholder="Địa Chỉ" class="form-control" id="address" type="address"><p class="lbFormConfirm"><span class="lbtitlesp">Địa Chỉ: </span>Địa Chỉ</p><p class="txtFormError">※Vui lòng điền địa chỉ.</p>
				</div>
			</div>
			<div class="formrow">
				<div class="form-group col-md-3 formleft">
					<span>Điện Thoại</span><span class="icnMust">Required</span>
				</div>
				<div class="form-group col-md-9">
					<input name="phone" placeholder="Điện Thoại" class="form-control" id="phone" type="text"><p class="lbFormConfirm"><span class="lbtitlesp">Điện Thoại: </span>Điện Thoại</p><p class="txtFormError">※Vui lòng điền điện thoại.</p>
				</div>
			</div>
			<div class="formrow">
				<div class="form-group col-md-3 formleft">
					<span>Email</span><span class="icnMust">Required</span>
				</div>
				<div class="form-group col-md-9">
					<input name="mail" placeholder="Email" class="form-control" id="email" type="email"><p class="lbFormConfirm"><span class="lbtitlesp">Email: </span>Email</p><p class="txtFormError">※Vui lòng điền email.</p>
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
					<p class="lbFormConfirm"><span class="lbtitlesp">Ngôn ngữ: </span>Ngôn ngữ</p>
					<p class="txtFormError">※Vui lòng điền ngôn ngữ.</p>
				</div>
			</div>
			<div class="formrow comment">
				<div class="form-group col-md-3 formleft">
					<span>Nội dung</span><span class="icnMust">Required</span>
				</div>
				<div class="form-group col-md-9">
					<textarea name="comment" class="form-control" rows="8" placeholder="Nội dung" id="comment"></textarea><p class="lbFormConfirm"><span class="lbtitlesp">Nội dung: </span>Nội dung</p><p class="txtFormError">※Vui lòng điền nội dung.</p>
				</div>
			</div>
			<div class="form-group col-md-12 wow fadeInDown animated successconfirm" style="visibility: visible; animation-name: fadeInDown;">
				<h3>Thông tin gởi thành công</h3>
				<p>Nếu nội dung phản hồi chậm trễ sau một thời gian dài hoặc thậm chí một tuần, chúng tôi rất xin lỗi đã làm phiền bạn, nhưng xin vui lòng liên hệ với chúng tôi qua điện thoại hoặc e-mail với phần sau. 
					Khi bạn liên hệ với chúng tôi, vui lòng truyền đạt những hiệu ứng mà bạn liên hệ trong các vấn đề của nền tảng Chiroro Net Viet.
				</p>
				<address>TEL：<a href="tel:84844540020">84-8-4454-0020</a><br />Email: info@chiroro.com.vn</address>
			</div>
			<div class="form-group col-md-12" id="subconfirm">
				<p class="formEntry btnImportant"><a >Tiếp tục</a></p>
			</div>
			<div class="form-group col-md-12" id="subsendcontent">
				<p class="formEntry btnImportant"><a>It wants to send this content</a></p>
			</div>
			<div class="form-group col-md-12" id="subcomback">
				<p class="formEntry btnImportant"><a href="index.html#">Trở về đầu trang</a></p>
			</div>
			<!--<div class="form-group col-md-6">
				<input name="title" placeholder="Tiêu Đề" class="form-control" id="title" type="text">
			</div>
			<div class="form-group col-md-6">
				<input name="name" placeholder="Tên" class="form-control" id="yourname" type="text">
			</div>
			<div class="form-group col-md-6">
				<input name="jpuse" placeholder="Jp Use Only" class="form-control" id="jpuse" type="text">
			</div>
			<div class="form-group col-md-6">
				<input name="address" placeholder="Địa Chỉ" class="form-control" id="address" type="address">
			</div>
			<div class="form-group col-md-6">
				<input name="phone" placeholder="Điện Thoại" class="form-control" id="phone" type="text">
			</div>
			<div class="form-group col-md-6">
				<input name="mail" placeholder="Email" class="form-control" id="email" type="email">
			</div>
			<div class="form-group col-md-12">
				<select class="form-control" name="language">
				  <option value="Nhat">Ngôn ngữ</option>
				  <option value="Nhat">Tiếng Nhật</option>
				  <option value="English">Tiếng Anh</option>
				  <option value="Viet">Tiếng Việt</option>
				</select>
			</div>
			<div class="form-group col-md-12">
				<textarea name="comment" class="form-control" rows="8" placeholder="Comment" id="comment"></textarea>
			</div>
			<div class="form-group col-md-12">
				<button class="btn btn-lg btn-primary" id="send-mail">Send</button>
			</div>-->
		</div>
	</div>
</section>
<!-- End contact section -->
<!-- Start footer section -->
@include('frontend/element/footer')
<!-- End footer section -->
<!-- Load jQuery -->

<!-- Load Booststrap -->
<script type="text/javascript" src="{{asset("frontend/common/js/bootstrap.js")}}"></script>
<!-- Load custom js plugins -->
<script type="text/javascript" src="{{asset("frontend/common/js/jquery_002.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/common/js/jquery.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/common/js/wow.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/common/js/smooth-scroll.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/common/js/show.js")}}"></script>
<!-- Load custom js for theme -->
<script type="text/javascript" src="common/js/app.js")}}"></script>
<div class="post-detail-pop" id="post-detail-pop">
	<div class="icon post-detail-pop-close"></div>
	<div class="content" id="post-detail-pop-content">content</div>
</div>
<script type="text/javascript" src="{{asset("frontend/common/js/function.js")}}"></script>
<div data-uilang="en" data-uiid="1" data-p2murl="https://c2c-p2m-secure.skype.com/p2m/v1/push" data-murl="https://pipe.skype.com/Client/2.0/" data-fp="{9C7C7449-420F-416A-859D-12BA24E265B9}" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" style="display: none;" id="skype_c2c_menu_container" class="skype_c2c_menu_container notranslate"><div class="skype_c2c_menu_click2call"><a target="_self" id="skype_c2c_menu_click2call_action" class="skype_c2c_menu_click2call_action">Call</a></div><div class="skype_c2c_menu_click2sms"><a target="_self" id="skype_c2c_menu_click2sms_action" class="skype_c2c_menu_click2sms_action">Send SMS</a></div><div class="skype_c2c_menu_push_to_mobile"><a target="_blank" id="skype_c2c_menu_push_to_mobile_action" class="skype_c2c_menu_push_to_mobile_action">Call from mobile</a></div><div class="skype_c2c_menu_add2skype"><a target="_self" id="skype_c2c_menu_add2skype_text" class="skype_c2c_menu_add2skype_text">Add to Skype</a></div><div class="skype_c2c_menu_toll_info"><span class="skype_c2c_menu_toll_callcredit">You'll need Skype Credit</span><span class="skype_c2c_menu_toll_free">Free via Skype</span></div></div></body></html>