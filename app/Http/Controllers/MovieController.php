<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Import Laravel's HTTP client
use Carbon\Carbon; // To handle dates easily

class MovieController extends Controller
{
    const API_KEY = "01dac663b51e92329e81731dbbee06c8";
    public function getUpcomingMovies()
    {
        

        $response = Http::get('https://api.themoviedb.org/3/movie/upcoming', [
            'language' => 'en-US',
            'region' => 'US',
            'api_key' => self::API_KEY,
        ]);

        $movies = $response->json()['results'] ?? [];

        $today = Carbon::today();

        $movies = array_filter($movies, function ($movie) use ($today) {
            return Carbon::parse($movie['release_date'])->isToday() || Carbon::parse($movie['release_date'])->isAfter($today);
        });

        foreach ($movies as &$movie) {
            $creditsResponse = Http::get("https://api.themoviedb.org/3/movie/{$movie['id']}/credits", [
                'api_key' => self::API_KEY
            ]);

            $credits = $creditsResponse->json();
            $director = collect($credits['crew'] ?? [])->firstWhere('job', 'Director');
            $movie['director'] = $director['name'] ?? 'Unknown';
        }

        usort($movies, function ($a, $b) {
            return strtotime($a['release_date']) - strtotime($b['release_date']);
        });

        return view('movies.upcoming', ['movies' => $movies]);
    }
}
