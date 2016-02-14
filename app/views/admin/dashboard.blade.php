@extends('default_admin_layout')
@section('title')
  Stock | Backend
@endsection
@section('custom-css')


@endsection
@section('breadcrumb')
  <div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
      try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>

    <ul class="breadcrumb">
      <li class="active">
        <i class="ace-icon fa fa-dashboard "></i>
        หน้าหลัก
      </li>
    </ul><!-- /.breadcrumb -->

    <div class="nav-search" id="nav-search">
      <form class="form-search">
        <span class="input-icon">
          <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
          <i class="ace-icon fa fa-search nav-search-icon"></i>
        </span>
      </form>
    </div><!-- /.nav-search -->
  </div>
@endsection
@section('content')

  <div class="page-header">
    <h1>
      ภาพรวม
    </h1>
  </div><!-- /.page-header -->





@endsection
@section('custom-js')


@endsection
