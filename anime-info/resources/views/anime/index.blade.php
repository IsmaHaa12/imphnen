<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Anime Info</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Anime</h1>

        <!-- Form Pencarian -->
        <form method="GET" action="{{ url('/') }}" class="input-group mb-4">
            <input type="text" name="search" class="form-control" placeholder="Cari anime..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Cari</button>
        </form>

        <!-- Daftar Anime -->
        <div class="container mt-5">
            <h1 class="text-center mb-5" style="color: #00ffff; text-shadow: 0 0 20px #00ffff;">Daftar Anime</h1>
            <div class="row">
                @foreach ($animeList as $anime)
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card p-2 card-futuristic">
                        <img src="{{ $anime['images']['jpg']['image_url'] }}" class="card-img-top" style="border-radius: 12px;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #00ffff;">{{ $anime['title'] }}</h5>
                            <p class="card-text" style="color: #bbb;">{{ Str::limit($anime['synopsis'], 100) }}</p>
                            <a href="{{ url('/anime/' . $anime['mal_id']) }}" class="btn btn-primary" style="background: #00ffff; border: none; color: #121212; box-shadow: 0 4px 15px rgba(0, 255, 255, 0.6);">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 1000, // Durasi animasi
                easing: 'ease-in-out',
            });
        });
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            /* Dark mode */
            color: #fff;
            /* Text warna putih */
            margin: 0;
            padding: 0;
        }

        .card-futuristic {
            background: linear-gradient(145deg, #1a1a1a, #262626);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 255, 255, 0.2);
            display: flex;
            flex-direction: column;
            height: 100%;
            overflow: hidden;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
            /* Sesuaikan tinggi gambar */
            border-radius: 12px;
        }

        .btn-primary {
            background: #00ffff;
            border: none;
            color: #121212;
            box-shadow: 0 4px 15px rgba(0, 255, 255, 0.6);
            transition: background 0.3s ease;
        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
    </style>

</body>
<style>
    .card:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 6px 20px rgba(0, 255, 255, 0.5);
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, #00ffff, #007fff);
        box-shadow: 0 6px 20px rgba(0, 255, 255, 0.7);
    }
</style>

</html>