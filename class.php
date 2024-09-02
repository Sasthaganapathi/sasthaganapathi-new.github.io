<?php
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