<?php
//error_reporting(0);
include_once('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
		$name=$_POST['name'];
        $password = $_POST['password'];
		$email=$_POST['emailid'];
		$gender=$_POST['gender'];
		$cpassword=$_POST['cpassword'];
		$contact=$_POST['contact'];
		$contact2=$_POST['contact2'];
		$mm=$_POST['mm'];
		$yyyy=$_POST['yyyy'];
		$dd=$_POST['dd'];
		$image=$_FILES['image']['tmp_name'];
		if(!empty($name) && !empty($password)){
		if($password==$cpassword){
			$image_data=file_get_contents($image);
			$image_data=base64_encode($image_data);
		$sql="INSERT INTO user1(user_name,password,email,gender,contact,alt,mm,dd,yyyy,image,users,name)VALUES('".$username."','".$password."','".$email."','".$gender."','".$contact."','".$contact2."','".$mm."','".$dd."','".$yyyy."','".$image_data."','public','".$name."') ";
		$stmt=pg_query($sql);
		}
		if($stmt){
		  echo '<script type="text/javascript">'; 
    echo 'alert("Record Saved Successfully");'; 
    echo 'window.location.href = "mainlogin.php";';
    echo '</script>';
		}

			else {
					  echo '<script type="text/javascript">'; 
			echo 'alert("password mismatch");';
			 echo '</script>';
		}
		}
			
			else {
					  echo '<script type="text/javascript">'; 
			echo 'alert("username and password must");';
			 echo '</script>';
			}
}
?>
<html>
<head>
<title>Sign up</title>
<link href="signup1.css" rel="stylesheet" id="bootstrap-css">
<script src="signup2.js"></script>
<script src="signup3.js"></script>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="container">
	<div class="row">
    <div class="col-md-8">
      <section>      
        <h1 class="entry-title"><span><center>Sign Up</center></span> </h1>
        <hr>
            <form  action="signup.php" class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" >        
        <div class="form-group">
          <label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" value="" required>
            </div>
            <small> Your Email Id is being used for ensuring the security of your account, authorization and access recovery. </small> </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-3">Set Password <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="password" id="password" placeholder="Choose password (5-15 chars)" value="" required>
           </div>   
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Confirm Password <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm your password" value="" required>
            </div>  
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">username<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="username" id="mem_name" placeholder="Enter your username here" value="" required>
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3"> Name<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="name" id="mem_name" placeholder="Enter your Name here"  onKeyPress="return words(event,this)" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Date of Birth <span class="text-danger">*</span></label>
          <div class="col-xs-8">
            <div class="form-inline">
              <div class="form-group">
                <select name="dd" class="form-control" required>
                  <option value="">Date</option>
                  <option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7" >7 </option><option value="8" >8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
              </div>
              <div class="form-group">
                <select name="mm" class="form-control" required>
                  <option value="">Month</option>
                  <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
              </div>
              <div class="form-group" >
                <select name="yyyy" class="form-control" required>
                  <option value="0">Year</option>
                  <option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Gender <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <label>
            <input name="gender" type="radio" value="Male" checked >
            Male </label>
               
            <label>
            <input name="gender" type="radio" value="Female" >
            Female </label>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Contact No. <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
          	<div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="contact" id="contactnum" placeholder="Enter your Primary contact no."  minlength="10" maxlength="10" onKeyPress="return telephone(event,this)" value="" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Alternate No. <br>
          <small>(optional)</small></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="contact2" id="contactnum2" placeholder="Any other number (if any)" minlength="10" maxlength="10" onKeyPress="return telephone(event,this)" value="" required>
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3">Profile Photo<span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group"> <span class="input-group-addon" id="file_upload"><i class="glyphicon glyphicon-upload"></i></span>
              <input type="file" name="image" id="image" class="form-control upload" placeholder="" aria-describedby="file_upload" required>
            </div>
			</div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger">Note:-</span> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Policy</a>, including our <a href="#">Cookie Use</a>.</span> </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input name="Submit" type="submit" value="Sign Up" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
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
</script
</body>
</html>