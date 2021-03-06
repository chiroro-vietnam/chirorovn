	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Chiroro-Net Viet</title>
		<link rel="icon" href="{{asset('/favicon/favicon.png')}}" type="image/gif" >
		<meta name="description" content="Mailbox with some customizations as described in docs" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		{!! HTML::style("backend/css/bootstrap.min.css") !!}
		{!! HTML::style("backend/css/style.css") !!}
		{!! HTML::style("backend/font-awesome/4.2.0/css/font-awesome.min.css") !!}
		{!! HTML::style("backend/css/custom.css") !!}
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		{!! HTML::style("backend/fonts/fonts.googleapis.com.css") !!}
		<!-- ace styles -->
		{!! HTML::style("backend/css/ace.min.css") !!}

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		{!! HTML::script('backend/js/ace-extra.min.js') !!}

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>