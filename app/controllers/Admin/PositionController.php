<?php
  /**
   *
   */
  class Admin_PositionController extends Controller
  {
    public function getIndex()
    {
      /// Show group employee page /////////

        $data = array('employeedata' => Employee::all()

       );

        return View::make('admin.employee.groupemployee',$data);

    }
  }


 ?>
