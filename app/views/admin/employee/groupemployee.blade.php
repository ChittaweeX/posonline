@extends('default_admin_layout')
@section('title')
  PositionEmployee | Backend
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
        <i class="ace-icon fa fa-male"></i>
        พนักงาน
      </li>
      <li class="active">
            <i class="ace-icon fa fa-group"></i>
          จัดการตำแหน่งพนักงาน</li>
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
      จัดการตำแหน่งพนักงาน
    </h1>
  </div><!-- /.page-header -->

<div class="space"></div>

<div class="row">
  <div class="col-sm-12">
    <div class="tabbable tabs-left">
      <ul class="nav nav-tabs" id="myTab3">
        <li class="active">
          <a data-toggle="tab" href="#managermaster">
            <i class="pink ace-icon fa fa-globe bigger-110"></i>
            ผู้จัดการใหญ่
          </a>
        </li>
        <li>
          <a data-toggle="tab" href="#managerbranch">
            <i class="pink ace-icon fa fa-male bigger-110"></i>
            ผู้จัดการสาขา
          </a>
        </li>

        <li>
          <a data-toggle="tab" href="#employee">
            <i class="blue ace-icon fa fa-group bigger-110"></i>
            พนักงานหน้าร้าน
          </a>
        </li>

        <li>
          <a data-toggle="tab" href="#empty">
            <i class="ace-icon fa fa-rocket"></i>
            พนักงานยังไม่มีตำแหน่ง
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div id="managermaster" class="tab-pane in active">
          <div class="space"></div>

          <div class="inline pos-rel">
            <p>
              <button class="btn btn-white btn-success btn-bold btn-lg ">
                      <i class="ace-icon fa fa-plus bigger-120 green"></i>
                      เพิ่มพนักงานตำแหน่งนี้
              </button>
            </p>
          </div>
          <div class="inline pos-rel">
            <p>
              <button class="btn btn-white btn-success btn-bold btn-lg ">
                      <i class="ace-icon fa fa-search bigger-120 "></i>
                      ดูสิทธิ์การใช้งานตำแหน่งนี้
              </button>
            </p>
          </div>
        </div>

        <div id="managerbranch" class="tab-pane">
          @foreach($employeedata as $emp)
            <div class="inline pos-rel ">
              <div class="user text-center">
                <a href="#">
                  <img src="{{ url('image/employee/'.$emp->emp_image) }}" alt="" class="img-circle" width="80" height="80" />
                </a>
              </div>

              <div class="body text-center">
                <div class="name">
                  <a href="#">
                    {{ $emp->emp_name }}
                  </a>
                  <br>
                    สาขา :
                </div>
                <button class="btn btn-white btn-info btn-bold">
                        <i class="ace-icon fa fa-search bigger-120 blue"></i>
                        แก้ไขสิทธิ์การใช้งาน
                </button>
                <button class="btn btn-white btn-danger btn-bold">
                        <i class="ace-icon fa fa-times bigger-120 red"></i>
                        เอาออก
                </button>

              </div>
            </div>

          @endforeach
          <div class="space"></div>

          <div class="inline pos-rel">
            <p>
              <button class="btn btn-white btn-success btn-bold btn-lg ">
                      <i class="ace-icon fa fa-plus bigger-120 green"></i>
                      เพิ่มพนักงานตำแหน่งนี้
              </button>
            </p>
          </div>
          <div class="inline pos-rel">
            <p>
              <button class="btn btn-white btn-success btn-bold btn-lg ">
                      <i class="ace-icon fa fa-search bigger-120 "></i>
                      ดูสิทธิ์การใช้งานตำแหน่งนี้
              </button>
            </p>
          </div>



        </div>

        <div id="employee" class="tab-pane">
          <div class="space"></div>

          <div class="inline pos-rel">
            <p>
              <button class="btn btn-white btn-success btn-bold btn-lg ">
                      <i class="ace-icon fa fa-plus bigger-120 green"></i>
                      เพิ่มพนักงานตำแหน่งนี้
              </button>
            </p>
          </div>
          <div class="inline pos-rel">
            <p>
              <button class="btn btn-white btn-success btn-bold btn-lg ">
                      <i class="ace-icon fa fa-search bigger-120 "></i>
                      ดูสิทธิ์การใช้งานตำแหน่งนี้
              </button>
            </p>
          </div>
        </div>

        <div id="empty" class="tab-pane">
          @foreach($employeedata as $emp)
            <div class="inline pos-rel ">
              <div class="user text-center">
                <a href="#">
                  <img src="{{ url('image/employee/'.$emp->emp_image) }}" alt="" class="img-circle" width="80" height="80" />
                </a>
              </div>

              <div class="body text-center">
                <div class="name">
                  <a href="#">
                    {{ $emp->emp_name }}
                  </a>
                  <br>
                    สาขา :
                </div>
                

              </div>
            </div>

          @endforeach

        </div>
      </div>
    </div>
  </div><!-- /.col -->
</div><!-- /.row -->

@endsection
@section('custom-js')


@endsection
