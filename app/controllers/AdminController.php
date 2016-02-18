<?php
  /**
   *
   */
  class AdminController extends Controller
  {
    public function getIndex()
    {
      return View::make('admin.main.welcomehome');
    }
    public function getStart()
    {
      return View::make('admin.main.startform');
    }
  }


 ?>
