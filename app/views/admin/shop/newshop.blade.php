@extends('default_admin_layout')
@section('title')
  New Shop | Backend
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
          <i class="ace-icon fa fa-plus"></i>
        สร้างข้อมูลร้านเริ่มต้น</li>
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
      กรอกข้อมูลร้านค้าเริ่มต้น (สาขาใหญ่)
    </h1>
  </div><!-- /.page-header -->

  <div class="row">
    <div class="col-xs-12">
      <form class="form-horizontal" action="{{ url('admin/shop/newshop') }}" role="form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="typeshop" value="master">
        <input type="hidden" name="branchname" value="สาขาใหญ่">
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > ชื่อร้าน </label>
          <div class="col-sm-9">
            <input type="text" name="nameshop"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > ชื่อร้าน ภาษา อังกฤษ </label>
          <div class="col-sm-9">
            <input type="text" name="nameshopeng"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > TAX ID </label>
          <div class="col-sm-9">
            <input type="text" name="taxshop"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > ที่อยู่ 1 </label>
          <div class="col-sm-9">
            <input type="text" name="addressshop1"   class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > ที่อยู่ 2 </label>
          <div class="col-sm-9">
            <input type="text" name="addressshop2"   class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > ที่อยู่ 3 </label>
          <div class="col-sm-9">
            <input type="text" name="addressshop3"   class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > เบอร์โทรร้าน </label>
          <div class="col-sm-9">
            <input type="text" name="telshop"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Fax  </label>
          <div class="col-sm-9">
            <input type="text" name="faxshop"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Line ID </label>
          <div class="col-sm-9">
            <input type="text" name="lineidshop"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Email </label>
          <div class="col-sm-9">
            <input type="email" name="emailshop"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Website </label>
          <div class="col-sm-9">
            <input type="text" name="websiteshop"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Facebook page </label>
          <div class="col-sm-9">
            <input type="text" name="facebookshop"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Wifi Name </label>
          <div class="col-sm-9">
            <input type="text" name="wifinameshop"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Wifi Password </label>
          <div class="col-sm-9">
            <input type="text" name="wifipassshop"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Logo ร้าน </label>
          <div class="col-sm-9">
            <input type="file" name="logoshop"  class="col-xs-10 col-sm-5" />
          </div>
        </div>

        <div class="space-4"></div>



        <div class="clearfix form-actions">
          <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit">
              <i class="ace-icon fa fa-check bigger-110"></i>
              บันทึก
            </button>

            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
              <i class="ace-icon fa fa-undo bigger-110"></i>
              ล้างทำใหม่
            </button>
          </div>
        </div>





      </form>

    </div>
  </div>

@endsection
@section('custom-js')


@endsection
@section('custom-jscode')

@endsection
