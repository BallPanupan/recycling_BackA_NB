<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Http\Requests;

use App\members;

class PriceDateController extends Controller
{
    public function Price(request $request,$username){
      $sql="select * from tb_products";
      $data['result']=DB::select($sql);

      $data2['username']=$username;

      return view('Price_view',$data,$data2);
  }

}
