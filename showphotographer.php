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
<style>
  div.background{
    background-image:url(rajkumar.jpg);
	height:100%;
	width:100%;
	background-size:cover;
	
}
#spcarousel{
 height: 400px;
  width: auto;
  overflow: hidden;
}
.buttons{
  background-color:#ec5f5f;
  width:100%;
}
  
  
</style>
<body>
   <div class='container'>
      <nav class='navbar navbar-default' style="background-color:#ec5f5f">
           <div class='container'>
		       <div class='navbar-header'>
			      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar1'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>						
				  </button>
				  <a class='navbar-brand' href="#"><p style='font-family:Pacifico;color:black' onClick="window.open('index1.html','_self')">Weddingzz</p></a>
				  
			   </div>
			   <div class='collapse navbar-collapse' id='navbar1'>
			      <ul class='nav navbar-nav' style="font-family:Unica One;margin-left:50%">
					 <!-- <li class='active'>
					      <a href='#'>Link<span class='sr-only'>(current)</span></a>
					  </li>-->
					  <li>
					      <a href='dashboard.php' style='color:black'>Your dashboard</a> 
					  </li>
					  
					  <li class='dropdown'>
					      <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false' style='color:black' >Categories<span class='caret'></span></a> 
					                <ul class='dropdown-menu navbar-right' role='menu'>
									      <li><a href='bands.php' style='color:black'>Bands</a></li>
										 <li><a href='caterers.php' style='color:black'>Caterer</a></li>
										 <li><a href='decorators.php' style='color:black'>Decorators</a></li>
										 <li><a href="photographers.php" style='color:black'>Photographer</a></li>
										 <li><a href="pandits.php" style='color:black'>Pandit</a></li>
										 <li><a href="Djs.php" style='color:black'>Dj</a></li>
									
									</ul>
					  
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
      	  
  
    <!--<div class='carousel'>
        <div id="spcarousel" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
                <li data-target="#spcarousel" data-slide-to="0" class="active"></li>
                <li data-target="#spcarousel" data-slide-to="1"></li>
                <li data-target="#spcarousel" data-slide-to="2"></li>
           </ol>
    <div class="carousel-inner" role="listbox">
         <div class="item active">
             <img src="rajkumar.jpg" alt="">
         </div>

          <div class="item">
             <img src="rajkumar2.jpg" alt="">
          </div>

    <div class="item">
      <img src="rajkumar3.jpg" alt="">
    </div>
  </div>

  <a class="left carousel-control" href="#spcarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#spcarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->
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
         //echo $name;
		 $sql = "select spname,spaddress,spemail,spcontact from serviceprovider where spname = '$name' ";
         $result = mysql_query($sql);
		 //echo "<div class='container'>";
         while($row = mysql_fetch_array($result))
		 {
			 
            //echo "div class='row'" ; 			 
		  	 //echo $row['spname'];
			 //echo $row['spemail'];
			 //echo $row['spaddress'];
			 //echo $row['spcontact'];
		 			 
	   
	  
            echo "<div class='img-responsive' style='background-image:url(candid-wedding-photographers-in-hyderabad.jpg);height:400px;width:100%;font-family:Josefin Sans;font-size:30px;overflow:hidden;position:relative;background-size:cover;' >";
	           
              echo "<div class='row' style='bottom:0px;font-family:Lobster;text-align:center; '>";
			     echo"<div class='col-xs-12' style='font-size:100px;'>"; 
				 echo $row['spname'].'<br>';
				 echo "</div>"; 
				  echo"<div class='col-xs-12' style='font-size:30px'>";
			     echo $row['spemail'].'<br>';
				 echo "</div>";
				  echo"<div class='col-xs-12' style='font-size:30px'>";
				   echo $row['spaddress'].'<br>';
				  echo "</div>";
				  echo"<div class='col-xs-12' style='font-size:30px;margin-bottom:20px'>";
				  echo $row['spcontact'].'<br>';
                   echo "</div>";				 
			   echo "</div>";	
	        echo "</div>";
	  
           echo "<div class='tabpanel' style='margin-top:30px;border-bottom:solid'>
	        <ul class='nav nav-tabs' role='tablist' style='font-family:Comfortaa;font-size:20px'>
			      <li role='presentation' class='active'><a href='#Info' aria-controls='home' role='tab' data-toggle='tab'>Info</a></li>
				  <li role='presentation' class='action'><a href='#Rate' aria-controls='Rate' role='tab' data-toggle='tab'>Rate</a></li>
				  <li role='presentation' class='action'><a href='#Deals' aria-controls='Deals' role='tab' data-toggle='tab'>Deals</a></li>
				  <li role='presentation' class='action'><a href='#Reviews' aria-controls='Reviews' role='tab' data-toggle='tab'>Reviews</a></li>
				  <li role='presentation' class='action'><a href='#Photos' aria-controls='Photos' role='tab' data-toggle='tab'>Photos</a></li>
			      
			</ul>
          <div class='tab-content' style='font-family:ABeeZee;margin-top:20px'>
		     <div role='tabpanel' class='tab-pane fade in active' id='Info' style='font-size:20px'>
			     
                  <div class='row'>
				     <div class='col-xs-12 col-lg-4'>
					    <b> Founded </b>
					 </div>
					 <div class='col-xs-12 col-xs-8'>
					     2010
					 </div>
				  </div>
				  <div class='row'>
				     <div class='col-xs-12 col-lg-4'>
					    <b> No. of members </b>
					 </div>
					 <div class='col-xs-12 col-xs-8'>
					     5
					 </div>
				  </div>
				  <div class='row'>
				     <div class='col-xs-12 col-lg-4'>
					    <b> Facilities </b>
					 </div>
					 <div class='col-xs-12 col-xs-8'>
					     Photography,Pre wedding shoot,Videography,Drone photography and many more 
					 </div>
				  </div>
				  <div class='row'>
				     <div class='col-xs-12 col-lg-4'>
					    <b> Website </b>
					 </div>
					 <div class='col-xs-12 col-xs-8'>
					     <a href=''>www.placeholder.com</a>
					 </div>
				  </div>
			 
			 </div>
			 <div role='tabpanel' class='tab-pane' id='Rate' style='font-size:20px'>
			    <div class='row'>
				     <div class='col-xs-12 col-lg-4'><b>Photography</b></div>
					 <div class='col-xs-12 col-lg-8'>40000 Rs</div>
                </div>	
                <div class='row'>
				     <div class='col-xs-12 col-lg-4'><b>videography</b></div>
					 <div class='col-xs-12 col-lg-8'>50000 Rs</div>
                </div>	
                <div class='row'>
				     <div class='col-xs-12 col-lg-4'><b>Drone photography</b></div>
					 <div class='col-xs-12 col-lg-8'>20000 Rs</div>
                </div>	 				
				<div class='row'>
				     <div class='col-xs-12 col-lg-4'><b>Album</b></div>
					 <div class='col-xs-12 col-lg-8'>5000</div>
                </div>	
			 </div>
			 
			 <div role='tabpanel' class='tab-pane' id='Deals'><b>Sorry,Currently no deals available</b></div>
			 <div role='tabpanel' class='tab-pane' id='Reviews'>In reviews</div>
			 <div role='tabpanel' class='tab-pane' id='Photos'>
			        <div class='carousel'>
                         <div id='spphotos' class='carousel slide' data-ride='carousel'>
                            <ol class='carousel-indicators'>
                              <li data-target='#spphotos' data-slide-to='0' class='active'></li>
                              <li data-target='#spphotos' data-slide-to='1'></li>
                              <li data-target='#spphotos' data-slide-to='2'></li>
                             </ol>
                        <div class='carousel-inner' role='listbox'>
                               <div class='item active' height='200px'>
                                     <img src='Indian-wedding.jpg' alt='' style='overflow:hidden;position:relative;background-size:cover'>
                                </div>

                        <div class='item' style='' height='200px'>
                                 <img src='indian-wedding-big-image-7-turkey-chalo_1433327785_725x725.jpg' alt='' class='' style='overflow:hidden;position:relative;background-size:cover'>
                         </div>

                        
                     </div>

                          <a class='left carousel-control' href='#spphotos' role='button' data-slide='prev'>
                              <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                              <span class='sr-only'>Previous</span>
                           </a>
                           <a class='right carousel-control' href='#spphotos' role='button' data-slide='next'>
                              <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                               <span class='sr-only'>Next</span>
                            </a>
                   </div>
			       
			     </div>
			 			 
          </div>		  
		    <div role='tabpanel' class='tab-pane' id='Videos'>Videos</div>
             <div role='tabpanel' class='tab-pane' id='Location'>Location</div>     
	   </div>
	   <div class='row' style='margin-top:20px;margin-bottom:50px'>
	        <div class='col-xs-12 col-lg-4'><button class='btn btn-default buttons' type='button' data-toggle='modal' data-target='#mymodal'>Hire</button>
			<div class='modal fade' id='mymodal' tabindex='-1' role='modal' aria-labeledby='mymodallabel' aria-hidden='true'>
			     <div class='modal-dialog'>
				    <div class='model-content'>
					   <div class='modal-header'>
					       <button class='close' data-dismiss='modal' aria-label='close'><span aria-hidden='true'>&times;</span></button>
						      <h2 class='modal-title' id='mymodallabel'>Select date</h2>
					   </div>
					   <div class='modal-body'>
					    <form role='form'>
						   <div class='form-group'>
						       <div class='row'>
							     <div class='col-xs-12'>
					                 <label for='date'>Select date </label>  <input type='date' class='form-control' id='date'>
                                 </div>
                                 <div class='col-xs-12'>  								 
									 <label for='contact'>Contact number</label><input type='number' class='form-control' maxlength='10' id='contact'>							
                                 </div>
                               </div> 								 
						   </div>	 
						</form>
					   </div>
					   <div class='modal-footer'>
					     <button class='btn btn-default' data-dismiss='modal'>close</button>
						 <button class='btn btn-primary' onClick='hire()'>Okay</button>
					   </div>
					</div>
				 </div>
			</div> 
			</div>
			<div class='col-xs-12 col-lg-4'><button class='btn btn-default buttons' type='button'>Inquire</button> </div>
			<div class='col-xs-12 col-lg-4'><button class='btn btn-default buttons' type='button' onClick='shortlist()'>Shortlist</button> </div>
			
			
	   </div>";
 
}
}  
?>
</div>
<script>
 function hire()
	  {
	         var xml = new XMLHttpRequest();
			 var date = document.getElementById("date").value ;
			 var contact = document.getElementById("contact").value;
			 var name = localStorage.getItem("name");
	          xml.open('GET',"orders.php?name="+name+"&date="+date+"&contact="+contact,true);
		      xml.onreadystatechange = function(){
	          if(xml.readyState == 4 && xml.status == 200)
		        {
				   //alert(xml.responseText);
				    var info = xml.responseText;
					
				 //var xml2  = new XMLHttpRequest();
				 //alert("after xml2");
				 //xml2.open('GET',"dashboard.php?info="+info,true);
			   }
      	  }
	   xml.send(); 	
	  }
	  function shortlist(){                                 //ye vala part copy karna he 
              var xml = new XMLHttpRequest();
			   var name = localStorage.getItem("name");
	          xml.open('GET',"shortlist.php?name="+name,true);
		      xml.onreadystatechange = function(){
	          if(xml.readyState == 4 && xml.status == 200)
		        {
				   //alert(xml.responseText);
				    var info = xml.responseText;
					
				 //var xml2  = new XMLHttpRequest();
				 //alert("after xml2");
				 //xml2.open('GET',"dashboard.php?info="+info,true);
			   }
      	  }
	   xml.send();
	    }
</script>   
   
   
   
</body>
</head>
</html>