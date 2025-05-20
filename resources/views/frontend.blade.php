<!DOCTYPE html>
<html>
<head>
    <title>Tugas Week 11</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 500px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1>Tugas Week 11</h1>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <a href="{{ url('/index') }}" class="btn btn-outline-secondary m-2" target="_blank">Index</a>
                    <a href="{{ url('/js1') }}" class="btn btn-outline-secondary m-2" target="_blank">JS 1</a>
                    <a href="{{ url('/js2') }}" class="btn btn-outline-secondary m-2" target="_blank">JS 2</a>
                    <a href="{{ url('/latihan1') }}" class="btn btn-outline-secondary m-2" target="_blank">Latihan 1</a>
                    <a href="{{ url('/pertama') }}" class="btn btn-outline-secondary m-2" target="_blank">Pertama</a>
                    <a href="{{ url('/template1') }}" class="btn btn-outline-secondary m-2" target="_blank">Template 1</a>
                    <a href="{{ url('/tugaslinktree') }}" class="btn btn-outline-secondary m-2" target="_blank">Tugas Linktree</a>
                    <a href="{{ url('/tugaspertama') }}" class="btn btn-outline-secondary m-2" target="_blank">Tugas Pertama</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
