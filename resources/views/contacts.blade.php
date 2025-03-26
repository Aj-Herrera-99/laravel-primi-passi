<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>contacts - Primi Passi</title>
</head>

<body class="bg-[#25282d] text-white">
    <header class="p-4 bg-[#2a2d33] text-xl">
        <nav class="flex space-x-4">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">Chi Siamo</a>
            <a href="{{ route('contacts') }}">Contatti</a>
        </nav>
    </header>
    <h1 class="text-4xl">Pagina contatti</h1>
</body>

</html>