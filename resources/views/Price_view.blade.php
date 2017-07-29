
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')

<div class="row">
      <nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
        <div class="container">
              <div class="col-md-4">

              </div>

              <div class="col-md-4">
                <center><button type="submit" class="btn btn-warning" onclick="window.location.href='../<?=$username?>'" ><?=$username?></button></center>
              </div>

              <div class="col-md-4">
                <button type="submit" class="btn btn-danger" onclick="window.location.href='../../logout'" >Logout</button>

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

      <table border="1" width="100%">
        <tr bgcolor=#E8E8E8>
          <td  width="50%" ><center><b>ประเภท</b></center></td>
          <td ><center><b>ราคา</b></center></td>
          <td><center><b>หน่วย</b></center></td>
        </tr>

      <?php

       foreach ($result as $row) {
           $name_prd = $row->name_prd;
           $price_prd = $row->price_prd;

       echo "<tr>
               <td>$name_prd</td>
               <td ><center>$price_prd</center></td>
               <td><center>กก.</center></td>
         </tr>";
       }
       ?>
     </table>
</div>


<div class="col-md-4">

</div>

</div>


@endsection

@section('footer')

@endsection
