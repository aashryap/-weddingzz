<?php
    
	session_start();
	if(!$_SESSION['login'])
  {
    header('Location:login.php');
  }
  else{
   $customername = $_SESSION['name'];
   echo $customername;
   $customeremail = $_SESSION['email'];
   echo $_SESSION['email'];
   $username = "root";
	  $password = "";
	  $database = "userdatabase";
	  $server = "127.0.0.1";
	  $db_handle = mysql_connect($server,$username,$password);
	  $dbfound = mysql_select_db($database);
	  if($dbfound)
	  {
		 $tablename = $_GET['name']."order";
		 $date = $_GET['date'];
		 $contact = $_GET['contact'];
         $tablename = str_replace(' ','',$tablename);
          echo "$tablename";		 
	    echo "database found";
		$sql = "insert into $tablename(customername,email,contact,hiredate) values('$customername','$customeremail','$contact','$date')";
		if(mysql_query($sql))
		{
			echo "record inserted";
		}
		else{
			echo "sorry there was a problem"; 
		}
  }
 }
?>