<!DOCTYPE html>
<html>
<head>
	<title>book</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://kit.fontawesome.com/c466d91a64.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body background="img/abc.jpg">


<link rel="stylesheet" type="text/css" href="css/book.css">

<div class="container">
<br> 
<div class="card bg-light" >
<article class="card-body mx-auto" style="max-width: 400px;" >
	<h4 class="card-title mt-3 text-center">Request Booking</h4>
	
	<form action="insert.php" method="post" enctype="multipart/form-data">
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar-o" aria-hidden="true"></i> </span>
		 </div>
        <input name="tdate" class="form-control" placeholder="Today's Date" type="date">
    </div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
  
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div>
       <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
		 </div>
        <input name="contact" class="form-control" placeholder="contact number" type="number">

    </div>
        <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"><i class="fas fa-address-book"></i></span>
  		 </div>
        <input name="address" class="form-control" placeholder="Address" type="textbox">

    </div>
       <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-map-pin"></i> </span>
		 </div>
        <input name="pincode" class="form-control" placeholder="pincode" type="number">

    </div>
       <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-motorcycle"></i> </span>
		 </div>
       <select class="custom-select" name="vtype" style="max-width: 120px;">
		    <option value="2">2 wheeler</option>
		    <option value="4">4 wheeler</option>
		</select>
    </div>
          <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-car"></i> </span>
		 </div>
        <input name="vmodel" class="form-control" placeholder="vehicle model" type="text">
    </div>
          <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="far fa-credit-card"></i></span>
		 </div>
        <input name="vregno" class="form-control" placeholder="vehicle registration number" type="text">
    </div>
          <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-info"></i> </span>
		 </div>
        <input name="sdetails" class="form-control" placeholder="service details" type="text">

    </div>
          <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-stopwatch"></i> </span>
		 </div>
     <input name="bookdt" class="form-control"  type="date">
     </div>
           <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fas fa-stopwatch"></i> </span>
     </div><input name="booktime" class="form-control"  type="time"> 

    </div>
         <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-comments"></i> </span>
		 </div>
        <input name="comments" class="form-control" placeholder="comments" type="text">

    </div>
     <!-- form-group// -->
                                    
    <div class="form-group">
        <button type="submit" name="subt"  class="btn btn-primary btn-block"> CONFIRM BOOKING  </button>
    </div> <!-- form-group// -->      
                                                                    
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
</body>
</html>