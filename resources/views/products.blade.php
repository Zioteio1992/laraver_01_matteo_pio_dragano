<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-black my-5">
  <div class="container">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav mx-auto ">
        <li class="nav-item">
          <a class="nav-link active me-5 text-light" aria-current="page" href="/">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5 text-danger" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5 text-warning" href="/products">Products</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<h1  class="fs-5 text-center my-3 ">PRODUCTS!</h1>
  
<!-- sez card -->
<div class="container my-5">
<div class="row justify-content-between">
@foreach($products as $product)
<div class="col-3">
<div class="card bg-black">
  <div class="card-body text-center">
    <h5 class="card-title text-light ">{{$product['type']}}</h5>
    <h6 class="card-subtitle my-2 mb-2 text-light">{{$product['color']}}</h6>
  </div>
</div>
</div>
@endforeach
</div>
</div>






<!-- 
@foreach($products as $product)

<p> {{$product['type']}} di colore {{$product['color']}}</p>
@endforeach -->
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>