<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>APedia - your accesories</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ms-auto">
  <div class="container-fluid justify-content-center w-100 " style="margin-left: 100px;">
    <a class="navbar-brand" href="#">
        <img style="height:50px;" src="images/icon.svg" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategori
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Earrings</a></li>
            <li><a class="dropdown-item" href="#">Bracelets</a></li>
            <li><a class="dropdown-item" href="#">Necklaces</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Deals <img src="images/deals.svg"></a>  
        </li>
        <form class="d-flex" style="margin-left: 50px;">
      <input class="form-control me-2" style="width:700px; height:40px; font-family: Arial, Helvetica, sans-serif;" type="search" placeholder="Search" aria-label="Search">
    </form>
    <li class="nav-item">
          <a  class="nav-link" href="#"><img src="images/acc.svg" style="margin-bottom:5px; margin-right:5px; margin-left:10px;">Account </a>  
        </li>
        <li class="nav-item " >
          <a  class="nav-link" href="#"><img src="images/cart.svg" style="margin-bottom:5px; margin-right:5px">Cart </a>  
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</head>
<body>
    <div class="container h-100">
        <div class="row justify-content-md-center">
            <div class="col-12">
            <img src="images/banner.svg" style="height:340px;   " class="img-fluid mx-auto d-block" alt="Responsive image">
            <div class="card">

    
    <div class="card-body" id="cat-body">
    <h3 class="card-title ms-1 mb-3 ">Kategori</h5>

        <div class="d-flex"></div>
            
        <img id="cat" src="images/earrings.svg"  class="img-fluid" alt="Responsive image">
        <img id="cat" src="images/bracelet.svg"  class="img-fluid" alt="Responsive image">
        <img id="cat" src="images/necklaces.svg"  class="img-fluid" alt="Responsive image">
        

     </div>
    </div>
    <div class="foryou mt-3">
    <h3 class="">For You</h3>

    <div class="card-deck d-flex mt-3 " style="width: 100%; height:500px">
   
    @foreach($barang as $b)
  <div class="card @if($b -> id > 1) ms-4 @endif" id="product"  style="width: 3000px; height:400px">
    <img src="{{$b -> gambar_barang}}" class="card-img-top" alt="...">
    <img style="width: 239.5px;" src="images/brand/{{$b -> brand_barang}}.svg" class="" alt="...">
    <div class="card-body">
      <p class="card-title ">{{$b -> nama_barang}}</h5>
      
    </div>
    <h6 class=" ms-3 card-text" style="margin-bottom:100px; margin-top:-10px;">Rp.{{$b -> harga_barang}}</p>

  </div>

  @endforeach
 

 
 
  </div>
</div>

  

    <div class="footer " style="margin-top:-50px;">
    <div class="d-flex flex-row justify-content-center align-items-center w-100" style="">
     <div class="footer  ">
     <img style="height:50px;" src="images/icon.svg" alt="">
     </div>

    
    </div>

    <div class="d-flex flex-row justify-content-center align-items-center  w-100" style="">
     <div class="footer  ">
     <h3>Sparkle Everyday With Us</h3>
     
     </div>
</div>
<div class="d-flex flex-row justify-content-center align-items-center w-100" >
     <div class="text-center " style="margin-right: 200px; margin-left:200px;">
      <p>© Apedia-2023</p>
     <p>
All rights reserved. No part of this publication may be reproduced, distributed, or transmitted in any form or by any means, including photocopying, recording, or other electronic or mechanical methods, without the prior written permission of the publisher, except in the case of brief quotations embodied in critical reviews and certain other noncommercial uses permitted by copyright law.</p>   
     </div>
</div>
    </div>

    <div class="d-flex flex-row justify-content-center align-items-center  w-100 mb-3" style="">
     
  <a href="https://instagram.com/elrxxqy"><img id="smedia" src="images/sm/ig.svg" style="width:30px;"  class="img-fluid" alt="Responsive image"></a>  
  <a href="https://twitter.com/signalsalt"><img id="smedia" src="images/sm/tw.svg" style="width:30px;"  class="img-fluid ms-3" alt="Responsive image"></a>  
  <a href="https://www.linkedin.com/in/ajrielrm/"><img id="smedia" src="images/sm/ln.svg" style="width:30px;"  class="img-fluid ms-3" alt="Responsive image"></a>  

</div>
     

</body>
</html>
<style>
#product:hover {
  transform: scale(1.05);
  transition: transform 0.3s ease;
  cursor: pointer;

}
#cat:hover {
  transform: scale(1.05);
  transition: transform 0.3s ease;
  cursor: pointer;

}

*{
  font-family: 'Poppins', sans-serif;
}

#cat-body{
  border-radius: 10px;  

}
</style>