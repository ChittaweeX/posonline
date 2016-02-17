@extends('default_admin_layout')
@section('title')
  View Shop ALL | Backend
@endsection
@section('custom-css')


@endsection
@section('breadcrumb')
  <div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
      try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>

    <ul class="breadcrumb">
      <li>
        <i class="ace-icon fa fa-dashboard"></i>
        <a href="{{ url('admin') }}">หน้าหลัก</a>
      </li>
      <li>
        <i class="ace-icon fa fa-home"></i>
        ร้านค้า
      </li>
      <li class="active">
          <i class="ace-icon fa fa-search"></i>
        แสดงร้านทั้งหมด</li>
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
      แสดงร้านค้าทั้งหมด
    </h1>
  </div><!-- /.page-header -->
<div class="col-xs-12">
												<div class="widget-box">
													<div class="widget-header widget-header-flat">
														<h4 class="smaller">
															<i class="ace-icon fa fa-home"></i>
															สาขาใหญ่
														</h4>
													</div>

													<div class="widget-body">
														<div class="widget-main">
                              <div class="inline pos-rel ">
                                <div class="user text-center">
                                  <a href="#">
                                    <img src="{{ url('image/shop/'.$mastershop->shop_logo) }}" alt="" class="img-thumbnail" width="40%" height="40%"/>
                                  </a>
                                </div>

                                <div class="body text-center">
                                  <div class="name">
                                    <h4>  {{ $mastershop->shop_name }}</h4>
                                      ประเภท : ร้านค้าทั่วไป
                                  </div>
                                  <a href="{{ url('admin/shop/shopdetails/2') }}" class="btn btn-white btn-info btn-bold btn-sm">
                                          <i class="ace-icon fa fa-search bigger-120 blue"></i>
                                          ดูรายละเอียดร้าน
                                  </a>
                                </div>
                              </div>
														</div>
													</div>
												</div>
											</div>
                      <div class="col-xs-12">
                      												<div class="widget-box">
                      													<div class="widget-header widget-header-flat">
                      														<h4 class="smaller">
                      															<i class="ace-icon fa fa-sitemap"></i>
                      															สาขาย่อย
                      														</h4>
                      													</div>

                      													<div class="widget-body">
                      														<div class="widget-main">
                                                    <div class='row text-center'>
                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="user">
                                                          <a href="#">
                                                            <img src="{{ url('image/shop/logo.png') }}" alt="" class="img-thumbnail" width="40%" height="40%"/>
                                                          </a>
                                                        </div>
                                                        <div class="name">
                                                          TEST
                                                          <br>
                                                            สาขา :
                                                            <br>
                                                            ประเภท :
                                                        </div>
                                                        <button class="btn btn-white btn-info btn-bold btn-sm">
                                                                <i class="ace-icon fa fa-search bigger-120 blue"></i>
                                                                ดูรายละเอียดร้าน
                                                        </button>
                                                      </div>

                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="user">
                                                          <a href="#">
                                                            <img src="{{ url('image/shop/logo.png') }}" alt="" class="img-thumbnail" width="40%" height="40%"/>
                                                          </a>
                                                        </div>
                                                        <div class="name">
                                                          TEST
                                                          <br>
                                                            สาขา :
                                                            <br>
                                                            ประเภท :
                                                        </div>
                                                        <button class="btn btn-white btn-info btn-bold btn-sm">
                                                                <i class="ace-icon fa fa-search bigger-120 blue"></i>
                                                                ดูรายละเอียดร้าน
                                                        </button>
                                                      </div>

                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="user">
                                                          <a href="#">
                                                            <img src="{{ url('image/shop/logo.png') }}" alt="" class="img-thumbnail" width="40%" height="40%"/>
                                                          </a>
                                                        </div>
                                                        <div class="name">
                                                          TEST
                                                          <br>
                                                            สาขา :
                                                            <br>
                                                            ประเภท :
                                                        </div>
                                                        <a href="" class="btn btn-white btn-info btn-bold btn-sm">
                                                                <i class="ace-icon fa fa-search bigger-120 blue"></i>
                                                                ดูรายละเอียดร้าน
                                                        </a>
                                                      </div>

                                                      <div class="col-md-3 col-xs-6">
                                                        <div class="user">
                                                          <a href="#">
                                                            <img src="{{ url('image/shop/logo.png') }}" alt="" class="img-thumbnail" width="40%" height="40%"/>
                                                          </a>
                                                        </div>
                                                        <div class="name">
                                                          TEST
                                                          <br>
                                                            สาขา :
                                                            <br>
                                                            ประเภท :
                                                        </div>
                                                        <button class="btn btn-white btn-info btn-bold btn-sm">
                                                                <i class="ace-icon fa fa-search bigger-120 blue"></i>
                                                                ดูรายละเอียดร้าน
                                                        </button>
                                                      </div>
                                                    </div>
                      														</div>
                      													</div>
                      												</div>
                      											</div>



@endsection
@section('custom-js')


@endsection
@section('custom-jscode')

@endsection
