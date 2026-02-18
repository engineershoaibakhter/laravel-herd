@props([
    'title' => 'My Application'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        nav > a{
            color:blue;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class='p-4'>

   <nav>
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
    </nav>

    <main class="max-w-4xl mx-auto mt-10"> 
        {{ $slot}}
    </main>
</body>
</html>