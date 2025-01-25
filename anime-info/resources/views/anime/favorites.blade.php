<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorit Anime</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Anime Favorit</h1>
        <div class="row">
            @foreach ($favorites as $anime)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ $anime->image_url }}" class="card-img-top" alt="{{ $anime->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $anime->title }}</h5>
                        <p class="card-text">{{ $anime->synopsis }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>