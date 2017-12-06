<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bands</title>
<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap-theme.min.css" >
<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.min.css" >
<script src="bootstrap-3.3.6-dist\js\bootsrap.min.js"></script>
 <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'> 
 <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'> 
</head>
<style>
  div.service{
	border-bottom:solid;
	
	border-color:#ec5f5f;
	position:relative;
    padding-top:30px;
	}
button.buttonstyle{
     width:100%;
	 height:100%;
	 background:#ec5f5f;
	 position:relative;
	 bottom:0px;
	}	
</style>
<?php
  session_start();
  if(!$_SESSION['login'])
  {
     header('Location:login.php');
  }
  else
  {
     echo $_SESSION['name'];
	 $username = "root";
	  $password = "";
	  $database = "userdatabase";
	  $server = "127.0.0.1";
	  $db_handle = mysql_connect($server,$username,$password);
	  $dbfound = mysql_select_db($database);
	  if($dbfound)
	  { 
         $sql = "select spname,spaddress from serviceprovider where sptype= 'photographer'"; 
	     $result = mysql_query($sql);
		 echo "<div class='container'>
                 <div class='row' style='background-color:' >
	                <div class='col-xs-12' style='font-family:Pacifico;font-size:100px;text-align:center;color:#ec5f5f'>Photographers</h1>
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
			echo "<div class='service'> 
	  <div class='row' >
		 <div class='col-xs-1'>
		 </div>
		 <div class='col-xs-11 '>";
		 echo "<h3  onclick='gotoservicepage(this)' style='font-family:Amaranth;cursor:pointer'>".$row['spname']."</h3>";
		echo "</div>
	  </div>
	  <div class='row'>
		    <div class='col-xs-1'>
		    </div>
		    <div class='col-xs-11'>";
		    echo  "<h3 style='font-family:Amaranth'>".$row['spaddress']."</h3>";
		    echo "</div>
	  </div>
      
	   <div class='row' style='height:10px'>
	   </div>  
	  </div>  ";
		 
		 
		 }
	 
	 
	 
	 
  }
  }
?>
<body>
<script>
 /* function shortlist(){                                 //ye vala part copy karna he 
    var xml = new XMLHttpRequest();
	xml.open('GET',"test.php?name=rajkumar",true);
		xml.onreadystatechange = function(){
	      if(xml.readyState == 4 && xml.status == 200)
		    {
				document.getElementById("div1").innerHTML = xml.responseText;
				 var info = xml.responseText;
				 //var xml2  = new XMLHttpRequest();
				 //alert("after xml2");
				 //xml2.open('GET',"dashboard.php?info="+info,true);
			}
	}
	xml.send();
	
  }
     
  */  
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
			  window.location.href = "showphotographer.php?name="+name;
	   //window.open(name,'_self');  
  }
</script>
<div id="div1"> </div>
<div id="div2"></div>
 <!--<div class="container">
    <div class="jumbotron" style="background-color:#ec5f5f">
	   <h1>Bands</h1>
	</div>
	<!--<div class="service"> 
	  <div class="row" >
		 <div class="col-xs-1">
		 </div>
		 <div class="col-xs-11">
		 <h3  onclick="gotoservicepage(this)">rajkumar</h3>
		 </div>
	  </div>
	  <div class="row">
		    <div class="col-xs-1">
		    </div>
		    <div class="col-xs-11">
		    <h3>Address</h3>
		    </div>
	  </div>
      <div class="row">
		   <div class="col-xs-12 col-lg-4">
		  
		   </div>
	       <div class="col-xs-12 col-lg-4">
		 
		   </div>
		  <div class="col-xs-12 col-lg-4">
		  <button class="btn btn-lg buttonstyle" type="button">check it out</button>
		  </div>
		  
	   </div>
	   <div class="row" style="height:10px">
	   </div>  
	 </div>
	 <div class="service"> 
	  <div class="row">
		 <div class="col-xs-1">
		 </div>
		 <div class="col-xs-11">
		 <h3 onclick="gotoservicepage(this)">bagad</h3>
		 </div>
	  </div>
	  <div class="row">
		    <div class="col-xs-1">
		    </div>
		    <div class="col-xs-11">
		    <h3>Address</h3>
		    </div>
	  </div>
      <div class="row">
		   <div class="col-xs-12 col-lg-4">
		 <!--  <button class="btn btn-lg buttonstyle"  type="button">Rating</button>--
		   </div>
	       <div class="col-xs-12 col-lg-4">
		  <!-- <button class="btn btn-lg buttonstyle" type="button">Inquire</button>--
		   </div>
		  <div class="col-xs-12 col-lg-4">
		  <button class="btn btn-lg buttonstyle" type="button" onclick="rajkumar(this)">check it out</button>
		  
	   </div>  
	   </div>
		  <div class="row" style="height:10px">
	   </div>
	 </div>
     <div class="service"> 
	  <div class="row">
		 <div class="col-xs-1">
		 </div>
		 <div class="col-xs-11">
		 <h3>Name of band</h3>
		 </div>
	  </div>
	  <div class="row">
		    <div class="col-xs-1">
		    </div>
		    <div class="col-xs-11">
		    <h3>Address</h3>
		    </div>
	  </div>
      <div class="row">
		   <div class="col-xs-12 col-lg-4">
		  <!-- <button class="btn btn-lg buttonstyle"  type="button">Rating</button>--
		   </div>
	       <div class="col-xs-12 col-lg-4">
		  <!-- <button class="btn btn-lg buttonstyle" type="button">Inquire</button>--
		   </div>
		  <div class="col-xs-12 col-lg-4">
		  <button class="btn btn-lg buttonstyle" type="button">check it out</button>
		  </div>
		  
	   </div>
	   <div class="row" style="height:10px">
	   </div>  
	 </div>   
	 <div class="service"> 
	  <div class="row">
		 <div class="col-xs-1">
		 </div>
		 <div class="col-xs-11">
		 <h3>Name of band</h3>
		 </div>
	  </div>
	  <div class="row">
		    <div class="col-xs-1">
		    </div>
		    <div class="col-xs-11">
		    <h3>Address</h3>
		    </div>
	  </div>
      <div class="row">
		   <div class="col-xs-12 col-lg-4">
		   <!--<button class="btn btn-lg buttonstyle"  type="button">Rating</button>--
		   </div>
	       <div class="col-xs-12 col-lg-4">
		   <!--<button class="btn btn-lg buttonstyle" type="button">Inquire</button>--
		   </div>
		  <div class="col-xs-12 col-lg-4">
		  <button class="btn btn-lg buttonstyle" onclick="shortlist()" type="button">check it out</button>
		  </div>
	   </div>
	   <div class="row" style="height:10px">
	   </div>  -->
	 </div>
 <div style="height:200px">
     
 </div>
 </div>
</body>
</html>
