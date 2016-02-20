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
                    ตั้งค่าข้อมูลเพื่อเริ่มต้น
                </h1>
                <h3>
                    Web Appilcation ที่จะทำให้งานสินค้าหลังร้านของคุณง่ายขึ้น
                </h3>
                </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="ibox">
          <div class="ibox-content">
              <form id="form" action="#" class="wizard-big">
                  <h1>ตั้งรหัสผ่าน</h1>
                  <fieldset>
                      <h2>ผู้ใช้ระดับสูงสุด Master User</h2>
                      <div class="row">
                          <div class="col-lg-8">
                              <div class="form-group">
                                  <label>Username *</label>
                                  <h2>Administrator</h2>
                              </div>
                              <div class="form-group">
                                  <label>รหัสลับ *</label>
                                  <input id="password" name="password" type="password" class="form-control required">
                              </div>
                              <div class="form-group">
                                  <label>กรอกรหัสอีกรอบ *</label>
                                  <input id="confirm" name="confirm" type="password" class="form-control required">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="text-center">
                                  <div style="margin-top: 20px">
                                      <i class="fa fa-lock" style="font-size: 180px; "></i>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </fieldset>
                  <h1>ประเภทร้าน</h1>
                  <fieldset>
                      <h2>เลือกประเภทของร้านค้า</h2>
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="form-group">
                                  <select class="form-control" name="">
                                    <option>ร้านค้าทั่วไป</option>
                                  </select>
                              </div>
                          </div>

                      </div>

                  </fieldset>

                  <h1>ข้อมูลร้านค้า</h1>
                  <fieldset>
                      <h2>กรอกข้อมูลร้านค้าพื้นฐาน</h2>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label>ชื่อร้าน</label>
                                  <input id="shopname" name="shopname" type="text" class="form-control required">
                              </div>
                              <div class="form-group">
                                  <label>ชื่อร้านภาษาอังกฤษ</label>
                                  <input id="shopnameEng" name="shopnameEng" type="text" class="form-control required">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label>ที่อยู่</label>
                                  <input id="adress1" name="adress1" type="text" class="form-control required">
                              </div>
                              <div class="form-group">
                                  <label>ตำบลและอำเภอ</label>
                                  <input id="address2" name="address2" type="text" class="form-control required">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label>Tax Id</label>
                                  <input id="taxid" name="taxid" type="text" class="form-control required">
                              </div>
                              <div class="form-group">
                                  <label>เบอร์โทรร้าน</label>
                                  <input id="telshop" name="telshop" type="text" class="form-control required">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label>จังหวัด</label>
                                  <input id="provice" name="provice" type="text" class="form-control required">
                              </div>
                              <div class="form-group">
                                  <label>รหัสไปรษณี</label>
                                  <input id="postcode" name="postcode" type="text" class="form-control required">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label>Fax </label>
                                  <input id="fax" name="fax" type="text" class="form-control ">
                              </div>
                              <div class="form-group">
                                  <label>Line ID</label>
                                  <input id="lineid" name="lineid" type="text" class="form-control ">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label>Email</label>
                                  <input id="email" name="email" type="text" class="form-control required">
                              </div>
                              <div class="form-group">
                                  <label>Website</label>
                                  <input id="website" name="website" type="text" class="form-control ">
                              </div>
                          </div>
                      </div>
                  </fieldset>

                  <h1>Finish</h1>
                  <fieldset>
                      <h2>Terms and Conditions</h2>
                      <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                  </fieldset>
              </form>
          </div>
          <br>
      </div>

</div>
@endsection
@section('extendsjs')

  <!-- Steps -->
  <script src="{{ url('assets/js/plugins/staps/jquery.steps.min.js') }}"></script>
  <!-- Jquery Validate -->
    <script src="{{ url('assets/js/plugins/validate/jquery.validate.min.js') }}"></script>
@endsection
@section('customjs')
  <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>
@endsection
