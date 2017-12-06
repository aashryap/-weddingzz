<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dashboard</title>
<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap-theme.min.css" >
<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.min.css" >
<script src="bootstrap-3.3.6-dist\js\bootsrap.min.js"></script>
 <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'> 
 <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Unica One' rel='stylesheet' type='text/css'>
 </head>
<?php
session_start();
  if(!$_SESSION['login'])
  {
    header('Location:login.php');
  }
  else{
  echo $_SESSION['name'];
  echo $_SESSION['email'];
   $username = "root";
	  $password = "";
	  $database = "userdatabase";
	  $server = "127.0.0.1";
	  $db_handle = mysql_connect($server,$username,$password);
	  $dbfound = mysql_select_db($database);
	  if($dbfound)
	  { 
        $customername = $_SESSION['name'];
		$customeremail = $_SESSION['email'];
         $sql = "select servicename,saddress from shortlistedservices where customername ='$customername' AND customeremail = '$customeremail' "; 
	     $result = mysql_query($sql);
		 echo "<div class='container'>
                  <div class='row' style='background-color:' >
	                <div class='col-xs-12' style='font-family:Pacifico;font-size:100px;text-align:center;color:#ec5f5f'>Your selections</h1>
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
					      <a href='dashboard.php' style='color:black'>Your dashboard</a> 
					  </li>
					  
					   <li class='dropdown'>
					      <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false' style='color:black'>Categories<span class='caret'></span></a> 
					                <ul class='dropdown-menu navbar-right' role='menu'>
									     <li><a href='bands.php' style='color:black'>Bands</a></li>
										 <li><a href='bands.php' style='color:black'>Caterer</a></li>
										 <li><a href='#' style='color:black'>Venues</a></li>
										 <li><a href='#' style='color:black'>Photographer</a></li>
										 <li><a href='#' style='color:black'>DJ</a></li>
                                        <li><a href='#' style='color:black'>Pandit</a></li>										 
								   </ul>
					  </li>
					  </li>
					  
					  <li>
					      <a href='login.php' style='color:black'>Login</a> 
					  </li>
					  <li>
					      <a href='signup.php' style='color:black'>signup</a> 
					  </li>
					
				  </ul>
			   </div>
           </div>		   
	   </nav>
	  
      	  "	;
		 while($row = mysql_fetch_array($result))
		 {
		    //echo $row['servicename'] 
			//echo $row['saddress'];
			echo "<div class='shortlisted-service'>
	        <div class='row'>
		     <div class='col-xs-12 col-lg-1'>
			 </div>
			 <div class='col-xs-12 col-lg-11'>";
			       echo "<h3 style='font-family:Amaranth;cursor:pointer' onclick='gotoservicepage(this)'>".$row['servicename']."</h3>";
		    echo  "</div>
		 </div>	 
		 <div class='row'>
		     <div class='col-xs-12 col-lg-1'>
			 </div>
			 <div class='col-xs-12 col-lg-11'>";
			       echo "<h3 style='font-family:Amaranth;cursor:pointer'>".$row['saddress']."</h3>";
		     echo  "</div>
		 </div>	 
		
	   </div>";
       
		 }
		echo "</div>"; 
     }
  }
?>
<style>
   div.shortlisted-service{
	 border-bottom:solid;
	 border-bottom-color:#ec5f5f;
	 padding-bottom:20px; 
	 margin-top:20px;
	   }
	button.button-style{
	  width:100%;
	  background-color:#ec5f5f;
	  margin-top:10px;  
	}   
</style>


<body>
  <script>
  /* function dashboard_load()
  { 
   alert("in function dashboard_load");
   var xml = new XMLHttpRequest();
	          xml.open('GET',"dashboard_ajaxcall.php",true);
			  alert("after xml.open");
		      xml.onreadystatechange = function(){
			    alert("onreadystate change");
	          if(xml.readyState == 4 && xml.status == 200)
		        {
				   alert(xml.readyState);
				   //document.getElementById("div1").innerHTML = xml.responseText;
			        	   
				//	alert(xml.responseText);//absurd json formate
	                //var mynumber = 10;
                    //var arr = new Array(mynumber);

                     alert(xml.responseText);
					 var array = xml.responseText;
					 alert(array.length);
					 alert(JSON.parse(xml.responseText));
						 
                      
                      					   
				 //var xml2  = new XMLHttpRequest();
				 //alert("after xml2");
				 //xml2.open('GET',"dashboard.php?info="+info,true);
			   }
      	  }
	   xml.send();
  }*/
  function gotoservicepage(obj)
  {
	   //alert("in the function"); 
	  var name = obj.innerHTML;
       
	   //name = name+ ".php";
        //name = name.replace(' ', '');	   
         	   //alert(name);
			   if(typeof(Storage)!== "undefined")
			   {
				   localStorage.setItem("name",name);
				   //alert(localStorage.getItem("name"));		   
			   }
			  window.location.href = "showband1.php?name="+name;
	   //window.open(name,'_self');  
  }
</script>
  <!--<div class="container">
    <div class="jumbotron" style="background-color:#ec5f5f" >
	   <h1>Your selections</h1>
	</div>
	 <div class="shortlisted-service">
	     <div class="row">
		     <div class="col-xs-12 col-lg-1">
			 </div>
			 <div class="col-xs-12 col-lg-11">
			       <h3>Name of service</h3>
		     </div>
		 </div>	 
		 <div class="row">
		     <div class="col-xs-12 col-lg-1">
			 </div>
			 <div class="col-xs-12 col-lg-11">
			       <h3>Address</h3>
		     </div>
		 </div>	 
		 <div class="row">
			 <div class="col-xs-12 col-lg-4">
			 </div>
			 <div class="col-xs-12 col-lg-4">
			        <button class="btn btn-lg button-style">
					    Hire
					</button>			 
			 </div>
			 <div class="col-xs-12 col-lg-4">
			        <button class="btn btn-lg button-style">
					     Remove
					</button>
			 </div>
		 </div>	 
	   </div>--> 
	
	
 </div>
</body>
</html>
