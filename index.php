<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Foodcart | Home Page</title>
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
        <a class="nav-link" href="index.php" style="font-weight: bolder;"><i class="bi bi-house"></i>
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

  <!--Food Card Starts-->
  <div class="card mb-3" style="max-width: 100%;margin:2rem;padding:1rem;border:0;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/burger1.jpg" class="img-fluid rounded-start" alt="..."  style="object-fit: contain;border-radius:1rem;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">BURGER</h5>
        <p class="card-text"> </p>
        <p class="card-text"><small class="text-muted">₹ 100</small></p>
      </div>
    </div>
  </div>
  <a href="order.php?item=Burger&price=100" class="btn btn-outline-success" style="border:0">Order</a>
</div>

<div class="card mb-3" style="max-width: 100%;margin:2rem;padding:1rem;border:0;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/pizza1.jpg" class="img-fluid rounded-start" alt="..."  style="object-fit: contain;border-radius:1rem;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">PIZZA</h5>
        <p class="card-text"> </p>
        <p class="card-text"><small class="text-muted">₹ 200</small></p>
      </div>
    </div>
  </div>
  <a href="order.php?item=Pizza&price=200" class="btn btn-outline-success" style="border:0">Order</a>
</div>

<div class="card mb-3" style="max-width: 100%;margin:2rem;padding:1rem;border:0;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/momos1.jpg" class="img-fluid rounded-start" alt="..."  style="object-fit: contain;border-radius:1rem;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">MOMOS</h5>
        <p class="card-text"> </p>
        <p class="card-text"><small class="text-muted">₹ 149</small></p>
      </div>
    </div>
  </div>
  <a href="order.php?item=Momos&price=149" class="btn btn-outline-success" style="border:0">Order</a>
</div>

<div class="card mb-3" style="max-width: 100%;margin:2rem;padding:1rem;border:0;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/noodles1.jpg" class="img-fluid rounded-start" alt="..."  style="object-fit: contain;border-radius:1rem;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">NOODLES</h5>
        <p class="card-text"> </p>
        <p class="card-text"><small class="text-muted">₹ 80</small></p>
      </div>
    </div>
  </div>
  <a href="order.php?item=Noodles&price=80" class="btn btn-outline-success" style="border:0">Order</a>
</div>

<div class="card mb-3" style="max-width: 100%;margin:2rem;padding:1rem;border:0;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/pasta1.jpg" class="img-fluid rounded-start" alt="..."  style="object-fit: contain;border-radius:1rem;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">PASTA</h5>
        <p class="card-text"> </p>
        <p class="card-text"><small class="text-muted">₹ 110</small></p>
      </div>
    </div>
  </div>
  <a href="order.php?item=Pasta&price=110" class="btn btn-outline-success" style="border:0">Order</a>
</div>

<div class="card mb-3" style="max-width: 100%;margin:2rem;padding:1rem;border:0;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/soup.jpg" class="img-fluid rounded-start" alt="..."  style="object-fit: contain;border-radius:1rem;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">SOUP</h5>
        <p class="card-text"> </p>
        <p class="card-text"><small class="text-muted">₹ 70</small></p>
      </div>
    </div>
  </div>
  <a href="order.php?item=Soup&price=70" class="btn btn-outline-success" style="border:0">Order</a>
</div>

<div class="card mb-3" style="max-width: 100%;margin:2rem;padding:1rem;border:0;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/friedchicken.jpg" class="img-fluid rounded-start" alt="..."  style="object-fit: contain;border-radius:1rem;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">FRIED CHICKEN</h5>
        <p class="card-text"> </p>
        <p class="card-text"><small class="text-muted">₹ 300</small></p>
      </div>
    </div>
  </div>
  <a href="order.php?item=Friedchicken&price=300" class="btn btn-outline-success" style="border:0">Order</a>
</div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>