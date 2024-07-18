<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto mt-8">
        <h1 class="text-4xl font-bold mb-8 text-center">Movies</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($movies as $movie)
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">{{ $movie->title }}</h2>
                    <p class="mb-2"><strong>Director:</strong> {{ $movie->director->name }}</p>
                    <p class="mb-2"><strong>Actors:</strong> 
                        @foreach ($movie->actors as $actor)
                            {{ $actor->name }}@if (!$loop->last), @endif
                        @endforeach
                    </p>
                    <p class="mb-2"><strong>Genres:</strong> 
                        @foreach ($movie->genres as $genre)
                            {{ $genre->name }}@if (!$loop->last), @endif
                        @endforeach
                    </p>
                    <p class="mb-2"><strong>Ratings:</strong> 
                        @foreach ($movie->ratings as $rating)
                            {{ $rating->rating }} (by {{ $rating->user->name }})@if (!$loop->last), @endif
                        @endforeach
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
