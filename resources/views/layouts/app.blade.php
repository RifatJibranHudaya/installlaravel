<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Laravel App' }}</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
</head>
<body>
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Praktikum Laravel</p>
    </footer>
</body>
</html>