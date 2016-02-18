@extends('admin.default_admin_layout')
@section('title')
  Stock | Backend
@endsection
@section('extendscss')
  <!-- Toastr style -->
  <link href="{{ url('assets/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
  <!-- Sweet Alert -->
  <link href="{{ url('assets/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

@endsection
@section('customcss')
@endsection
@section('pageheader')

@endsection
@section('pagecontent')
  <div class="wrapper wrapper-content animated bounceIn">
    <div class="row">
          <div class="col-lg-12">
              <div class="text-center m-t-lg">
                  <h1>
                      Welcome in SynStock Project
                  </h1>
                  <h3>
                      Web Appilcation ที่จะทำให้งานสินค้าหลังร้านของคุณง่ายขึ้น
                  </h3>
              </div>
              <br>
              <p align="center">
                <a href="admin/start"><button  class="btn btn-primary dim btn-lg" type="button"> เริ่มต้นใช้งาน <i class="fa fa-send"></i></button></a>
                <br>
                  <img src="{{ url('image/315.png') }}" alt="" class="img-responsive"/ width="50%">
              </p>
          </div>
      </div>
  </div>
@endsection
@section('extendsjs')
  <!-- Toastr -->
    <script src="{{ url('assets/js/plugins/toastr/toastr.min.js') }}"></script>
    <!-- Sweet alert -->
    <script src="{{ url('assets/js/plugins/sweetalert/sweetalert.min.js') }}"></script>
@endsection
@section('customjs')
  <script>
      $(document).ready(function() {
        setTimeout(function() {
                toastr.options = {
                  positionClass: 'toast-top-right',
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.info('คุณได้รับข้อความใหม่', '');

            }, 1300);

//            $(window).load(function(){
  //              swal({
    //                title: "Welcome in SynStock Project",
      //              text: "สวัสดีเราจะทำให้งานสินค้าหลังร้านของคุณง่ายขึ้น เริ่มต้นกับเราเลย"
        //        });
          //  });



      });
  </script>
@endsection
