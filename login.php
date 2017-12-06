<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Signin</title>

<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap-theme.min.css" >
<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.min.css" >
<script src="bootstrap-3.3.6-dist\js\bootsrap.min.js"></script>
</head>
<?php
     if(isset($_POST['signin']))
	 {  
      $username = "root";
	  $password = "";
	  $database = "userdatabase";
	  $server = "127.0.0.1";
	  $db_handle = mysql_connect($server,$username,$password);
	  $dbfound = mysql_select_db($database);
	  if($dbfound)
	  {
	    echo "databasefound";
		$email = $_POST['signinemail'];
		$email = htmlspecialchars($email);
		$password = $_POST['signinpassword'];
		$password  = htmlspecialchars($password);
	    //$password = md5($password);
		$sql = "select * from usertable where email='$email' and password='$password'";
		$result = mysql_query($sql);
		
		if($result)//logout vala baki he
		  {
		    $num_rows = mysql_num_rows($result);
			echo $num_rows;
			if($num_rows == 1)
			 { 
			     while($row = mysql_fetch_array($result))
				 {
				   $name  = $row['name'];
				 }
			    echo "logged in";
			    echo $email;
		        echo $password; 
			   session_start();
               $_SESSION['login'] = "1";
			   $_SESSION['email'] = $email;
			   $_SESSION['name'] = $name;
			   //$_SESSION['name'] = ''; 
               header ("Location: dashboard.php");

             //}
		     }
			 else
			 {
			    echo "Wrong username or password";
			    $_SESSION['login'] = "";
			 }
		  }
		 else
		  {
		    echo "Error";
		  }  
	  }
	  else
	  {
	    echo "database not found";
	  }
	  
	 } 
	 else{
	  echo  "php script not working";
	 }
	  
?>

<body>

<div class="container">
   <div class="jumbotron" style="background-color:#ec5f5f">
       <h1 style="text-align:center">Sign in</h1>
   </div>
   <form role="form" method="post"> 
      <div class="form-group">
	    <div class="row">
	       <div class="col-lg-4 col-xs-12" style="text-align:center">
	           <label for="signinemail">Email</label>
	       </div>
			<div class="col-lg-8 col-xs-12">
		       <input type="email" class="form-control" id="signupemail" name="signinemail" placeholder="your  email">
	        </div>
		</div>
	  </div>
	  
	   <div class="form-group">
	    <div class="row">
		   <div class="col-lg-4 col-xs-12"   style="text-align:center">  
	          <label for="signinpassword">password</label>
		    </div>
			<div class="col-lg-8 col-xs-12">
		      <input type="password" class="form-control" id="signinpassword" name="signinpassword" placeholder="Your password">
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
			   <button type="submit" class="btn btn-lg" name="signin" form-control" id="signinsubmit" style="background-color:#ec5f5f;width:100%">Sign in              </button> 
		    </div>
		</div>
	  </div> 	
  </form>  
</div>

</body>

</html>
