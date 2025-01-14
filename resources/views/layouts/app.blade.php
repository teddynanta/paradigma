<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog')</title>
    @vite('resources/css/app.css')
    @livewireStyles<!-- Add this in your Blade layout head section for testing -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
</head>

<body class="bg-gray-100">
    @include('partials.navbar')
    <div>
        @yield('content')
    </div>
    @livewireScripts
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
</body>

</html>
