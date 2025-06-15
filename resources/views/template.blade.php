<!DOCTYPE html>
<html lang="en">

<head>
    <title>Muhammad Hammam Aditama : 5026231179</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap & Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Custom Style -->
    <style>
        body {
            background: linear-gradient(to right, #f2f9ff, #ffffff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .jumbotron {
            background-color: #4a69bd;
            color: white;
            padding: 30px 20px;
            margin-bottom: 0;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .navbar {
            background-color: #ffffff !important;
            border-bottom: 1px solid #dee2e6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .navbar-nav .nav-link {
            color: #4a69bd !important;
            font-weight: 600;
            padding: 10px 15px;
            transition: 0.3s ease;
            border-radius: 8px;
        }

        .navbar-nav .nav-link:hover {
            background-color: #d6e0ff;
            color: #1e3799 !important;
        }

        .container {
            margin-top: 30px;
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
        }

        @media (max-width: 576px) {
            .navbar-nav {
                flex-direction: column;
            }

            .navbar-nav .nav-link {
                margin-bottom: 5px;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="jumbotron text-center mx-auto">
        <h1>5026231179 : Muhammad Hammam Aditama</h1>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="/frontend"><i class="fas fa-laptop-code mr-1"></i>All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai"><i class="fas fa-users mr-1"></i>Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/semen"><i class="fas fa-database mr-1"></i>Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-clipboard-check mr-1"></i>EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan"><i class="fas fa-user-edit mr-1"></i>Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan"><i class="fas fa-user-cog mr-1"></i>Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/keranjangbelanja"><i class="fas fa-shopping-cart mr-1"></i>Latihan 3</a>
            </li>
        </ul>
    </nav>

    <!-- Content -->
    <br>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
