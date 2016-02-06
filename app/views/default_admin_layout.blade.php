
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>@yield('title')</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ url('assets/admin/css/bootstrap.min.css') }} " />
		<link rel="stylesheet" href="{{ url('assets/admin/font-awesome/4.2.0/css/font-awesome.min.css') }}" />

		<!-- page specific plugin styles -->
			@section('custom-css') @show
		<!-- text fonts -->
		<link rel="stylesheet" href="{{ url('assets/admin/fonts/fonts.googleapis.com.css') }} " />



		<!-- ace styles -->
		<link rel="stylesheet" href="{{ url('assets/admin/css/ace.min.css') }} " class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="{{ url('assets/admin/js/ace-extra.min.js') }} "></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

						<strong>Menu</strong>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Stock Admin
						</small>
					</a>
				</div>


			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li {{ ( Request::segment(2) == '' ? 'class="active"' : '') }}>
						<a href="{{ url('admin') }}">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> ภาพรวม </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="" class="dropdown-toggle">
							<i class="menu-icon fa fa-cube"></i>
							<span class="menu-text"> สินค้า </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="tables.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Simple &amp; Dynamic
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="jqgrid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									jqGrid plugin
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li {{ ( Request::segment(2) == 'employee' ? 'class="active open"' : '') }}>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-male"></i>
							<span class="menu-text"> พนักงาน </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li {{ ( Request::segment(3) == 'addemployee' ? 'class="active"' : '') }}>
								<a href="{{ url('admin/employee/addemployee') }}">
									<i class="menu-icon fa fa-caret-right"></i>
									เพิ่มพนักงาน
								</a>

								<b class="arrow"></b>
							</li>
							<li {{ ( Request::segment(3) == 'addemployee' ? 'class="active"' : '') }}>
								<a href="{{ url('admin/employee/addemployee') }}">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการพนักงาน
								</a>

								<b class="arrow"></b>
							</li>
							<li {{ ( Request::segment(3) == 'showallemployee' ? 'class="active"' : '') }}>
								<a href="{{ url('admin/employee/showallemployee') }}">
									<i class="menu-icon fa fa-caret-right"></i>
									แสดงพนักงานทั้งหมด
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>
			<div class="main-content">
				<div class="main-content-inner">
					@yield('breadcrumb')
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								@yield('content')
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Stock</span>
							Application &copy; 2016
						</span>


					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{ url('assets/admin/js/jquery.2.1.1.min.js') }}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='{{ url('assets/admin/js/jquery.min.js') }} '>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{ url('assets/admin/js/jquery.mobile.custom.min.js') }}  '>"+"<"+"/script>");
		</script>
		<script src="{{ url('assets/admin/js/bootstrap.min.js') }}"></script>

		<!-- page specific plugin scripts -->
			@section('custom-js') @show
		<!-- ace scripts -->
		<script src="{{ url('assets/admin/js/ace-elements.min.js') }} "></script>
		<script src="{{ url('assets/admin/js/ace.min.js') }} "></script>
		@section('custom-jscode') @show
		<!-- inline scripts related to this page -->
	</body>
</html>
