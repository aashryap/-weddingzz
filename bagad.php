<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rajkumar band</title>
<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap-theme.min.css" >
<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.min.css" >
<script src="bootstrap-3.3.6-dist\js\bootsrap.min.js"></script>
</head>
<?php
 session_start();
 if(!$_SESSION['login'])
 {
    header('Location:login.php');
 }
 else
 {
    echo $_SESSION['name'];
 }
 
?>
<style>
    img.image{
	  align:middle;
	  src:rajkumar.jpg;
	 }
	 div.heading{
	   border-bottom:ridge;
	   border-bottom-color:#ec5f5f;
	 }
	 h1.serviceprovidername{
	 color:#ec5f5f;
	 }
</style>
<body>
<div class="container">
      <div class="heading">
          <h1 class="serviceprovidername">Bagad band</h1>
      </div>
	  <div style="padding-top:20px;padding-bottom:20px" class="heading"> 
          <img  src="rajkumar3.jpg" class="img-responsive center-block image" align="middle">
      </div>
	  <!--<div id="row">
	  <div class="col-xs-12">
	  <div id="car" class="carousel slide" data-ride="carousel">
	      <ol class="carousel-indicators">
		         <li class="active" data-target="#car" data-slide-to="0"></li>
				 <li data-target="#car" data-slide-to="1"></li>
		  </ol>
		  
		  <div class="carousel-inner" role="listbox">
		         <div class="item active">
				         <img src="rajkumar2.jpg" alt="" />
						 <div class="carousel-caption">
						      <h2>band</h2>
						 </div>
				 </div>
				 <div class="item">
				         <img src="rajkumar.jpg" alt="" />
						 <div class="carousel-caption">
						      <h2>band2</h2>
						 </div>
				 </div>
		  </div>
		  
		  <a class="left carousel-control" href="#car" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">previous</span>
		  </a>
		  
		  <a class="right carousel-control" href="#car" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">next</span>
		  </a>
		    
	 </div>
	 </div>
	 </div>-->
     <script> 
	    function shortlist(){                                 //ye vala part copy karna he 
              var xml = new XMLHttpRequest();
	          xml.open('GET',"shortlist.php?name=bagadband",true);
		      xml.onreadystatechange = function(){
	          if(xml.readyState == 4 && xml.status == 200)
		        {
				   alert(xml.responseText);
				    var info = xml.responseText;
					
				 //var xml2  = new XMLHttpRequest();
				 //alert("after xml2");
				 //xml2.open('GET',"dashboard.php?info="+info,true);
			   }
      	  }
	   xml.send();
	
      }
	  function hire()
	  {
	         var xml = new XMLHttpRequest();
	          xml.open('GET',"orders.php?name=bagadband",true);
		      xml.onreadystatechange = function(){
	          if(xml.readyState == 4 && xml.status == 200)
		        {
				   alert(xml.responseText);
				    var info = xml.responseText;
					
				 //var xml2  = new XMLHttpRequest();
				 //alert("after xml2");
				 //xml2.open('GET',"dashboard.php?info="+info,true);
			   }
      	  }
	   xml.send(); 	
	  }
	 </script>	 
	  <div class="container"> 
       <div class="row heading" style="padding-top:20px;padding-bottom:20px">
           <div class="col-xs-12 col-lg-4" style="background-color:#ec5f5f;border-radius:4px;"><h3>Address</h3></div>
           <div class="col-xs-12" style="padding-top:20px"><h4>bhawarkua,adhasld pahsdij,oashsd;ajnsd;as</h4></div>
       </div>
	   <div class="row heading" style="padding-top:20px;padding-bottom:20px;">
	       <div class="col-xs-12 col-lg-4" style="background-color:#ec5f5f;border-radius:4px;"><h3>Contact</h3></div>
		   <div class="col-xs-12" style="padding-top:20px"><h4>7747910547</h4></div> 
	   </div>
	   <div class="row heading" style="padding-top:20px;padding-bottom:20px;">
	       <div class="col-xs-12 col-lg-4" style="background-color:#ec5f5f;border-radius:4px;"><h3>Email</h3></div>
		   <div class="col-xs-12" style="padding-top:20px"><h4>bagadband@gmail.com</h4></div> 
	   </div>
	   <div class="row heading" style="padding-top:20px;padding-bottom:20px">
	       <div class="col-xs-12 col-lg-4" style="background-color:#ec5f5f;border-radius:4px;"><h3>About</h3></div>
		   <div class="col-xs-12" style="padding-top:20px"><h4>kadghoasjhdoajshdasdlhiasnldhapsidkalsijdaskdja oaodasjpduasdj[ asa[osd[ao askd[oaj                [oasjd ja[sdj a[osjd[aod ausoadj ;a][sadoaj [oajsdjas asjajsih ahauoshd pashashdasjd has</h4></div> 
	   </div>
	   <div class="row" style="padding-top:20px">
            <button class="btn btn-lg col-xs-12 col-lg-4" style="background-color:#ec5f5f;margin-top:10px" onClick="hire()">Hire</button>
			<button class="btn btn-lg col-xs-12 col-lg-4" onClick="shortlist()" style="background-color:#ec5f5f;margin-top:10px">Shortlist</button>
			<button class="btn btn-lg col-xs-12 col-lg-4" style="background-color:#ec5f5f;margin-top:10px ">Rate</button>
	   </div>
	  </div>  
	  
	  <div style="height:100px;width:100%"></div>
</div>
</div>
</body>
</html>
