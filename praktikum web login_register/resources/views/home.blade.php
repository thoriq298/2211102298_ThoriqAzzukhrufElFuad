<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - Thoriq Azzukruf El Fuad (2211102298)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-color: #f9f9f9;
        }
        .hero-text h1 {
            font-size: 2.8rem;
            font-weight: bold;
        }
        .hero-text p {
            font-size: 1.2rem;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container hero-section">
        <div class="row align-items-center">
            <div class="col-md-6 hero-text text-md-start text-center mb-4 mb-md-0">
                <h1>Selamat datang, {{ $user->name }}</h1>
                <p class="mt-3">Anda berhasil login</p>
                <a href="/logout" class="btn btn-danger mt-4 px-4 py-2">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
