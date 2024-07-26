<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Home</title>
    <link rel="icon" href="https://www.svgrepo.com/show/478768/blog-writing.svg" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="h-full">
<div class="min-h-full">
  <x-Navbar></x-Navbar> <!-- Panggil components navbar.blade.php -->
  <x-header> {{ $title }}</x-header> <!-- Panggil components header.blade.php -->
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
  </main>
</div>
<x-footer></x-footer> <!-- Panggil components footer.blade.php -->
</body>
</html>