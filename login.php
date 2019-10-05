<!DOCTYPE html>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="css/login.css">
<body>
<div class="sidenav">
         <div class="login-main-text">
            <h2 style="font-family: 'algerian';font-size: 120px;">Login</h2>
            <p style="font-family: 'times new roman';font-size: 30px;">Login from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="post" action="logincheck.php" enctype="multipart/form-data">
                  <div class="form-group">
                     <label style="font-family: 'algerian';font-size: 30px;">User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="email" style="font-size: 25px;">
                  </div>
                  <div class="form-group">
                     <label style="font-family: 'algerian';font-size: 30px;">Password</label>
                     <input type="password" class="form-control" placeholder="Password"  name="password" style="font-size: 25px;">
                  </div>
                <button type="submit" class="btn btn-black" style="font-size: 30px;">Login</button> 
                 
               </form>
            </div>
         </div>
      </div>
   </body>
</html>