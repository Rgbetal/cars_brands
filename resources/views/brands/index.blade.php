<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Partenaires automobiles</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white min-h-screen flex flex-col items-center justify-center">

    <h2 class="text-xl mb-6">Partnership with</h2>

    <div class="flex flex-wrap gap-4 justify-center">
        @foreach ($brands as $brand)
            <div class="flex items-center gap-2 px-5 py-3 bg-gray-800 rounded-lg shadow-md hover:scale-105 transition">
                <img src="{{ $brand->logo }}" alt="{{ $brand->name }}" class="w-6 h-6">
                <span class="text-sm font-semibold">{{ $brand->name }}</span>
            </div>
        @endforeach
    </div>

</body>

</html>
