<?php

include('validation-script.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Form Validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--bootstrap4 library linked-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!--custom style-->
  <style type="text/css">
   .registration-form{
      background: #f7f7f7;
      padding: 20px;
      border: 1px solid orange;
      margin: 50px 0px;
    }
    .err-msg{
      color:red;
    }
    .registration-form form{
      border: 1px solid #e8e8e8;
      padding: 10px;
      background: #f3f3f3;
    }
  </style>
</head>
<body>

<div class="container-fluid">
 <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
    
    <!--====registration form====-->
    <div class="registration-form">
      <h4 class="text-center">Create a New Account</h4>
      
<p class="text-success text-center"><?php echo $valid; ?></p> <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


        <!--//first name//-->
        <div class="form-group">
           <label for="email">First Name</label>
               
<input type="text" class="form-control" placeholder="Enter First Name" name="first_name" value="<?php echo $set_firstName;?>">

           <p class="err-msg">
    
<?php if($fnameErr!=1){ echo $fnameErr; }?>

           </p>
        </div>

        <!--//Last name//-->
        <div class="form-group">
            <label for="email">Last Name</label>
                
<input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" value="<?php echo $set_lastName;?>">

            <p class="err-msg"> 
    
<?php if($lnameErr!=1){ echo $lnameErr; } ?>

            </p>
        </div>
        
        <!--// Email//-->
        <div class="form-group">
            <label for="email">Email:</label>
                
<input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $set_email;?>">

            <p class="err-msg">
    
<?php if($emailErr!=1){ echo $emailErr; } ?>

            </p>
        </div>
        
        <!--//Password//-->
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control"  placeholder="Enter password" name="password">
            <p class="err-msg">
                
<?php if($passErr!=1){ echo $passErr; } ?>

            </p>
        </div>

        <!--//Confirm Password//-->
        <div class="form-group">
            <label for="pwd">Confirm Password:</label>
            
                
            <input type="password" class="form-control" placeholder="Enter Confirm password" name="cpassword">
            <p class="err-msg">
                
<?php if($cpassErr!=1){ echo $cpassErr; } ?>

            </p>
        </div>
    
        <button type="submit" class="btn btn-danger" value="Register" name="register">Register Now</button>
      </form>
    </div>
   </div>
   <div class="col-sm-4">
   </div>
 </div>
  
</div>

</body>
</html>