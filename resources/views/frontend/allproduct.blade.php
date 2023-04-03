<!DOCTYPE html>
<html>
<head>
  <title>Blogs</title>
  <!-- include Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-5Nfz1cNclxR5z5b5/GtdlYgOIptlSD7V9jKLZG1dVfxJiGXuOF7KgeI4w84+ynD75PjnQ+c/zkJ/I9ECZj3Hgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <!-- CSS code for the product card -->
  <style>
    .card {
      border-radius: 10px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
      margin: 20px;
      overflow: hidden;
      position: relative;
      width: 18rem;
    }
  
    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%;
    }
  
    .card-body {
      padding: 20px;
    }
  
    .card-title {
      font-size: 24px;
      font-weight: bold;
    }
  
    .card-text {
      color: #444;
      font-size: 18px;
      margin-bottom: 20px;
    }
  
    .card-price {
      color: #777;
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 20px;
    }
  
    #buy-btn {
      background-color: #f90;
      border: none;
      border-radius: 20px;
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      padding: 10px 20px;
      position: absolute;
      bottom: 20px;
      right: 20px;
    }
  
    #buy-btn:hover {
      background-color: #fa0;
      cursor: pointer;
    }
  </style>
  
    <!-- include the menubar -->
    @include('layouts.menubar')

    
<!-- HTML code for a product card -->
<div class="container" style="margin-top: 50px;">
<div class="row">
    @foreach ($products as $product)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('img/products/'.$product->photo) }}" alt="{{ $product->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->details }}</p>
            <p class="card-price">Taka {{ $product->price }}</p>
            <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
        </div>
      </div>
     @endforeach 
</div>
</div>

      
      




   <!-- JavaScript code for the product card -->
   <script>
    // Get the buy button
    const buyBtn = document.querySelector('#buy-btn');
  
    // Add a click event listener to the buy button
    buyBtn.addEventListener('click', () => {
      // Display a pop-up modal with a confirmation message
      alert('Thank you for your purchase!');
    });
  </script>
  
</body>
</html>