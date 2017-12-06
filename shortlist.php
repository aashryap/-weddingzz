<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>
<?php
/* Rajkumar.php se nam utha k lana he loggedin user ka*/ 
?>
<?php
   //echo "test.php running";
   $name = $_GET['name'];
   //$address = $_GET['address'];
      $username = "root";
	  $password = "";
	  $database = "userdatabase";
	  $server = "127.0.0.1";
	  $db_handle = mysql_connect($server,$username,$password);
	  $dbfound = mysql_select_db($database);
	  if($dbfound)
	  {
	    
		echo $name;
		$sql = "select * from serviceprovider where spname='$name'";
	    $result  =	mysql_query($sql);
		while($row = mysql_fetch_array($result))
		 {
			 session_start(); 
			$customername = $_SESSION['name'];
            $customeremail = $_SESSION['email'];			
		    $bname = $row['spname'];
			echo $bname;
			$baddress = $row['spaddress'];
			echo $baddress;
			$sql2 = "insert into shortlistedservices(servicename,saddress,customername,customeremail) values('$bname','$baddress','$customername','$customeremail')";
			if(mysql_query($sql2))
			{
			  echo "success";
			}	
			else
			{
			  echo "unsuccessfull";
			}
	     }
	  }
	 else
	 {
	   echo "db not found";
	 } 	  
?>

<body>
</body>
</html>
