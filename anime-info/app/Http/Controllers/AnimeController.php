<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Favorite;

class AnimeController extends Controller
{
    // Fungsi untuk menampilkan daftar anime
    public function index(Request $request)
    {
        $query = $request->input('search', '');

        $response = Http::get('https://api.jikan.moe/v4/anime', [
            'q' => $query,
        ]);

        $animeList = $response->json()['data'] ?? [];

        return view('anime.index', ['animeList' => $animeList]);
    }

    // Fungsi untuk menampilkan detail anime
    public function show($id)
    {
        $response = Http::get("https://api.jikan.moe/v4/anime/{$id}");
        $anime = $response->json()['data'] ?? null;

        if (!$anime) {
            abort(404, 'Anime not found');
        }

        return view('anime.show', ['anime' => $anime]);
    }

    // Fungsi untuk menambahkan anime ke favorit
    public function addToFavorites(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'image_url' => 'required',
            'synopsis' => 'nullable',
        ]);

        Favorite::create($data);

        return redirect('/')->with('success', 'Anime ditambahkan ke favorit!');
    }

    // Fungsi untuk menampilkan daftar favorit
    public function favorites()
    {
        $favorites = Favorite::all();
        return view('anime.favorites', ['favorites' => $favorites]);
    }
}
