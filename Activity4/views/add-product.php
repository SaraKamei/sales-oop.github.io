<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Edit Product</title>
</head>
<body>

<div style="height: 100vh">
    <div class="card w-25 mx-auto mt-5">
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
                                <div class="input-group">
                                <span class="bg-light input-group-text">$</span>
                                
                                  <input type="number" name="price" id="price" class="form-control mb-5">
                                  </div>
                            </div>
                            <div class="col">
                                <label for="quantity" class="text-secondary mb-2">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control mb-5">
                            </div>
                              
                          </div>

                          <a href="dashboard.php" class="btn btn-info w-100">Add</a>
                        </form>
                  </div>
              </div>
        
    </div>
  
</body>
</html>