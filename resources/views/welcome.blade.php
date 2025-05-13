<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('your-image-url.jpg'); /* Replace with your chosen image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            padding: 120px 20px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-link {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="#">School Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add Teachers</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Students</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Subjects</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Background Section -->
<div class="overlay"></div>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="content">
        <h1 class="display-4 fw-bold">Welcome to School Management</h1>
        <p class="fs-5">Efficiently manage teachers, students, and subjects.</p>
        <a href="#" class="btn btn-lg btn-light mt-3">Get Started</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>