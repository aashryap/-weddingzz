<!DOCTYPE html>
<html>
<head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- google font link -->
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Unica One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
</head>
<body>
 
</body>
<?php
   echo "<div class='container'>
                  <div class='row' style='background-color:' >
	                <div class='col-xs-12' style='font-family:Pacifico;font-size:100px;text-align:center;color:#ec5f5f'>Profile</h1>
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
					  
					  
					  
					  <li>
					      <a href='login.php' style='color:black'>Profile</a> 
					  </li>
					  <li>
					      <a href='signup.php' style='color:black'>Logout</a> 
					  </li>
					  
					
				  </ul>
			   </div>
           </div>		   
	   </nav>
	   <form role='form' >
	   <div class='row'>
	      <div class='col-xs-12'>
		     
		       <div style='font-family:;font-size:30px;background-color:#ec5f5f'>Information</div>
			 
			    <div class='row' style='padding-top:30px'>
			     <div class='col-xs-12 col-lg-4'>
			       <Label for='foundedIn'>Founded in</label>
			     </div>
			     <div class='col-xs-12 col-lg-8'>
			      <input type='text' id='' class='form-control' name='foundedIn'>
			     </div> 
		        </div>
				
			    <div class='row' style='padding-top:30px'>
			     <div class='col-xs-12 col-lg-4'>
			       <Label for='NumberOfMember'>Number of members</label>
			     </div>
			     <div class='col-xs-12 col-lg-8'>
			      <input type='text' id='' name='NumberOfMember' class='form-control'>
			     </div> 
		        </div>
				
		        <div class='row' style='padding-top:30px'>
			     <div class='col-xs-12 col-lg-4'>
			       <Label for='facilities'>Facilities</label>
			     </div>
			     <div class='col-xs-12 col-lg-8'>
			        <input type='text' id='' name='facilities' class='form-control'>
			     </div> 
		        </div>
				
				<div class='row' style='padding-top:30px'>
			     <div class='col-xs-12 col-lg-4'>
			       <Label for='website'>website</label>
			     </div>
			     <div class='col-xs-12 col-lg-8'>
			      <input type='text' id='' name='website' class='form-control'>
			     </div> 
		        </div>
				
				
			   </div>
			   
			   
	   </div>
	   <div style='font-family:;font-size:30px;background-color:#ec5f5f;margin-top:30px'>Rates</div>
	   <div class='row' style='padding-top:30px'>
			     <div class='col-xs-12 col-lg-4'>
			       <Label for='Band'>Band</label>
			     </div>
			     <div class='col-xs-12 col-lg-8'>
			      <input type='number' id='' name='band' class='form-control'>
			     </div> 
		</div>
		<div class='row' style='padding-top:30px'>
			     <div class='col-xs-12 col-lg-4'>
			       <Label for='ghodi'>Ghodi</label>
			     </div>
			     <div class='col-xs-12 col-lg-8'>
			      <input type='number' id='' name='ghodi' class='form-control'>
			     </div> 
		</div>
		<div class='row' style='padding-top:30px'>
			     <div class='col-xs-12 col-lg-4'>
			       <Label for='Bagghi'>Bagghi</label>
			     </div>
			     <div class='col-xs-12 col-lg-8'>
			      <input type='number' id='' name='Bagghi' class='form-control'>
			     </div> 
	    </div>
		<div class='row' style='padding-top:30px'>
			     <div class='col-xs-12 col-lg-4'>
			       <Label for='orchestra'>Orchestra</label>
			     </div>
			     <div class='col-xs-12 col-lg-8'>
			      <input type='number' id='' name='orchestra' class='form-control'>
			     </div> 
		</div>
		 <div style='font-family:;font-size:30px;background-color:#ec5f5f;margin-top:30px'>Deals</div>
		 <div class='row' style='padding-top:30px'>
			     <div class='col-xs-12 col-lg-4'>
			       <Label for='deals'>Deals</label>
			     </div>
			     <div class='col-xs-12 col-lg-8'>
			      <input type='text' id='' name='deals' class='form-control'>
			     </div> 
		</div>
		<div class='row' >  
		<div class='col-xs-12' style='padding-top:30px'>
		 <input type='submit' style='background-color:#ec5f5f' class='form-control' name='submitprofiledetails' >
		</div> 
		</div>
		<div style='margin-bottom:100px'></div>
	   
       </form>	  
      	  "	;
?>
</html>