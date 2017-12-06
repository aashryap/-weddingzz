<!DOCTYPE html>
<html>
<head>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>		   
                    
	<body>
   <div class="container-fluid">
      <div class="heading">
          <h1 class="serviceprovidername">Rajkumar band</h1>
      </div>
	  <div style="padding-top:20px;padding-bottom:20px" class="heading"> 
          <img  src="rajkumar3.jpg" class="img-responsive center-block image" align="middle">
      </div>
	
     <script> 
	    function shortlist(){                                 //ye vala part copy karna he 
              var xml = new XMLHttpRequest();
	          xml.open("GET","shortlist.php?name=rajkumar band",true);
		      xml.onreadystatechange = function(){
	          if(xml.readyState == 4 && xml.status == 200)
		        {
				   alert(xml.responseText);
				    var info = xml.responseText;
					
			   }
      	  }
	   xml.send();
	
      }
	  function hire()
	  {
	         var xml = new XMLHttpRequest();
			 var date = document.getElementById("date").value ;
			 var contact = document.getElementById("contact").value;
	          xml.open("GET","orders.php?name=rajkumarband&date="+date+"&contact="+contact,true);
		      xml.onreadystatechange = function(){
	          if(xml.readyState == 4 && xml.status == 200)
		        {
				   alert(xml.responseText);
				    var info = xml.responseText;
					
				 //var xml2  = new XMLHttpRequest();
				 //alert("after xml2");
				 
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
		   <div class="col-xs-12" style="padding-top:20px"><h4>rajkumarband@gmail.com</h4></div> 
	   </div>
	   <div class="row heading" style="padding-top:20px;padding-bottom:20px">
	       <div class="col-xs-12 col-lg-4" style="background-color:#ec5f5f;border-radius:4px;"><h3>About</h3></div>
		   <div class="col-xs-12" style="padding-top:20px"><h4>kadghoasjhdoajshdasdlhiasnldhapsidkalsijdaskdja oaodasjpduasdj[ asa[osd[ao askd[oaj                [oasjd ja[sdj a[osjd[aod ausoadj ;a][sadoaj [oajsdjas asjajsih ahauoshd pashashdasjd has</h4></div> 
	   </div>
	   <div class="row" style="padding-top:20px">
            <button class="btn btn-lg col-xs-12 col-lg-4" data-toggle="modal" data-target="#mymodal" style="background-color:#ec5f5f;margin-top:10px">Hire</button>
			<div class="modal fade" id="mymodal" tabindex="-1" role="modal" aria-labeledby="mymodallabel" aria-hidden="true">
			     <div class="modal-dialog">
				    <div class="model-content">
					   <div class="modal-header">
					       <button class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
						      <h2 class="modal-title" id="mymodallabel">Select date</h2>
					   </div>
					   <div class="modal-body">
					    <form role="form">
						   <div class="form-group">
						       <div class="row">
							     <div class="col-xs-12">
					                 <label for="date">Select date </label>  <input type="date" class="form-control" id="date">
                                 </div>
                                 <div class="col-xs-12">  								 
									 <label for="contact">Contact number</label><input type="number" class="form-control" maxlength="10" id="contact">							
                                 </div>
                               </div> 								 
						   </div>	 
						</form>
					   </div>
					   <div class="modal-footer">
					     <button class="btn btn-default" data-dismiss="modal">close</button>
						 <button class="btn btn-primary" onClick="hire()">Okay</button>
					   </div
					</div>
				 </div>
			</div>
			</div>
			<button class="btn btn-lg col-xs-12 col-lg-4" onClick="shortlist()" style="background-color:#ec5f5f;margin-top:10px">Shortlist</button>
			<button class="btn btn-lg col-xs-12 col-lg-4" style="background-color:#ec5f5f;margin-top:10px ">Rate</button>
	   </div>
	    
	  </div> 
	  <div style="height:100px;width:100%"></div>
</div>
</div>
</body>
</html>    		   
            
		   