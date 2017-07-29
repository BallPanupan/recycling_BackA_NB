
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')
<div class="row">
      <nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
        <div class="container">
              <div class="col-md-4">

              </div>

              <div class="col-md-4">
                <center><button type="submit" class="btn btn-warning" onclick="home/<?=$username?>" ><?=$username?></button></center>
              </div>

              <div class="col-md-4">
                <button type="submit" class="btn btn-danger" onclick="window.location.href='../logout'" >Logout</button>

              </div>
        </div>
      </nav>
</div>

@endsection

@section('content')

<div class="row">
<br/>

<div class="col-md-4">

</div>

<div class="col-md-4">
    <?php
      $total_thb=0;
        foreach ($result as $row) {
            $id_order=$row->id_order;
            $fullname=$row->fullname;
            $total=$row->total;

            $total_thb=$total_thb + $total;
          }
    ?>
    <center>
              <h3><span class="label label-warning" ><?php echo "$total_thb";?> บาท</span> <span class="label label-warning" >10 Point</span></h3>
      <?php
      $link1=url('home/'.$username.'/price_date');
      ?>

      <h3>
        <span class="label label-success" ><a href="<?=$link1?>" style="color:white">ราคาตอนนี้</a></span>

      </h3>

          <img src="..\..\img\price.jpg"  alt="Cinque Terre" width="100%"><p><p>
          <img src="..\..\img\price.jpg"  alt="Cinque Terre" width="100%">



        </center>
</div>

<div class="col-md-4">
  <center>
      <h3>
        <span class="label label-warning" >ประวัติการขาย</span>
      </h3>
        <table border=1 width="100%">
      <tr bgcolor=#E8E8E8>
        <td><center><b>รหัส</b></center></td>
        <td><center><b>username</b></center></td>
        <td><center><b>ราคารวม</b></center></td>
        <td><center><b>แสดง</b></center></td>
      </tr>

      <?php

      foreach ($result as $row) {
          $id_order=$row->id_order;
          $fullname=$row->fullname;
          $total=$row->total;

          $link1=url('order/view/'.$id_order);

         echo "<tr>
          <td><center>$id_order</center></td>
          <td>$fullname</td>
          <td>$total</td>
                 <td><a href='$link1' target='_blank'>แสดง</a></td>
        </tr>";
      }
      ?>

      </table>
    </center>
</div>

</div>


@endsection

@section('footer')

@endsection
