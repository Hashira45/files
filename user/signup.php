<?php
session_start();
include('../conn.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $sinnumber = $_POST['sinnumber'];
    $password = $_POST['password'];


    // $query =
    $query_run = $pdo->prepare( "INSERT INTO users(username, email, sinnumber, password) VALUES(:username, :email, :sinnumber, :password)");
    $query_run->bindValue(":username", $username);
    $query_run->bindValue(":email", $email);
    $query_run->bindValue(":sinnumber", $sinnumber);
    $query_run->bindValue(":password", $password);
    $query_run->execute();
}else{
    header("location:../index.php");
}

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
    <form action="" method="POST">
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 150px;">
                <h4 class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3">
                                <div class="card">
                                    <div class="card-header text-center">Signup</div>
                                    <div class="card-body">
                                        <div>
                                            <label for="username" class="form-label">Username</label>
                                            <input name="username" type="name" class="form-control" id="name" placeholder="Enter your name" />

                                        </div>
                                        <div class="mt-2">
                                            <label for="email" class="form-label">Email</label>
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Enter Your Email" />

                                        </div>
                                        <div class="mt-2">
                                            <label for="password" class="form-label">Sin number</label>
                                            <input name="sinnumber" type="text" class="form-control" id="sinnumber" placeholder="Enter Your sin number" />
                                        </div>
                                        <div class="mt-2">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="" placeholder="enter password" />
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100 mt-3">
                                            Signup
                                        </button>
                                        <p class="text-center mt-3">
                                            Already Have Account? <a href="../index.php">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </h4>
    </form>

</body>

</html>