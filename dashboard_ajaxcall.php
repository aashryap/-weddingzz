
<?php
  //$info = $_GET['info'];
  //echo "inside dashboard.php"."<br>";
  //echo $info;
  /*session_start();
  if(!$_SESSION['login'])
  {
    header('Location:login.php');
  }*/
  //echo $_SESSION['email'];
  //echo $_SESSION['name'];
      $username = "root";
	  $password = "";
	  $database = "userdatabase";
	  $server = "127.0.0.1";
	  $db_handle = mysql_connect($server,$username,$password);
	  $dbfound = mysql_select_db($database);
	  if($dbfound)
	  { 
	     $sql = "select servicename,saddress from services"; 
	     $result = mysql_query($sql);
		 //echo "jsonarray";
		 //echo ":";
		 //echo "[";
		 
		 
		 while($row = mysql_fetch_array($result))
		 {
		    //echo $row['servicename'] 
			//echo $row['saddress'];
			//$dashboard_data = JSON_encode($row);
			echo JSON_encode($row);
			echo ",";
			echo " ";
		 }
		 echo "]";
	  }   
?>




