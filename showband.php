<?php
$username = "root";
	  $password = "";
	  $database = "userdatabase";
	  $server = "127.0.0.1";
	  $db_handle = mysql_connect($server,$username,$password);
	  $dbfound = mysql_select_db($database);
	  if($dbfound)
	  { 
         $name = $_GET['name'];
         echo $name;
		 $sql = "select spname,spaddress,spemail,spcontact from serviceprovider where spname = '$name' ";
         $result = mysql_query($sql);
		 echo "<div class='container'>";
         while($row = mysql_fetch_array($result))
		 {
			 
            //echo "div class='row'" ; 			 
		  	 echo $row['spname'];
			 echo $row['spemail'];
			 echo $row['spaddress'];
			 echo $row['spcontact'];
		 }			 
	  } 
?>   
<html>
<script>
 alert(localStorage.getItem("name"));
</script>
</html>