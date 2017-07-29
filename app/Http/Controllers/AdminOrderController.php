<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Http\Requests;

use App\members;

class AdminOrderController extends Controller
{

  public function view($id){
    $sql="select*from tb_order where id_order='$id'";
    $data['result']=DB::select($sql);

    $sql2="select*from tb_detail where id_order='$id'";
    $data['result2']=DB::select($sql2);

    return view('admin.order_view',$data);
  }




}
