<?php
include('connection.php');
include_once __DIR__ .'/vendor/autoload.php';
$mpdf=new \Mpdf\Mpdf();
 $sql ="select * from public.user ORDER BY id ";
 //echo $sql;
   $users=pg_query($sql);
   $sn=1;
   
$tab='
<html>
<head>
<style>
    /* Define table borders */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    td {
        border: 1px solid black; /* Set border for table cells */
        padding: 8px;
        text-align:center; /* Center-align content within cells */
    }
	th
	{
		border: 1px solid black; /* Set border for table cells */
        padding: 8px;
        text-align:center; /* Center-align content within cells */
	}

</style>
<body>
  <div class="panel panel-primary">
        <div class="panel-heading"  align="center"><h4>SAMPLE DATABASE</h4></div>             
            <div class="panel-body">
            <table class="table table-bordered table-striped">
    <thead>
      <tr class="active">
            <th>Sr. No.</th>  
            <th >Name</th>       
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Address</th>
      </tr>';
	  $i=1;
	  while($user = pg_fetch_object($users)){
	  $tab.='
    </thead>
    <tbody>
    <?php while($user = pg_fetch_object($users)): ?>   
      <tr align="left">
        <td >'.$sn++.'</td>
        <td>'.$user->name.'</td>
        <td>'.$user->email.'</td>
        <td>'.$user->mobile_no.'</td>
        <td>'.$user->address.'</td>
      </tr>';
	  $i++;
	  }   
$tab.=' 
 </tbody>
  </table>
</div>
 
</div>
</div>
</body>
</head>
</html>  ';

$mpdf->WriteHTML($tab);
$mpdf->Output();
?>