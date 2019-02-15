<!doctype html>
<html lang="en">
<head>
    <title>SFJS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <?php
    require_once 'config.php';
    $conn = new mysqli($hn, $un, $pw, $db);

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }


    if(isset($_POST['username']) && isset($_POST['password'])) {

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        //Building the query
        $query = "SELECT * FROM USER WHERE Uemail = '$username' and Upassword = '$password'";

        //Performs a query on the database
        $result = $conn->query($query);
        if (!$result) die ($conn->error);

        if ($username == 'admin' && $password == 'admin1')
            header('Location: admin_welcome.php');
        elseif ($username == 'user' && $password == 'user1')
            header('Location: user_welcome.php');
        else
            echo "Wrong Username of password";
    }
    ?>
</head>
<body>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3 text-primary font-weight-bold text-center">Welcome to Science Fair</h1>
    </div>
</div>

<div class="d-flex justify-content-center">
    <form name="form" action="admin_page.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <label><a href="#">Forgot password?</a></label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>