<?php
require 'connection.php';





?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       @media (min-width: 1025px) {
      .h-custom {
        height: 100vh !important;
        }
            }
    li a{
        font-family: Times New Roman;

    }
    ul li:hover{
        background-color: grey;
        padding-left: 6px;
        border-radius: 4px;
    }
        
    </style>
  </head>
<body>
   <section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center h-100">
      <div class="col-lg-8 col-xl-6">
      <nav class="navbar navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <h3 class="text-white" style="font-family: Times New Roman; font-weight: bolder;">ICT5 (2024-2025)</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" style="background-color: black;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
    <h3 class="text-white" style="font-family: Times New Roman; font-weight: bolder;">ICT 5 (2024-2025)</h3>
      
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" style="font-size: 15px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="inst.php" style="color: red;"><span class="fa fa-home"></span> HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="sem1.php" style="color: red;">VIEW SEMISTER ONE MODULES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="sem2.php" style="color: red;">VIEW SEMISTER TWO MODULES</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: red;">VIEW SEMISTER ONE PAST PAPER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: red;">VIEW SEMISTER TWO PAST PAPER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="participant.php" style="color: red;">VIEW ALL PARTICIPANT</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="week.php" style="color: red;">VIEW THE NUMBER OF WEEK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php" style="color: red;">LOG OUT</a>
          </li>
          
        </ul>
       
      </div>
    </div>
  </div>
</nav>
<br>
<div class="row">
    <div class="col-sm-12">
     <table class="table table-bordered">
        <tr>
            <th>MODULE NAME</th>
            <th>MODULE CODE</th>

        </tr>
        <tr>
            <td>STATISTICS AND PROBABILITY</td>
            <td>ITT 05101</td>

        </tr>
        <tr>
            <td>PC SOFTWARE AND SUPPORT</td>
            <td>ITT 06102</td>

        </tr>
        <tr>
            <td>INFORMATION MANAGEMENT SYSTEM</td>
            <td>ITT 05103</td>

        </tr>
        <tr>
            <td>INFORMATION SYSTEM ANALYSIS</td>
            <td>ITT 05104</td>

        </tr>
        <tr>
            <td>V.B NET PROGRAMING</td>
            <td>ITT 05105</td>

        </tr>
        <tr>
            <td>COST ANALYSIS MATHEMATICS</td>
            <td>ITT 05107</td>

        </tr>
        <tr>
            <td>NETWORKING TECHNOLOGY</td>
            <td>ITT 05107</td>

        </tr>
        <tr>
            <td>FUNDAMNETAL OF GRAMMER AND USAGE</td>
            <td>ITT 05107</td>

        </tr>

     </table>

    </div>


</div>
      </div>

    </div>
 
  </div>
  
</section>


     

    
</body>
</html>