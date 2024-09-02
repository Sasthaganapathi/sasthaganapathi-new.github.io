<?php 
include('header.php');
$users = $obj->getUsers();
$sn=1;
if(isset($_POST['update'])){

    $user = $obj->getUserById();
    $_SESSION['user'] = pg_fetch_object($user);
    header('location:edit.php');
}
if(isset($_POST['delete'])){

   $ret_val = $obj->deleteuser();
   if($ret_val==1){
       
      echo "<script language='javascript'>";
      echo "alert('Record Deleted Successfully'){
          window.location.reload();
      }";
      echo "</script>";
  }
}
if(isset($_POST['pdf'])){
	  
}
?>

<div class="container-fluid bg-3 text-center"> 
 <div class="navbar-header">
<img src='<?php echo "data:image/jpeg;base64,".$_SESSION["image"];?>' alt="test" style="height:50px; border-radius:50%; " ></div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color:black" style="margin-top:30px"" href="#">WELCOME <?php echo strtoupper($_SESSION["username"]); ?></a>
    </div>
	<div class="row"><a href="pdf.php" class="btn btn-primary pull-right" target="_blank" style="margin-top:-30px;margin-bottom:5px;margin-right:30px;"><span class="glyphicon glyphicon-plus-sign"></span>GET PDF</a>
  <a href="insert.php" class="btn btn-primary pull-right" style="margin-top:-30px;margin-bottom:5px;margin-right:5px;"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp; Add Record</a>
  </div>
  
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
            <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($user = pg_fetch_object($users)): ?>   
      <tr align="left">
        <td ><?=$sn++?></td>
        <td><?=$user->name?></td>
        <td><?=$user->email?></td>
        <td><?=$user->mobile_no?></td>
        <td><?=$user->address?></td>
        <td>
            <form method="post">
                <input type="submit" class="btn btn-success" name= "update" value="Update">   
                <input type="submit" onClick="return confirm('Please confirm deletion');" class="btn btn-danger" name= "delete" value="Delete">
                <input type="hidden" value="<?=$user->id?>" name="id">
            </form>
        </td>
      </tr>
    <?php endwhile; ?>   
    </tbody>
  </table>
</div>
 
</div>
</div>  
<?php include('footer.php');?>