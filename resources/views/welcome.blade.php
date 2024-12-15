<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel API</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

</head>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>
</head>

<body class="text-gray-700 bg-gray-100">
    <div class="container px-4 mx-auto">
        <div class="grid grid-cols-3 my-10">
            @foreach ($posts as $post)
                <div class="p-5 bg-white border border-gray-200 hover:bg-blue-100">
                    <h2 class="mb-4 text-lg font-bold">{{ $post->title }}</h3>
                        <p class="text-xs">{{ $post->excerpt }}</p>
                        <p class="text-xs text-right">{{ $post->published_at }}</p>
                </div>
            @endforeach
        </div>
        <div class="mb-10">
            {{ $posts->links() }}
        </div>
    </div>
</body>

</html>

</html>
