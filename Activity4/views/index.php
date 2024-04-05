<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Login</title>
</head>
<body>

<div style="height: 100vh">
        <div class="row h-100 m-0">
              <div class="card w-25 my-auto mx-auto">
                  <div class="card-header bg-white border-0 py-3">
                        <h1 class="text-center text-primary">LOGIN <i class="fa-solid fa-right-from-bracket"></i></h1>
                  </div>

                  <div class="card-body">
                        <form action="../actions/login.php" method="post">
                              <label for="username" class="text-secondary mb-2">Username</label>
                              <input type="text" name="username" id="username" class="form-control mb-4" placeholder="Username" required autofocus>
                              

                              <label for="password" class="text-secondary mb-2">Passsword</label>
                              <input type="password" name="password" id="password" class="form-control mb-5" placeholder="Password">

                              <button type="submit" class="btn btn-primary w-100">Log in</button>
                        </form>

                        <a href="register.php" class="btn btn-danger text-white text-center mt-3 d-block mx-auto">Create an Account</a>
                  </div>
              </div>
        </div>
    </div>
  
</body>
</html>