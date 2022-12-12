<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icons/brand.svg" type="image/x-icon">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Tourx - Make the most of your trip</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light px-3 px-md-5">
            <a href="index.php" class="navbar-brand d-flex align-items-center">
                <img width="30" height="30" src="./img/icons/brand.svg" alt="">
                <h2 class="text-uppercase ml-2">Tourx</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="#navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto font-weight-bold">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-red dropdown-toggle" href="#" id="localsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Locals
                        </a>
                        <div class="dropdown-menu" aria-labelledby="localsDropdown">
                        <a class="dropdown-item" href="#">Dublin</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Paris</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">California</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="plans.php" class="nav-link">Plans</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item ml-md-5">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal">Sign In</a>
                    </li>
                    <li class="nav-item ml-md-2">
                        <a href="signup.php" class="nav-link btn btn-danger font-weight-bold text-light">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>