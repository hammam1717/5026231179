<html>
<head>
    <title>Helperfind Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #144286;
            color: white;
            padding: 20px;
            position: fixed;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }
        .logout-btn {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
        }
        .main-content {
            margin-left: 270px;
            padding: 20px;
        }
        .empty-result {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h5>User</h5>
        <p>user@gmail.com</p>
        <a href="#">Helperlog</a>
        <a href="#" class="font-weight-bold">Helperfind</a>
        <a href="#">Helperassist</a>
        <button class="btn btn-light d-block w-95 logout-btn">Log Out</button>
    </div>
    
    <div class="main-content">
        <h2>Helperfind Dashboard</h2>
        <p class="font-weight-bold">Filter PRT Berdasarkan</p>
        <div class="filter-card mb-4">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <select class="form-control">
                                <option>Semua Kategori</option>
                                <option>Baby Sitter</option>
                                <option>Perawat Lansia</option>
                            </select>
                        </div>
                        
                        <div class="col-md-2 mb-3">
                            <select class="form-control">
                                <option>Semua Lokasi</option>
                                <option>Jakarta</option>
                                <option>Bandung</option>
                            </select>
                        </div>
                        
                        <div class="col-md-2 mb-3">
                            <select class="form-control">
                                <option>Semua Rating</option>
                                <option>4 Keatas</option>
                                <option>3 Keatas</option>
                            </select>
                        </div>
                        
                        <div class="col-md-2 mb-3">
                            <select class="form-control">
                                <option>Semua Umur</option>
                                <option>20-30 Tahun</option>
                                <option>30-40 Tahun</option>
                            </select>
                        </div>
                        <div class="col-md-auto">
                            <button class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                    

        <div class="empty-result">
            <img src="gambar1.png">
            <h5>Maaf, kami tidak bisa menemukan PRT yang cocok</h5>
            <h5>Coba pencarian lain!</h5>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
