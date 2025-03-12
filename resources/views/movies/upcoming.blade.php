
<!DOCTYPE html>
<html>
<head>
    <title>Upcoming Movies</title>
</head>
<body>
    <h1>Upcoming Movies</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie['title'] }} - Release Date: {{ $movie['release_date'] }}</li>
        @endforeach
    </ul>
</body>
</html>
