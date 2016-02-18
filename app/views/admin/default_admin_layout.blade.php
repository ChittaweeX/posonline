<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

		@section('extendscss') @show
		@section('customcss') @show

    <link href="{{ url('assets/css/animate.css') }} " rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }} " rel="stylesheet">

</head>

<body class="md-skin">

<div id="wrapper">
		@include('admin.leftmenu')
    @include('admin.topmenu')

				@yield('pageheader')
				@yield('pagecontent')
        <div class="footer">
            <div class="pull-right">
              <strong>043-220499</strong>  Program Support.
            </div>
            <div>
                <strong>Copyright</strong> S.I.N.Commercial Co.,Ltd. &copy; 2016
            </div>
        </div>

    </div>
</div>

<!-- Mainly scripts -->
<script src="{{ url('assets/js/jquery-2.1.1.js') }} "></script>
<script src="{{ url('assets/js/bootstrap.min.js') }} "></script>
<script src="{{ url('assets/js/plugins/metisMenu/jquery.metisMenu.js') }} "></script>
<script src="{{ url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }} "></script>

<!-- Custom and plugin javascript -->
@section('extendsjs') @show
<script src="{{ url('assets/js/inspinia.js') }} "></script>
<script src="{{ url('assets/js/plugins/pace/pace.min.js') }} "></script>
@section('customjs') @show


</body>

</html>
