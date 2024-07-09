<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>

<body>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <div class="rt-card">
                    <h2>
                        {{ $movie->title }}
                    </h2>
                    <h4>
                        {{ $movie->original_title }}
                    </h4>
                    <p>{{ $movie->nationality }}</p>
                    <p>{{ $movie->date }}</p>
                    <h6>{{ $movie->vote }}</h6>
                </div>
            </li>
        @endforeach
    </ul>
</body>

</html>
