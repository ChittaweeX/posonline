@extends('default_admin_layout')
@section('title')
  Details Shop | Backend
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
      <li>
        <i class="ace-icon fa fa-sitemap"></i>
         <a href="{{ url('admin/shop/shopview') }}">แสดงข้อมูลร้านค้าทั้งหมด</a>
      </li>
      <li class="active">
          <i class="ace-icon fa fa-search"></i>
        แสดงข้อมูลร้านค้า</li>
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
      แสดงรายระเอียดร้านค้า
    </h1>
  </div><!-- /.page-header -->

  <div class='row '>
    <div class="col-sm-7 col-xs-7">
  										<h4>ข้อมูลร้านค้า</h4>

  										<hr />
                      <img src="{{ url('image/shop/'.$shop->shop_logo) }}" alt="" class="img-thumbnail" width="50%" height="50%"/>
                      <hr />
  										<h4>ชื่อร้าน : <strong>{{ $shop->shop_name }}</strong></h4>
                      <h5>ขื่อร้านภาษาอังกฤษ : {{ $shop->shop_nameEng }} </h5>
                      <h5>ขื่อสาขา : {{ $shop->shop_branchname }} </h5>
                      <h5>Tax : {{ $shop->shop_taxid }} </h5>
                      <h5>ที่อยู่ : {{ $shop->shop_address1.$shop->shop_address2.$shop->shop_address3 }}</h5>
                      <h5><i class="fa fa-phone-square text-primary"></i> : {{ $shop->shop_tel }}</h5>
                      <h5><i class="fa fa-fax text-primary"></i> : {{ $shop->shop_fax }}</h5>
                      <h5>Line : {{ $shop->shop_lineid }}</h5>
                      <h5><i class="fa fa-envelope text-primary"></i> : {{ $shop->shop_email }}</h5>
                      <h5><i class="fa fa-globe text-primary"></i> : {{ $shop->shop_website }}</h5>
                      <h5><i class="fa fa-facebook-square text-info"></i> : {{ $shop->shop_facebook }}</h5>
                      <h5>WIFI name : {{ $shop->shop_wifiname }}</h5>
                      <h5>WIFI Pass : {{ $shop->shop_wifipass }}</h5>

                      <hr>
                      <h5>เข้าระบบเมื่อ : {{ $shop->created_at }}</h5>
                      <h5>แก้ไขครั้งสุดท้ายเมื่อ : {{ $shop->updated_at }}</h5>




  				</div><!-- /.col -->

                    <div class="col-sm-5 col-xs-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title">พนักงาน ทั้งหมด</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main text-center">
													<div class="row">
                            <div class="col-md-12">
                              <h4><small>ผู้จัดการสาขา</small></h4>
                              <div class="inline pos-rel ">
                                <div class="user text-center">
                                  <a href="#">
                                    <img src="{{ url('image/employee/20160209162900.jpg') }}" alt="" class="img-responsive" width="80" height="80" />
                                  </a>
                                </div>
                                <div class="body text-center">
                                  <div class="name">
                                  xxxxx
                                </div>
                                </div>
                              </div>
                            </div>
													</div>

													<hr />
                          <div class="row">
                            <div class="col-md-12">
                              <h4><small>พนักงานหน้าร้าน</small></h4>
                              <div class="inline pos-rel ">
                                <div class="user text-center">
                                  <a href="#">
                                    <img src="{{ url('image/employee/20160209162900.jpg') }}" alt="" class="img-responsive" width="80" height="80" />
                                  </a>
                                </div>
                                <div class="body text-center">
                                  <div class="name">
                                  xxxxx
                                </div>
                                </div>
                              </div>
                              <div class="inline pos-rel ">
                                <div class="user text-center">
                                  <a href="#">
                                    <img src="{{ url('image/employee/20160209162900.jpg') }}" alt="" class="img-responsive" width="80" height="80" />
                                  </a>
                                </div>
                                <div class="body text-center">
                                  <div class="name">
                                  xxxxx
                                </div>

                                </div>
                              </div>
                            </div>
													</div>
												</div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-6 col-xs-12">
                        <button class="btn btn-white btn-info btn-bold btn-lg">
                      <i class="ace-icon fa fa-edit bigger-120 blue"></i>
                      แก้ไขข้อมูล
                    </button>
                      </div>
                      <div class="col-md-6 col-xs-12">
                        <button class="btn btn-white btn-danger btn-bold btn-lg">
                      <i class="ace-icon fa fa-trash-o bigger-120 red"></i>
                      ลบร้านค้า
                    </button>
                      </div>
                    </div>
									</div><!-- /.col -->

  </div>

@endsection
@section('custom-js')


@endsection
@section('custom-jscode')

@endsection
