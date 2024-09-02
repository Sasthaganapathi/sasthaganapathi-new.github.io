
<?php
include_once('connection.php'); 
include("adminheader.php");
if(isset($_POST['delete']) && 'Delete' ){
	print_r($_POST);
	$sql="delete from user1 where id='".$_POST['rec_id']."'";
	
	$stmt=pg_query($sql);
	if($stmt==1){
		echo "<script language='javascript'>";
      echo "alert('Record Deleted Successfully'){
          window.location.reload();
      }";
      echo "</script>";
	}
}
?>

<div class="container-fluid bg-3 text-center">    
  <h3>USER DATABASE</h3>
  <br>
    <form method="post">  
  <div class="panel panel-primary">
        <div class="panel-heading">SAMPLE DATABASE</div>
            <div class="panel-body">
            <table class="table table-bordered table-striped">
    <thead>
      <tr class="active">
            <th>Sr. No.</th>
            <th> Username</th>			
            <th >Name</th>       
            <th>Email</th>
			<th>Date of Birth</th>
            <th>Mobile Number</th>
            <th>image</th>
            <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
$sql ="select encode(image,'base64')as image ,user_name,email,contact,id,users,dd,mm,yyyy,name  from user1 ORDER BY id DESC";
$user= pg_query($sql);
$i=1;
$sn=1;
	while($user1 = pg_fetch_object($user))
	{ 
	$img= base64_decode($user1->image);
if($user1->users=='public' && $user1->users!='admin'){	
	?>  
      <tr align="left">
        <td ><?=$sn++?></td>
        <td><?=$user1->user_name?></td>
		<td><?=$user1->name?></td>
        <td><?=$user1->email?></td>
		<td><?=$user1->dd?>-<?=$user1->mm?>-<?=$user1->yyyy?></td>
        <td><?=$user1->contact?></td>
        
        <td width="10%" height="10%" align="center">
		<img src='<?php echo "data:image/jpeg;base64,".$img;?>' alt="test" style="height:80px;" >
		</td>
		         <td>
           
                <input type="button"  onclick="delete_row(<?php echo $user1->id ?>)" class="btn btn-danger" name= "delete" value="Delete">
               
            
        </td>
      </tr>
    <?php 
	$i++;
	}
}?>   
    </tbody>
  </table>
</div>
 
</div>
</form>
</div>  
<?php include('footer.php');?>
<script src="mainlogin1.js"></script>
<script src="mainlogin2.js"></script>
<script>
function delete_row(id){
	var id=id;
	$.ajax({
url: "delete_ajax.php",
type: "POST",
data: {
id:id
},
cache: false,
success: function(result){

if(result == 0)
{
alert("success");
window.location.reload();
return false;
}
else
{
alert("fail");
return false;
}


}   
	
	
	
});
}

</script>