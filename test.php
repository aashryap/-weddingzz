<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
		$sql = "select * from band where name='$name'";
	    $result  =	mysql_query($sql);
		while($row = mysql_fetch_array($result))
		 {
		    $bname = $row['name'];
			echo $bname;
			$baddress = $row['address'];
			echo $baddress;
			$sql2 = "insert into services(servicename,saddress) values('$bname','$baddress')";
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
