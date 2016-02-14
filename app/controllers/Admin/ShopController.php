<?php
  /**
   *
   */
  class Admin_ShopController extends Controller
  {
    public function getCreatenewshop()
    {
      return View::Make('admin.shop.newshop');;
    }

    public function getShopview()
    {
      $data = array('mastershop' => Shop::where('shop_type','=','master')
      ->first()
    );
      return View::make('admin.shop.showallshop',$data);
    }

    public function getShopdetails($id)
    {
      $data = array('shop' => Shop::where('shop_type','=','master')
      ->first()
    );
      return View::make('admin.shop.shopdetails',$data);
    }


    public function postNewshop()
    {
      $inputs = Input::all();
      if (!empty($inputs['nameshop'])) {

        $photoNewName = null;

            // upload photo
              if (Input::hasFile('logoshop')) {
                $photo = Input::file('logoshop');
                $photoNewName = 'logo.'.$photo->getClientOriginalExtension();

                $photo->move('image/shop',$photoNewName);

              }

              $shop = new Shop();
              $shop->shop_type = $inputs['typeshop'];
              $shop->shop_branchname = $inputs['branchname'];
              $shop->shop_name = $inputs['nameshop'];
              $shop->shop_nameEng = $inputs['nameshopeng'];
              $shop->shop_taxid = $inputs['taxshop'];
              $shop->shop_address1 = $inputs['addressshop1'];
              $shop->shop_address2 = $inputs['addressshop2'];
              $shop->shop_address3 = $inputs['addressshop3'];
              $shop->shop_tel = $inputs['telshop'];
              $shop->shop_fax = $inputs['faxshop'];
              $shop->shop_lineid = $inputs['lineidshop'];
              $shop->shop_email = $inputs['emailshop'];
              $shop->shop_website = $inputs['websiteshop'];
              $shop->shop_facebook = $inputs['facebookshop'];
              $shop->shop_wifiname = $inputs['wifinameshop'];
              $shop->shop_wifipass = $inputs['wifipassshop'];
              $shop->shop_logo = $photoNewName;
              $shop->save();
              return Redirect::to('admin')->with('alert', 'สร้างข้อมูลร้านสำเร็จ');
      }

      return Redirect::back();
    }
  }

 ?>
