<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajouter une marque</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-800 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md p-6">
        @if (session('success'))
            <div class="mb-4 text-green-700 bg-green-100 p-2 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('car-brands.store') }}" method="POST">
            @csrf

            <!-- Nom -->
            <div class="mb-4">
                <label for="name" class="block mb-1">Nom de la marque</label>
                <input type="text" id="name" name="name" class="border border-gray-300 px-3 py-2 w-full"
                    required>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Pays -->
            <div class="mb-4">
                <label for="country" class="block mb-1">Pays</label>
                <input type="text" id="country" name="country" class="border border-gray-300 px-3 py-2 w-full"
                    required>
                @error('country')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Bouton -->
            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2">Ajouter</button>
            </div>
        </form>
    </div>

</body>

</html>
