<?php

require 'Database.php';

class User extends Database{
  
  public function store($request){

    $first_name = $request['first_name'];
    $last_name = $request['last_name'];
    $username = $request['username'];
    $password = $request['password'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(`first_name`, `last_name`, `username`, `password`)
            VALUES ('$first_name', '$last_name', '$username', '$password')";

            if ($this->conn->query($sql)) {
                header('location: ../views');
                exit;
            }else {
              die('Error creating the user: ' . $this->conn->error);
            }
   }

   public function login($request){


      $username = $request['username'];
      $password = $request['password'];

      $sql = "SELECT * FROM users WHERE `username` = '$username'";

      $result = $this->conn->query($sql);

      if ($result->num_rows == 1) {
          
          $user = $result->fetch_assoc();  //fetch_assoc() - transform to associative array

          if (password_verify($password, $user['password'])) {
             session_start();
             $_SESSION['id'] = $user['id'];
             $_SESSION['username'] = $user['username'];
             $_SESSION['first_name'] = $user['first_name'];

             header('location: ../views/dashboard.php');
             exit;
          }else {
            die('Password is incorrect');
          }
      }else {
        die('Username not found.');
      }
 }

 public function getAllProducts(){

  $sql = "SELECT `id`, `product_name`, `price`, `quantity` FROM products";

  if ($result = $this->conn->query($sql)) {
    return $result;
  }else {
    die('Error retrieving all products:' . $this->conn->error);
  }
}

public function logout(){

  session_start();
  session_unset();
  session_destroy();

  header('location: ../views/index.php');
  exit;
 }


 public function addProduct($request){

   session_start();
   $id = $_SESSION['id'];
   $product_name = $request['product_name'];
   $price = $request['price'];
   $quantity = $request['quantity'];

   $sql = "INSERT INTO products (`product_name`, `quantity`, `price`) VALUES ('$product_name','$quantity', '$price')";

   if ($this->conn->query($sql)) {
     header('location: ../views/dashboard.php');
     exit;
   }else {
     die('Error updating the products: ' . $this->conn->error);
   }
}

public function editProduct($request){
  session_start();
  $id = $_SESSION['id'];
  $product_name = $request['product_name'];
  $price = $request['price'];
  $quantity = $request['quantity'];

  $sql = "UPDATE products SET `product_name` = '$product_name', `quantity` = '$quantity', `price` = '$price' WHERE `id` = $id";

  if ($this->conn->query($sql)) {
    header('location: ../views/dashboard.php');
    exit;
  }else {
    die('Error updating the products: ' . $this->conn->error);
  }
}

}

?>