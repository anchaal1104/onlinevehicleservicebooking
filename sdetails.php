
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>SERVICE DETAILS</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/sd.css">
</head>
<body>  
  <form action="insertsd.php" method="post" enctype="multipart/form-data">
 <div class="container">
 <!---heading---->
     <header class="heading"> SERVICE DETAILS </header><hr></hr>
  <!---Form starting----> 
  <div class="row ">

          <!--- For Date---->
         <div class="col-sm-12">
             <div class="row">
           <div class="col-xs-4">
                     <label class="firstname">Date :</label> </div>
             <div class="col-xs-8">
              
                  <input type="text" name="sdate" readonly = "readonly"  id="fname"  class="form-control " value="<?php echo date('m/d/y');?>"/>

             </div>
          </div>
     </div>
   <!--- For Service Center Name---->
         <div class="col-sm-12">
             <div class="row">
           <div class="col-xs-4">
                     <label class="firstname">Service Center Name :</label> </div>
             <div class="col-xs-8">
                 <input type="text" name="scname" id="fname" placeholder="Service Center Name" class="form-control ">
             </div>
          </div>
     </div>
       <!--- For Address---->
         <div class="col-sm-12">
             <div class="row">
           <div class="col-xs-4">
                     <label class="firstname">Address :</label> </div>
             <div class="col-xs-8">
                 <input type="text" name="saddress" id="fname" placeholder="Address" class="form-control ">
             </div>
          </div>
     </div>
    <!--- For pincode---->
         <div class="col-sm-12">
             <div class="row">
           <div class="col-xs-4">
                     <label class="firstname">Pincode :</label> </div>
             <div class="col-xs-8">
                 <input type="number" name="spincode" id="fname" placeholder="pincode" class="form-control ">
             </div>
          </div>
     </div>
         <!--- For vtype---->
         <div class="col-sm-12">
             <div class="row">
           <div class="col-xs-4">
                     <label class="firstname">Vehicle Type:</label> </div>
             <div class="col-xs-8">
                 <select  name="svtype" id="fname"  class="form-control ">
                         <option value="2">2 wheeler</option>
                         <option value="4">4 wheeler</option>
                 </select>
             </div>
          </div>
     </div>     
    
        <!--- For gst---->
         <div class="col-sm-12">
             <div class="row">
           <div class="col-xs-4">
                     <label class="firstname">GST Number:</label> </div>
             <div class="col-xs-8">
                 <input type="number" name="gstno" id="fname" placeholder="GST No" class="form-control ">
             </div>
          </div>
     </div>
     <!-----For email---->
     <div class="col-sm-12">
         <div class="row">
           <div class="col-xs-4">
                 <label class="mail" >Email :</label></div>
           <div class="col-xs-8"  >  
                <input type="email" name="semail"  id="email" placeholder="Enter your email" class="form-control" >
             </div>
         </div>
     </div>      
     <!-----------For Phone number-------->
            <div class="col-sm-12">
             <div class="row">
           <div class="col-xs-4">
                     <label class="firstname">Contact Number :</label> </div>
             <div class="col-xs-8">
                 <input type="number" name="scontact" id="fname" placeholder="contact Number" class="form-control ">
             </div>
          </div>
     </div>
      
         </div>
         <div class="col-sm-12">
             
             <input type="submit" name="subt" class="btn btn-warning" >
       </div>
     </div>
   </div>       
</div>
</form>
</body>   
</html>
