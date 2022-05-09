<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodcart | Ordered Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
  <!--Navbar Starts-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i class="bi bi-palette"></i>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-palette" viewBox="0 0 16 16">
  <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
  <path d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z"/>
  </svg>FOODCART</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="bi bi-house"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
    </svg>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ordered.php" style="font-weight: bolder;"><i class="bi bi-bag"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
       <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
       </svg>Ordered</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="booked.php"><i class="bi bi-person-lines-fill"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
       <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
      </svg>Admin</a>
      </li>
    </ul>
  </div>
</nav>
  <!--Navbar Ends-->

    <!--Date And Time Check starts-->
  <!--check with code starts-->
  <h1 style="color: gray; margin:2rem">Ordered Check</h1>
  <form name="codecheck" method="post" style="margin: 2rem;border:0px solid gray;border-radius: 0.5rem;background-color:aliceblue;">
    <legend style="margin:1rem;">Code Check</legend>
    <!-- Grid row -->
    <div class="form-group row" style="margin:1rem;">
      <!-- Default input -->
      <label for="inputText3" class="col-sm-2 col-form-label" style="width:5rem">Code</label>
      <div class="col-sm-10" style="width:25rem" ;>
        <input type="text" class="form-control" name="bookingcode" id="inputText3" placeholder="BookingCode" required>
      </div>
    </div>
    <div class="form-group row" style="display: inline-block;margin:1.5rem">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-outline-success" name="codesubmit">Ckeck</button>
      </div>
    </div>
    <!-- Grid row -->
  </form>

  <?php
   if (isset($_POST["codesubmit"])) {
    $code = $_POST["bookingcode"];

    require "dblink.php";
    $ssql = "SELECT * FROM `customerdetails` where bookingcode='$code'";
    $result = mysqli_query($con, $ssql);
    $nrow = mysqli_num_rows($result);
    $mrow=mysqli_fetch_array($result);

    echo "<div class='card mb-4' style='margin: 2rem;'>
     <div class='card-body'>
      <h2 style='color:mediumturquoise;'>Ordered</h2>
      <hr>
      <div class='row'>
      <div class='col-sm-3'>
       <p class='mb-0' style='color:blue;font-weight:bolder'>Code</p>
      </div>
      <div class='col-sm-9'>
     <p class='mb-0' style='color:blue;font-weight:bolder'>$mrow[0]</p>
     </div>
      </div>
      <hr>
      <div class='row'>
      <div class='col-sm-3'>
       <p class='mb-0' style='color:mediumvioletred;font-weight:bold'>Firstname</p>
      </div>
     <div class='col-sm-9'>
       <p class='mb-0' style='color:mediumvioletred;font-weight:bold'>$mrow[1]</p>
     </div>
    </div>
    <hr>
    <div class='row'>
     <div class='col-sm-3'>
       <p class='mb-0' style='color:rebeccapurple;font-weight:bold'>Lastname</p>
     </div>
     <div class='col-sm-9'>
       <p class='mb-0' style='color:rebeccapurple;font-weight:bold'>$mrow[2]</p>
     </div>
    </div>
    <hr>
    <div class='row'>
     <div class='col-sm-3'>
       <p class='mb-0' style='color:purple;font-weight:bold'>Item</p>
     </div>
     <div class='col-sm-9'>
       <p class='mb-0' style='color:purple;font-weight:bold'>$mrow[3]</p>
     </div>
    </div>
    <hr>
    <div class='row'>
     <div class='col-sm-3'>
       <p class='mb-0' style='color:purple;font-weight:bold'>Quantity</p>
     </div>
     <div class='col-sm-9'>
       <p class='mb-0' style='color:purple;font-weight:bold'>$mrow[4]</p>
     </div>
    </div>
    <hr>
    <div class='row'>
     <div class='col-sm-3'>
       <p class='mb-0' style='color:slateblue;font-weight:bold'>Phone</p>
     </div>
     <div class='col-sm-9'>
     <p class='mb-0' style='color:slateblue;font-weight:bold'>$mrow[6]</p>
     </div>
    </div>
    <hr>
    <div class='row'>
     <div class='col-sm-3'>
       <p class='mb-0' style='color:seagreen;font-weight:bold'>E-mail</p>
     </div>
     <div class='col-sm-9'>
       <p class='mb-0' style='color:seagreen;font-weight:bold'>$mrow[7]</p>
    
       </div>
    </div>
    <hr>
    <div class='row'>
     <div class='col-sm-3'>
       <p class='mb-0' style='color:seagreen;font-weight:bold;' >Address</p>
     </div>
     <div class='col-sm-9'>
       <p class='mb-0' style='color:seagreen;font-weight:bold;'>$mrow[8]</p>
     </div>
    </div>
    <hr>
    <div class='row'>
     <div class='col-sm-3'>
       <p class='mb-0' style='color:seagreen;font-weight:bold;' >Date</p>
     </div>
     <div class='col-sm-9'>
       <p class='mb-0' style='color:seagreen;font-weight:bold;'>$mrow[9]</p>
     </div>
    </div>
    <hr>
    <div class='row'>
     <div class='col-sm-3'>
       <p class='mb-0' style='color:seagreen;font-weight:bold;' >Time</p>
     </div>
     <div class='col-sm-9'>
       <p class='mb-0' style='color:seagreen;font-weight:bold;'>$mrow[10]</p>
     </div>
    </div>
    <hr>
    <div class='row'>
     <div class='col-sm-3'>
       <p class='mb-0' style='color:seagreen;font-weight:bold;' >Status</p>
     </div>
     <div class='col-sm-9'>
       <p class='mb-0' style='color:seagreen;font-weight:bold;'>$mrow[11]</p>
     </div>
    </div>
    <hr>
    <div class='row'>
     <div class='col-sm-3'>
       <p class='mb-0' style='color:seagreen;font-weight:bold;' >₹ Total Price</p>
     </div>
     <div class='col-sm-9'>
       <p class='mb-0' style='color:seagreen;font-weight:bold;'>₹ $mrow[5]</p>
     </div>
    </div>
    <hr>
    
    </div>
    </div>";
    /*Order form submit detais ends */

   }
  ?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
