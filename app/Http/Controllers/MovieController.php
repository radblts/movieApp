<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MovieController extends Controller
{
    public function getUpcomingMovies()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/upcoming?language=en-US&page=1', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIwMWRhYzY2M2I1MWU5MjMyOWU4MTczMWRiYmVlMDZjOCIsIm5iZiI6MTczOTM1NDM5Mi41OTIsInN1YiI6IjY3YWM3MTE4ZTA5ZDZjOTE5MGIwOWVkMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.AMkLyfQnPGnFgvWVdsknm2uA8cUrdza_S9yjJpS2wOk',
                'accept' => 'application/json',
            ],
        ]);

        $movies = json_decode($response->getBody(), true);

        return view('movies.upcoming', ['movies' => $movies['results']]);
    }

    public function getRatedMovies()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/guest_session/guest_session_id/rated/movies?language=en-US&page=1&sort_by=created_at.asc', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIwMWRhYzY2M2I1MWU5MjMyOWU4MTczMWRiYmVlMDZjOCIsIm5iZiI6MTczOTM1NDM5Mi41OTIsInN1YiI6IjY3YWM3MTE4ZTA5ZDZjOTE5MGIwOWVkMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.AMkLyfQnPGnFgvWVdsknm2uA8cUrdza_S9yjJpS2wOk',
                'accept' => 'application/json',
            ],
        ]);

        return $response->getBody();
    }
}
