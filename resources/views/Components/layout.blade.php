<!DOCTYPE html>
<html lang="en" class="light overflow-x-hidden">

<head>
    <meta charset="UTF-8">
    
    <title>Raad Oil</title>
    <meta name="color-scheme" content="light only">
    <meta name="supported-color-schemes" content="light">
    <meta name="color-scheme" media="(prefers-color-scheme: dark)" content="light">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#ffffff">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#ffffff">
    <meta name="description" content="Raad Oil crafts premium olive oil with purity and tradition. Discover authentic flavor. | رعد أويل تنتج زيت زيتون عالي الجودة، نقي وأصيل، بطعم لا يُنسى.">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      
</head>
<body class="overflow-x-hidden bg-white text-gray-900">

    <!-- Reusable Navbar -->
    <x-navbar :is-home="$isHome ?? false" />

    <!-- Page-specific content will be injected here -->
    <main class="{{ $padding ?? true ? 'pt-0 px-0 py-0' : 'p-0' }}">

        {{ $slot }}
    </main>
 <!--  Alpine.js included here -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

      <!-- Reusable Footer -->
    <x-footer />

</body>


</html>
