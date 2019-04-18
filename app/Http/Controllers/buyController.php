<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class buyController extends Controller
{
    public function user_buy_action($id){

      ob_start();
      system('ipconfig /all');
      $mycom=ob_get_contents();
      ob_clean();

      $findme = 'Physical';
      $pmac = strpos($mycom, $findme);
      $mac=substr($mycom,($pmac+36),17);


      $data = array('mac_user'=>$mac,'id_barang'=>$id);

      DB::table('tb_cart')->insert($data);

      return redirect()->back();

    }
}
