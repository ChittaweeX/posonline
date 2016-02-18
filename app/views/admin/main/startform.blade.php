@extends('admin.default_admin_layout')
@section('title')
  Start | Backend
@endsection
@section('extendscss')

<link href="{{ url('assets/css/plugins/steps/jquery.steps.css') }}" rel="stylesheet">
@endsection
@section('customcss')
@endsection
@section('pageheader')

@endsection
@section('pagecontent')
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
          <div class="col-lg-12">
              <div class="text-center m-t-lg">
                <h1>
                    ตั้งค่าข้อมูลร้าน
                </h1>
                <h3>
                    Web Appilcation ที่จะทำให้งานสินค้าหลังร้านของคุณง่ายขึ้น
                </h3>
                </div>
          </div>
      </div>
  </div>
<div class='row text-center'>

    <form id="wizard" action="{{ url('admin') }}" class="wizard-big form-horizontal" method="get">
      <h1>First Step</h1>
      <div class="step-content">
          <div class="text-center m-t-md">
          <h2> Username และ Password </h2>
          <p>
            ในการเข้าใช้งาน Username Password นี้จะมีสิธสูงที่สุดในการจัดการระบบหลังร้านทั้งหมด
          </p>
          <div class="form-group">
            <label class="col-lg-5 control-label">Username :</label>
            <div class="col-lg-3"><input type="text" class="form-control">
        </div>
        </div>
        <div class="form-group">
          <label class="col-lg-5 control-label">Password :</label>
          <div class="col-lg-3"><input type="text" class="form-control">
      </div>
      </div>
          </div>
      </div>

      <h1>Second Step</h1>
      <div class="step-content">
          <div class="text-center m-t-md">
              <h2>This is step 2</h2>
              <p>
                  This content is diferent than the first one.
              </p>
          </div>
      </div>

      <h1>Third Step</h1>
      <div class="step-content">
          <div class="text-center m-t-md">
              <h2>This is step 3</h2>
              <p>
                  This is last content.
              </p>
          </div>
      </div>
      <h1>Third Step</h1>
      <div class="step-content">
          <div class="text-center m-t-md">
              <h2>This is step 3</h2>
              <p>
                  This is last content.
              </p>
          </div>
      </div>
    </form>



</div>
@endsection
@section('extendsjs')

  <!-- Steps -->
  <script src="{{ url('assets/js/plugins/staps/jquery.steps.min.js') }}"></script>
@endsection
@section('customjs')
  <script>
          $(document).ready(function(){
              $("#wizard").steps({
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
              });

         });
      </script>
@endsection
