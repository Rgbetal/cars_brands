<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Modifier une marque</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-4">

    <nav class="bg-white shadow p-4 mb-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-800">Cars Heaven</a>
            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">
                        Se déconnecter
                    </button>
                </form>
            </div>
    </nav>

    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        <div>
            <a href="{{ route('car-brands.index') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
                Retour à la liste
            </a>
        </div>

        <h1 class="text-2xl font-bold mb-6 text-center">Modifier la marque</h1>

        @if ($errors->any())
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 p-4 rounded">
                <ul class="list-disc pl-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('car-brands.update', $carBrand->id) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block font-semibold text-gray-700 mb-1">Nom <span
                        class="text-red-500">*</span></label>
                <input id="name" name="name" type="text" required value="{{ old('name', $carBrand->name) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div>
                <label for="country" class="block font-semibold text-gray-700 mb-1">Pays</label>
                <input id="country" name="country" type="text" value="{{ old('country', $carBrand->country) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="text-center">
                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                    Mettre à jour
                </button>
            </div>
        </form>
    </div>

</body>

</html>
