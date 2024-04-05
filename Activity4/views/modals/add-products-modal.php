<div class="modal fade" tabindex="-1" id="add-products-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">

    <div class="card w-100 mx-auto mt-5">
                  <div class="card-header bg-white border-0 py-3">
                        <h1 class="text-center text-info"><i class="fa-solid fa-box"></i>Add Product</h1>
                  </div>

                  <div class="card-body">
                        <form action="../actions/add-product.php" method="post">
                              <label for="product_name" class="text-secondary mb-2">Product Name</label>
                              <input type="text" name="product_name" id="product_name" class="form-control mb-4" required autofocus>
                              

                          <div class="row">
                            <div class="col">                             
                                <label for="price" class="text-secondary mb-2">Price</label>
                                <div class="input-group mb-3">
                                  <span class="input-group-text">$</span>                                
                                  <input type="number" name="price" id="price" class="form-control mb-5">
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="quantity" class="text-secondary mb-2">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control mb-5">
                            </div>
                              
                          </div>

                          <button type="submit" class="btn btn-info form-control">Add</button>     
                        </form>
                  </div>
             
        
    </div>
      </div>
      
    </div>
  </div>
</div>



