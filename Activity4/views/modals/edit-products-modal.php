<?php

session_start();

include '../classes/User.php';

$user_obj = new User;
$product = $user_obj->getAllProducts($_SESSION['id']);

?>

<div class="modal fade" tabindex="-1" id="edit-products-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">

      <div class="card w-50 mx-auto mt-5">
                  <div class="card-header bg-white border-0 py-3">
                        <h1 class="text-center text-warning"><i class="fa-solid fa-pen-to-square"></i>Edit Product</h1>
                  </div>

            <div class="card-body">
                  <form action="../actions/edit-product.php" method="post">
                              <label for="product_name" class="form-label text-secondary mb-2">Product Name</label>
                              <input type="text" name="product_name" id="product_name" value="<?= $product['product_name']?>" class="form-control mb-4" required autofocus>
                              

                          <div class="row">
                            <div class="col">                             
                                <label for="price" class=" text-secondary mb-2">Price</label>
                                <div class="input-group mb-3">
                                  <span class="input-group-text">$</span>                                
                                  <input type="number" name="price" id="price" value="<?= $product['price']?>"class="form-control mb-5">
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="quantity" class="form-label text-secondary mb-2">Quantity</label>
                                <input type="number" name="quantity" id="quantity" value="<?= $product['quantity']?>" class="form-control mb-5">
                            </div>
                              
                          </div>

                          <button type="submit" class="btn btn-warning form-control">Edit</button>     
                        </form>
                  </div>
              </div>
      </div>
      
      </div>
    </div>
  </div>