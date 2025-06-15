<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tama's Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to right, #eaf0f9, #ffffff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dashboard-header {
            background-color: #4a69bd;
            color: white;
            padding: 30px 0;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .dashboard-header h1 {
            font-weight: bold;
            margin-bottom: 0;
        }
        .card-custom {
            border-radius: 15px;
            background-color: white;
        }
        .btn-custom {
            min-width: 170px;
            margin: 10px;
            font-weight: 500;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(74, 105, 189, 0.3);
        }
        .tab-button {
            font-size: 1rem;
            font-weight: 600;
        }
        .nav-tabs .nav-link.active {
            background-color: #4a69bd;
            color: white;
            border-color: #4a69bd;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .nav-tabs .nav-link {
            color: #4a69bd;
        }
        .nav-tabs .nav-link:hover {
            color: #1e3799;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="dashboard-header text-center">
        <div class="container">
            <h1><i class="fas fa-user-circle mr-2"></i>Tama's Dashboard</h1>
            <p class="lead">Selamat datang! Silakan eksplor tugas-tugas mingguanku 💼</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container py-5">
        <div class="card shadow card-custom p-4">
            <!-- Tabs -->
            <ul class="nav nav-tabs mb-4 justify-content-center" id="etsTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active tab-button" id="before-tab" data-toggle="tab" href="#before" role="tab">Before ETS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-button" id="after-tab" data-toggle="tab" href="#after" role="tab">After ETS</a>
                </li>
            </ul>

            <!-- Tab Contents -->
            <div class="tab-content" id="etsTabContent">
                <!-- BEFORE ETS -->
                <div class="tab-pane fade show active" id="before" role="tabpanel">
                    <div class="d-flex flex-wrap justify-content-center">
                        <a href="{{ url('/index') }}" class="btn btn-outline-primary btn-custom" target="_blank"><i class="fas fa-file-alt mr-1"></i> ETS</a>
                        <a href="{{ url('/js1') }}" class="btn btn-outline-primary btn-custom" target="_blank"><i class="fas fa-calculator mr-1"></i> JS 1 (Kalkulator)</a>
                        <a href="{{ url('/js2') }}" class="btn btn-outline-primary btn-custom" target="_blank"><i class="fas fa-user-plus mr-1"></i> JS 2 (Form Regis)</a>
                        <a href="{{ url('/latihan1') }}" class="btn btn-outline-primary btn-custom" target="_blank"><i class="fas fa-pencil-alt mr-1"></i> Latihan 1(Dashboard)</a>
                        <a href="{{ url('/pertama') }}" class="btn btn-outline-primary btn-custom" target="_blank"><i class="fas fa-play-circle mr-1"></i> Pertama</a>
                        <a href="{{ url('/template1') }}" class="btn btn-outline-primary btn-custom" target="_blank"><i class="fas fa-layer-group mr-1"></i> Template 1</a>
                        <a href="{{ url('/tugaslinktree') }}" class="btn btn-outline-primary btn-custom" target="_blank"><i class="fas fa-link mr-1"></i> Tugas Linktree</a>
                        <a href="{{ url('/tugaspertama') }}" class="btn btn-outline-primary btn-custom" target="_blank"><i class="fas fa-book-open mr-1"></i> Tugas Pertama</a>
                    </div>
                </div>

                <!-- AFTER ETS -->
                <!-- AFTER ETS -->
<div class="tab-pane fade" id="after" role="tabpanel">
    <div class="d-flex flex-wrap justify-content-center">
        <a href="/pegawai" class="btn btn-outline-primary btn-custom" target="_blank">
            <i class="fas fa-users mr-1"></i> Pegawai
        </a>
        <a href="/semen" class="btn btn-outline-primary btn-custom" target="_blank">
            <i class="fas fa-database mr-1"></i> Tugas CRUD
        </a>
        <a href="#" class="btn btn-outline-primary btn-custom" target="_blank">
            <i class="fas fa-clipboard-check mr-1"></i> EAS
        </a>
        <a href="/karyawan" class="btn btn-outline-primary btn-custom" target="_blank">
            <i class="fas fa-laptop-code mr-1"></i> Latihan 1
        </a>
        <a href="/karyawan" class="btn btn-outline-primary btn-custom" target="_blank">
            <i class="fas fa-code mr-1"></i> Latihan 2
        </a>
        <a href="/latihan3" class="btn btn-outline-primary btn-custom" target="_blank">
            <i class="fas fa-terminal mr-1"></i> Latihan 3
        </a>
    </div>
</div>

            </div>
        </div>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
