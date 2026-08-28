<?php

$page = $_GET['page'] ?? 'home';

$allowed_pages = [
    'home',
    'register',
    'login'
];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WebSys Portal</title>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    >
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold" href="index.php?page=home">
                WebSys Portal
            </a>

            <div class="navbar-nav flex-row gap-3">

                <a class="nav-link" href="index.php?page=home">
                    Home
                </a>

                <a class="nav-link" href="index.php?page=register">
                    Register
                </a>

                <a class="nav-link" href="index.php?page=login">
                    Login
                </a>

            </div>
        </div>
    </nav>

    <main class="container py-4 flex-grow-1">

        <?php
        switch ($page) {

            case 'register':
                include 'register.php';
                break;

            case 'login':
                include 'login.php';
                break;

            default:
                ?>

                <div class="text-center mt-5">
                    <h1 class="display-5 fw-bold">
                        Welcome to WebSys Portal
                    </h1>

                    <p class="lead text-muted">
                        Web Systems & Technologies
                    </p>

                    <div class="mt-4">
                        <a href="index.php?page=register"
                           class="btn btn-primary me-2">
                            Register Now
                        </a>

                        <a href="index.php?page=login"
                           class="btn btn-outline-dark">
                            Login
                        </a>
                    </div>
                </div>

                <?php
                break;
        }
        ?>

    </main>

    <footer class="bg-dark text-white text-center py-3">
        <small>
            &copy; <?= date('Y') ?> WebSys Portal
        </small>
    </footer>

</body>
</html>
