<?php 
include('header.php');
if(isset($_POST['submit']) and !empty($_POST['submit'])){
$ret_val = $obj->createUser();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Saved Successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>SAMPLE DATABASE</h3>
  <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-eye-open"></span> View Records</a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">SAMPLE DATABASE</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">
             
             <div class="form-group">
               <label class="control-label col-sm-2">Name:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="name" onKeyPress="return words(event,this)" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">Email:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="email" name="email" required>
               </div>
            </div>
            
             <div class="form-group">
               <label class="control-label col-sm-2">Mobile Number:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="mobileno" maxlength="10" onKeyPress="return telephone(event,this)"  required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Address:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <textarea rows="5" cols="5" class="form-control" name="address" required></textarea>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2"> </label>
               <div class="col-sm-5">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
               </div>
            </div> 
        </div>      
</form>
</div>
</div>  
<script>
function telephone(e,t)    
{
var unicode=e.charCode? e.charCode : e.keyCode;
if(unicode==13 || unicode==47  )
{
 try{t.blur();}catch(e){}
 return true;
}
if (unicode!=8 && unicode !=9 && unicode !=32 && unicode!=45 && unicode!=43 )
{

if (unicode<48  || (unicode>57 )  )
return false
}
}

function words(e,t)    
{
var unicode=e.charCode? e.charCode : e.keyCode;
if(unicode==13  )
{
try{t.blur();}catch(e){}
return true;
}
if (unicode!=8 && unicode !=9 && unicode !=32 && unicode!=47 && unicode!=46 && unicode!=44 && unicode!=45 && unicode!=38 )
{
if (unicode<65 || (unicode>90 && unicode<97) || unicode>122)
return false
}
}
</script>

 <?php include('footer.php');?>