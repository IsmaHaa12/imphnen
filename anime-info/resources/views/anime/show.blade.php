<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $anime['title'] }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $anime['images']['jpg']['image_url'] }}" class="img-fluid" style="border-radius: 15px; box-shadow: 0 8px 30px rgba(0, 255, 255, 0.6);">
            </div>
            <div class="col-md-6">
                <h1 style="color: #00ffff;">{{ $anime['title'] }}</h1>
                <p style="color: #bbb;">{{ $anime['synopsis'] }}</p>
                <p><strong>Rating:</strong> {{ $anime['score'] }}</p>
                <p><strong>Status:</strong> {{ $anime['status'] }}</p>
                <a href="{{ url('/') }}" class="btn btn-primary" style="background: #00ffff; border: none; color: #121212;">Kembali</a>
            </div>
        </div>
    </div>

</body>

</html>