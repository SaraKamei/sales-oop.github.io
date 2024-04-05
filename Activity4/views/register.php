<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Register</title>
</head>
<body class="bg-light">

<div style="height: 100vh">
          <div class="card w-25 my-auto mx-auto mt-5">
              <div class="card-header bg-white border-0 py-3">
                  <h1 class="text-center text-danger"><i class="fa-solid fa-user-plus"></i>Registration</h1>
              </div>

              <div class="card-body">
                  <form action="../actions/register.php" method="post">
                    <div class="row">
                      <div class="col mb-3">
                          <label for="first-name" class="form-label">First Name</label>
                          <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
                      </div>

                      <div class="col mb-3">
                          <label for="last-name" class="form-label">Last Name</label>
                          <input type="text" name="last_name" id="last-name" class="form-control" required>
                      </div>
                    </div>

                      <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" name="username" id="username" class="form-control"required>
                      </div>

                      <div class="mb-5">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" id="password" class="form-control">
                        
                      </div>

                      <button type="submit" class="btn btn-danger w-100">Register</button>
                  </form>
              </div>
          </div>
      
</div>


  
</body>
</html>