<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Boxes</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .product-box {
      border: 1px solid #ddd;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
    }
    .product-img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="product-box">
        <img src="https://via.placeholder.com/200" alt="Product Image" class="product-img">
        <h3>Product Title 1</h3>
        <p>Description of product 1 goes here.</p>
        <p><strong>$19.99</strong></p>
        <a href="card.php" class="btn btn-primary">View Details</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="product-box">
        <img src="https://via.placeholder.com/200" alt="Product Image" class="product-img">
        <h3>Product Title 2</h3>
        <p>Description of product 2 goes here.</p>
        <p><strong>$24.99</strong></p>
        <a href="product2.html" class="btn btn-primary">View Details</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="product-box">
        <img src="https://via.placeholder.com/200" alt="Product Image" class="product-img">
        <h3>Product Title 3</h3>
        <p>Description of product 3 goes here.</p>
        <p><strong>$29.99</strong></p>
        <a href="product3.html" class="btn btn-primary">View Details</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
