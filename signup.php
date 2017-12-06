<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Signup</title>

<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap-theme.min.css" >
<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.min.css" >
<script src="bootstrap-3.3.6-dist\js\bootsrap.min.js"></script>
</head>
<?php
  if(isset($_POST['signup']))
   {
     echo "post entered";
      $username = "root";
	  $password = "";
	  $database = "userdatabase";
	  $server = "127.0.0.1";
	  $db_handle = mysql_connect($server,$username,$password);
	  $dbfound = mysql_select_db($database);
	  if($dbfound)
	  {
	    echo "database found";
		$name = $_POST['signupname'];
		$name = htmlspecialchars($name);
		$email = $_POST['signupemail'];
		$email = htmlspecialchars($email);
		//$contactnum = $_POST['signupcontactno'];
	    //$contactnum = htmlspecialchars($contactnum);
		$password = $_POST['signuppassword'];
		$password = htmlspecialchars($password);
		//$password = md5($password);
		echo $password;
		$sql1 = "insert into usertable(name,email,password) values('$name','$email','$password')";
		//$sql2 = "create table service(servicename varchar(20),address varchar(20),contact int(10),email varchar(20))";
		/*$check = mysql_query($sql2);
		if($check){
		  echo "table created";
		}
		else
		{
		 echo  "there was a problem";
		}*/
		$result = mysql_query($sql1);
		 if($result)
		 {
		   echo "user registered";
		 }
		 else
		 {
		   echo "sorry there was some problem";
		 }
	  }
	  else
	  {
	    echo "database notfound";
	  }
   }
   else
   {
     echo "error";
   }
?>
<body>

<div class="container">
   <div class="jumbotron" style="background-color:#ec5f5f">
       <h1 style="text-align:center">Sign Up</h1>
   </div>
   
   
   <form role="form" method="post">
      <div class="form-group">
	    <div class="row">
		   <div class="col-lg-4 col-xs-12" style="text-align:center">
		       <label for="signupname">Name</label>
		   </div>
		   <div class="col-lg-8 col-xs-12">
		       <input type="text" class="form-control" id="signupname" name="signupname" placeholder="your name"> 
	       </div>
 		</div>
   </div>	  
      <div class="form-group">
	    <div class="row">
	       <div class="col-lg-4 col-xs-12" style="text-align:center">
	           <label for="signupemail">Email</label>
			</div>
			<div class="col-lg-8 col-xs-12">
		       <input type="email" class="form-control" id="signupemail" name="signupemail" placeholder="your  email">
	        </div>
		</div>
	  </div>
	  <div class="form-group">
	    <!--<div class="row">
		   <div class="col-lg-4 col-xs-12"   style="text-align:center">  
	          <label for="signupcontactno">Contact No.</label>
		    </div>
			<div class="col-lg-8 col-xs-12">
		      <input type="tel" class="form-control" id="signupcontactno" name="signupcontactno" maxlength="10" placeholder="Your phone number">
	        </div>
	    </div>  
	   </div>-->
	   <div class="form-group">
	    <div class="row">
		   <div class="col-lg-4 col-xs-12"   style="text-align:center">  
	          <label for="signuppassword">password</label>
		    </div>
			<div class="col-lg-8 col-xs-12">
		      <input type="password" class="form-control" id="signuppassword" name="signuppassword" placeholder="Your password">
	        </div>
	    </div>  
	   </div>
	   <br>
	   <br>
	  <div class="form-group">
	    <div class="row">
		    <div class="col-lg-4 col-xs-12">
			</div>
			<div class="col-lg-8 col-xs-12">
			   <button type="submit" class="btn btn-lg" id="signupsubmit" name="signup" style="background-color:#ec5f5f;width:100%">Signup</button> 
		    </div>
		</div>
		</div>
	</form>  
</div>
</body>
</html>
