<!DOCTYPE html>
<html>
 <head>
   <link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap-theme.min.css" >
   <link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.min.css" >
   <script src="bootstrap-3.3.6-dist\js\bootsrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Unica One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
	
	
 </head>
 <?php
  session_start();
 if(!$_SESSION['login'])
  {
    header('Location:splogin.php');
  }
  else{
    $username = "root";
	  $password = "";
	  $database = "userdatabase";
	  $server = "127.0.0.1";
	  $db_handle = mysql_connect($server,$username,$password);
	  $dbfound = mysql_select_db($database);
	  if($dbfound)
	  {
		 echo "<div class='container'>
                  <div class='row' style='background-color:' >
	                <div class='col-xs-12' style='font-family:Pacifico;font-size:100px;text-align:center;color:#ec5f5f'>Your Orders</h1>
	             </div>
				 </div>";
		

        
		echo "
           <nav class='navbar navbar-fixed' style='background-color:#ec5f5f;margin-top:30px'>
           <div class='container'>
		       <div class='navbar-header'>
			      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar1'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>						
				  </button>
				  <a class='navbar-brand' href='index1.html'><p style='font-family:Pacifico;color:black'>Weddingzz</p></a>
				  
			   </div>
			   <div class='collapse navbar-collapse' id='navbar1'>
			      <ul class='nav navbar-nav' style='font-family:Unica One;margin-left:50%'>
					 <!-- <li class='active'>
					      <a href='#'>Link<span class='sr-only'>(current)</span></a>
					  </li>-->
					  <li>
					      <a href='spdashboard.php' style='color:black'>Your dashboard</a> 
					  </li>
					  
					   
					  <li>
					     <a href='spprofile.php' style='color:black'>Profile</a> 
					  </li>
					  
					  <li>
					      <a href='login.php' style='color:black'>Logout</a> 
					  </li>
					
					  
					
				  </ul>
			   </div>
           </div>		   
	   </nav>
	  
      	  "	;
		 
		
				   
	    echo "database found";
		  $tablename = $_SESSION['name']."order";
		  $tablename = str_replace(' ','',$tablename);
		  echo $tablename;
		  $count = 0;
		 $sql = "select * from $tablename"; 
	     $result = mysql_query($sql);
		 echo "<div class='table-responsive'>";
		 echo "<table class='table table-striped table-bordered'><thead>";
		 
		 echo "<tr><th>No.</th><th>customername</th><th>Email</th><th>Contact</th><th>hiredate</th></tr></thead>";
		 while($row = mysql_fetch_array($result))
		 { 
	        echo "<tbody>";
	        echo "<tr>";
			echo "<td>".++$count."</td>";
		    echo "<td>".$row['customername']."</td>"; 
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['contact']."</td>";
			echo "<td>".$row['hiredate']."</td>";
			echo "</tr>";
			echo "</tbody>";
		 }
		 echo "</table>";
		 echo "</div>";
         echo "</div>"; 	 

	 }
	  
   }	  
 ?>
</html>