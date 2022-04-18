<?php
session_start();
require_once('userDb.php');
    $error          = "";
    $username       = null;
    $pass           = null;
    $confirm_pass   = null;
    $user           = new user();

if (isset($_POST['signup'])) {
    $username       = $_POST['username'];       
    $pass           = $_POST['password'];
    $confirm_pass   = $_POST['cpassword'];
    $user->SetName($_POST['username']);
    $user->SetPassword($_POST['password']);

    if($user->addUser()) {
        header("Location: login.php?done=You account is successfully created! Please try to login. ");
    } else {
    $error = "This username '$username' is already in use! please try another one.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact Management App</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Contact List</a>
            <a class="nav-link active text-muted hov" href="login.php">Login</a>
        </div>
    </nav>
    <main>
        <div class="d-flex justify-content-center align-items-center">
            <div class="bg-light p-5 m-5 w-50">
                <form method="POST" onsubmit="return validation()" novalidate>
                    <div class="m-3 d-flex justify-content-center align-items-center">
                        <h3>Sign Up</h3>
                    </div>
                    <?php if($error != "") { ?>
                        <div class="alert alert-danger mt-3 text-center">
                            <?php echo $error; ?>
                        </div>
                    <?php  $error = null; } ?>
                    <div class="m-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="small-size form-control" id="username" name="username" placeholder="username" required>
                        <span id="usererror" style="color:red;"></span>
                    </div>
                    <div class="m-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="small-size form-control" id="password" name="password" placeholder="password" required>
                        <span id="passerror" style="color:red;"></span>
                    </div>
                    <div class="m-3">
                        <label for="cpassword" class="form-label">Password verify</label>
                        <input type="password" class="small-size form-control" id="cpassword" name="cpassword" placeholder="password verify" required>
                        <span id="cpasserror" style="color:red;"></span>
                    </div>
                    <div class="m-3">
                        <button class="w-100 btn btn-primary" type="submit" name ="signup">Sign Up</button>
                    </div>
                    <div class="m-3">
                        <p>Already have an account? <a class="text-decoration-none" href="login.php">Log In</a> here.</p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>