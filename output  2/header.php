<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WebSys Portal</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold" href="index.php?page=home">
                WebSys Portal
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavigation">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link px-3" href="index.php?page=home">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3" href="index.php?page=register">
                            Registration
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3" href="index.php?page=login">
                            Login
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <main class="container flex-grow-1 py-4">
