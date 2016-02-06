<?php
    /**
     *
     */
    class Admin_EmployeeController extends Controller
    {
      public function getIndex()
      {
        return "employee Index";
      }

      public function getAddemployee()
      {
        return View::make('admin.employee.addemployee');
      }

      public function getUpdateemployee($id)
      {
        $data = array('employeedata' => Employee::where('emp_ID','=',$id)
        ->first()

       );
        return View::make('admin.employee.editemployee',$data);
      }



      public function getShowallemployee()
      {
        $data = array('employee' => Employee::all()

       );

        return View::make('admin.employee.showallemployee',$data);
      }

      public function getShowemployee($id)
      {
        $data = array('employeedata' => Employee::where('emp_ID','=',$id)
        ->first()

       );

        return View::make('admin.employee.showemployee',$data);
      }


      public function postAddnewemp()
      {
        $inputs = Input::all();
        if (!empty($inputs['fullname'])) {

          $photoNewName = null;

              // upload photo
                if (Input::hasFile('photo')) {
                  $photo = Input::file('photo');
                  $photoNewName = date('YmdHis').'.'.$photo->getClientOriginalExtension();

                  $photo->move('image/employee',$photoNewName);

                }

    						$employee = new Employee();
                $employee->emp_name = $inputs['fullname'];
                $employee->emp_idcard = $inputs['cardid'];
                $employee->emp_address = $inputs['address'];
                $employee->emp_tel = $inputs['tel'];
                $employee->emp_lineid = $inputs['lineid'];
                $employee->emp_email = $inputs['email'];
                $employee->emp_image = $photoNewName;
                $employee->emp_username = $inputs['username'];
                $employee->emp_password = Hash::Make($inputs['password']);
    						$employee->save();
    						return Redirect::to('admin/employee/showallemployee')->with('alert', 'Save Completed');
    		}

    		return Redirect::back();
      }

      public function postUpdateemp()
      {
        {
          $inputs = Input::all();

          $employee = Employee::find($inputs['id']);
          if (is_object($employee)) {

            $photoNewName = $employee->emp_image;
            // upload photo
            if (Input::hasFile('photo')) {
              $photo = Input::file('photo');
              $photoNewName = date('YmdHis').'.'.$photo->getClientOriginalExtension();
              if (file_exists('image/employee/'.$employee->emp_image)) {
                File::delete('image/employee/'.$employee->emp_image);
              }
              $photo->move('image/employee',$photoNewName);

            }

            $employee->emp_name = $inputs['fullname'];
            $employee->emp_idcard = $inputs['cardid'];
            $employee->emp_address = $inputs['address'];
            $employee->emp_tel = $inputs['tel'];
            $employee->emp_lineid = $inputs['lineid'];
            $employee->emp_email = $inputs['email'];
            $employee->emp_image = $photoNewName;
            $employee->emp_username = $inputs['username'];
            $employee->emp_password = Hash::Make($inputs['password']);
            $employee->save();

            	return Redirect::to('admin/employee/showallemployee')->with('alert', 'Save Completed');

          }

        }
      }

      public function getDelete($id)
      {
        $employee = Employee::find($id);
        if (is_object($employee)) {
            File::delete('image/employee/'.$employee->emp_image);
            $employee->delete();
        }

         return Redirect::to('admin/employee/showallemployee')->with('message', 'Delete Completed');
      }

    }


 ?>
