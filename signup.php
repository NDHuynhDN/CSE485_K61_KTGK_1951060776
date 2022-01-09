<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/ajax.js"></script>
    <!-- <link rel="stylesheet" href="css/signin.css"> -->
</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">TLU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
        <form>
            
            <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" id="inputUser" name="txtUser" class="form-control" placeholder="Username" required autofocus>
            
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="email" name="txtEmail" class="form-control" placeholder="Email address" required>
            <small id = "emailHelp"></small>
            
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password" required>
            
            <label for="inputPassword" class="sr-only">Retype Password</label>
            <input type="password" id="inputPassword" name="txtRPass" class="form-control" placeholder="Password" required>
            
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }

                ?>
            </div>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSignUp" >Sign up</button>
            
        </form>
        </div>    
    </main>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
</body>
</html>