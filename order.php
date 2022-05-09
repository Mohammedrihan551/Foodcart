<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="foodcart.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
  <title>Foodcart | Order Page</title>
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
        <a class="nav-link" href="ordered.php"><i class="bi bi-bag"></i>
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
  <!--Navbar ends-->
  <!--Booking Form Starts-->
<?php

 $price=$_GET['price'];
 $item=$_GET['item'];

 echo "<form name='orderform' method='post' action='insert.php' style='margin: 2rem;border-radius:0.5rem;'>
    <legend style='margin:1rem;'>
      <i class='bi bi-basket3'></i>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-basket3' viewBox='0 0 16 16'>
        <path d='M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z' />
      </svg>Order
    </legend>
  
    <div class='form-group row' style='margin:1rem;'>
      <label for='inputText3' class='col-sm-2 col-form-label' style='width:5rem'>Item</label>
      <div class='col-sm-10' style='width:25rem' ;>
        <input type='text' class='form-control' name='item' value=$item id='inputText3' placeholder='' readonly>
      </div>
    </div>
    <div class='form-group row' style='margin:1rem;'>
      <!-- Default input -->
      <label for='inputTextl3' class='col-sm-2 col-form-label' style='width:5rem'>₹ Price</label>
      <div class='col-sm-10' style='width:25rem' ;>
        <input type='number' class='form-control' name='price' value=$price id='inputTextl3' placeholder='' >
      </div>
    </div>";
    ?>


    <div class="form-group row" style="margin:1rem;">
      <!-- Default input -->
      <label for="peopleNum" class="col-sm-2 col-form-label" style="width:5rem">Quantity</label>
      <div class="col-sm-10" style="width:25rem" ;>
        <div class="def-number-input number-input safari_only">
          <button type="button" onclick="lessPeople()" class="minus"></button>
          <input type="number" class="form-control" name="quantity" id="peopleNum" value="1" placeholder="" required>
          <button type="button" onclick="addPeople()" class="plus"></button>
        </div>
      </div>
    </div>

    <div class="form-group row" style="margin:1rem;">
      <!-- Default input -->
      <label for="inputEmail3" class="col-sm-2 col-form-label" style="width:5rem">Firstname</label>
      <div class="col-sm-10" style="width:25rem" ;>
        <input type="text" class="form-control" name="firstname" id="inputEmail3" placeholder="Firstname" required>
      </div>
    </div>
    <div class="form-group row" style="margin:1rem;">
      <!-- Default input -->
      <label for="inputDate3" class="col-sm-2 col-form-label" style="width:5rem">Lastname</label>
      <div class="col-sm-10" style="width:25rem" ;>
        <input type="text" class="form-control" name="lastname" id="inputDate3" placeholder="Lastname" required>
      </div>
    </div>
    <div class="form-group row" style="margin:1rem;">
      <!-- Default input -->
      <label for="input3" class="col-sm-2 col-form-label" style="width:5rem">Phone</label>
      <div class="col-sm-10" style="width:25rem" ;>
        <input type="tel" class="form-control" name="phone" id="input3" placeholder="Phone" required>
      </div>
    </div>
    <div class="form-group row" style="margin:1rem;">
      <!-- Default input -->
      <label for="inputDateto3" class="col-sm-2 col-form-label" style="width:5rem">E-mail</label>
      <div class="col-sm-10" style="width:25rem" ;>
        <input type="email" class="form-control" name="email" id="inputDateto3" placeholder="email@gmail.com" required>
      </div>
    </div>
    <div class="form-group row" style="margin:1rem;">
      <!-- Default input -->
      <label for="inputRoom3" class="col-sm-2 col-form-label" style="width:5rem">Address</label>
      <div class="col-sm-10" style="width:25rem" ;>
        <input type="text" class="form-control" name="address" id="inputRoom3" placeholder="Address">
      </div>
    </div>
    <!-- Grid row -->
    <!-- Grid row -->
    <div class="form-group row" style="margin:1rem;display: inline-block;">
      <div class="col-sm-10">
        <button type="reset" class="btn btn-outline-danger">Reset</button>
      </div>
    </div>
    <div class="form-group row" style="display: inline-block;">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-outline-success" name="orderbtn">Order</button>
      </div>
    </div>
    <!-- Grid row -->
  </form>
  <!-- Material form group -->
  <!--Booking Form Ends-->

  <script>
    function addPeople() {
      let people = document.getElementById("peopleNum").value;
      people++;
      if (people < 100) {
        document.getElementById("peopleNum").value = "";
        document.getElementById("peopleNum").value = people;
      } else {
        document.getElementById("peopleNum").value = "";
        document.getElementById("peopleNum").value = 1;
      }
    }

    function lessPeople() {
      let people = document.getElementById("peopleNum").value;
      people--;
      if (people >= 1) {
        document.getElementById("peopleNum").value = "";
        document.getElementById("peopleNum").value = people;
      } else {
        document.getElementById("peopleNum").value = "";
        document.getElementById("peopleNum").value = 1;
      }
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
</body>
</html>