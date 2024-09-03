<?php 
$nameerror="";
if(isset($_POST['submit'])){
  $reg = $_POST['reg'];
  $fname= $_POST['fname'];
  $mobile= $_POST['mobile'];
  $email = $_POST['email'];
  
  // $gender = $_POST['gender'];
  $res = mysqli_query($con,"SELECT * FROM ictnta5 WHERE registration_number ='$reg'");
  if(mysqli_num_rows($res) > 0){
    echo "<script> alert('this registration number already taken by other,enter your reistration number correctly')</script>";
  }
  else{
          $students = array("KIST/ICT/23/0017","KIST/ICT/23/0015","KIST/ICT/23/0007","KIST/ICT/23/0003",
                            "KIST/ICT/23/0010","KIST/ICT/23/0012","KIST/ICT/23/0016","KIST/ICT/23/0045",
                           "KIST/ICT/23/0038","KIST/ICT/23/0047","KIST/ICT/23/0034","KIST/ICT/23/0036",
                           "KIST/ICT/23/0024","KIST/ICT/23/0031","KIST/ICT/23/0032","KIST/ICT/23/0035",
                           "KIST/ICT/23/0025","KIST/ICT/23/0051","KIST/ICT/23/0050","KIST/ICT/23/0052",
                           "KIST/ICT/23/0039","KIST/ICT/23/0006","KIST/ICT/23/0005","KIST/ICT/23/0027",
                           "KIST/ICT/23/0040","KIST/ICT/23/0001");
          $gender = null;
          if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
            if($reg=="" || $email=="" || $mobile==""){
              $nameerror = "please fill the input field above correctly";
         }
         else{
           if(in_array($reg,$students)){
                   $sql = "INSERT INTO ictnta5(registration_number,firstname,	phone_num,email,gender) values('$reg','$fname','$mobile','$email','$gender')";
                   mysqli_query($con,$sql);
                  // echo "<script> alert('{$reg}')</script>";
                    header("location:inst.php");
                   //  echo "<script> alert('Welcome mr {$fname} you have registered successfully,Go to login and enter this ID {$id}')</script>";

             }
          
        else{
             echo "<script> alert('Invalid number,please enter the correct number,the number {$reg} does not included in ICT5')</script>";
            }


         }


          }
          else{
            $nameerror = "please fill your compelete details correctly";
          }

        
                     
                         
                    
           
          
   
  }


}







?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       @media (min-width: 1025px) {
      .h-custom {
        height: 100vh !important;
        }
            }
        .gender{
          margin-left: 58px;
          margin-top: 15px;
        }
        
        
    </style>
  </head>
<body>
    <div class="container-fluid bg-primary p-3">
        <h2 class="text-white" style="font-family: Times New Roman;">ICT(NTA 5) 2024-2025</h2>
        

    </div>
   <section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-3">
            <h3 class="mb-5 pb-3 pb-md-0 mb-md-5 px-md-2 text-center">SIGN UP</h3>
            <form class="px-md-2" action="" method="post">
              <span style="color:red;text-align: center;"><?php echo $nameerror?></span><br>
                <div class="form-group">
                  <input type="text" name="reg" id="reg" placeholder="Registration number" class="form-control">

                </div>
                <div class="form-group mt-3">
                  <input type="TEXT" min="0" name="fname" id="fname"  placeholder="Enter your firstname" class="form-control">

                </div>
                <div class="form-group mt-3">
                  <input type="number" min="0" name="mobile" id="mobile"  placeholder="Enter your phone number" class="form-control">

                </div>
                <div class="form-group mt-3">
                  <input type="email" name="email" id="email" placeholder="Enter your E-mail address" class="form-control">

                </div>
                <!-- <div class="form-group mt-3">
                  <input type="password" name="pass1" id="pass1" maxlength="5" placeholder="Enter your password"  class="form-control">

                </div>
                <div class="form-group mt-3">
                  <input type="password" name="pass2" id="pass2" maxlength="5" placeholder="Confirm your password"  class="form-control">

                </div> -->
                <input type="radio" name="gender" value="Male" class="gender">Male
                <input type="radio" name="gender" value="Female" class="gender">Female

                <div class="form-group mt-2">
                  <input type="submit" name="submit" value="Register now" class="form-control text-white" style="background: green;">

                </div>
                


            </form>
            <a href="login.php" style="text-decoration: none;">login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

     

    
</body>

</html>
