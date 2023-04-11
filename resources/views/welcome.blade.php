<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main class="bg-light">
        <div class="d-flex flex-wrap">
          @forelse ($movies as $Movie)
            <div class="card m-2" style="width: 18rem;">
              <div class="card-body">
                <h3 class="card-title">{{ $Movie->title }}</h3>
                <p class="card-subtitle mb-2 text-muted">{{ $Movie->vote }}</p>
              </div>
            </div>
          @empty
          @endforelse
        </div>
      </main>

</body>

</html>