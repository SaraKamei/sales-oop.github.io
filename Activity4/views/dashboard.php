<?php

session_start();

include '../classes/User.php';

$user_obj = new User;
$all_products = $user_obj->getAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Dashboard</title>
</head>
<body>

<nav class="navbar navbar-expand navbar-white" style="margin-bottom: 80px;">
        <div class="container">         
                      <a href="dashboard.php" class="nav-link ms-3"><i class="fa-solid fa-house m-2"></i></a>
                      <a href="profile.php" class="nav-link text-decoration-none text-secondary"><h4 class="text-center">Welcome, <?= $_SESSION['first_name']?></h4></a>
                      <a href="logout.php" class="nav-link me-3"><i class="fa-solid fa-user-xmark text-danger me-2"></i></a>
                  
        </div>
</nav>

<main class="row justify-content-center m-5">

<h2 class="text-start">Product List</h2>
<a class="text-decoration-none display-6"><i class="fa-solid fa-plus text-end d-block text-info" data-bs-toggle="modal" data-bs-target="#add-products-modal"></i></a>

<?php

include 'modals/add-products-modal.php';

?>

<table class="table table-hover align-middle">
    <thead>
        <tr class="table-dark text-white">
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php
      while ($product = $all_products->fetch_assoc()) {
    ?>
    <tr>
          <td><?= $product['id'] ?></td>
          <td><?= $product['product_name'] ?></td>
          <td><?= $product['price'] ?></td>
          <td><?= $product['quantity'] ?></td>
          <td>
          <?php
                 if ($_SESSION['id'] == $product['id']) {
           ?>
                              
                  <button type="button" data-bs-toggle="modal" data-bs-target="#edit-products-modal" class="btn btn-warning" title="Edit">
                  <i class="fa-regular fa-pen-to-square"></i>
                 </button>

                  <a href="delete-product.php" class="btn btn-danger" title="Delete">
                  <i class="fa-regular fa-trash-can"></i>
                  </a>
                  <?php

                  include "modals/edit-products-modal.php";

                  ?>
          <?php
           }
          ?>
          </td>
    </tr>
    <?php
     }
     ?>
    </tbody>
</table>

</main>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>