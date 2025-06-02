<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Tableau de bord - Cars Heaven</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <nav class="bg-white shadow p-4 flex justify-between items-center w-full">
        <a href="{{ url('/') }}" class="flex items-center space-x-2 text-3xl font-bold text-black">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-8">
            <span>Cars Heaven</span>
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded-md transition">
                Se déconnecter
            </button>

        </form>
    </nav>

    <div class="flex flex-1">
        @include('components.sidebar')

        <main class="flex-1 p-6">
            <h1 class="text-2xl font-extrabold text-gray-800 text-center mb-10">📊 Tableau de bord</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-4 rounded shadow text-center">
                    <h2 class="text-sm text-gray-500">Marques enregistrées</h2>
                    <p class="text-xl font-bold text-blue-600">{{ $brandsCount }}</p>
                </div>
                <div class="bg-white p-4 rounded shadow text-center">
                    <h2 class="text-sm text-gray-500">Fournisseurs</h2>
                    <p class="text-xl font-bold text-green-600">{{ $suppliersCount }}</p>
                </div>
                <div class="bg-white p-4 rounded shadow text-center">
                    <h2 class="text-sm text-gray-500">Véhicules enregistrés</h2>
                    <p class="text-xl font-bold text-indigo-600">{{ $carsCount }}</p>
                </div>
                <div class="bg-white p-4 rounded shadow text-center">
                    <h2 class="text-sm text-gray-500">Véhicules vendus</h2>
                    <p class="text-xl font-bold text-yellow-600">{{ $carsSold }}</p>
                </div>
            </div>

            <a href="{{ route('cars.index') }}"
                class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-md shadow-md transition">
                Voir les véhicules
            </a>
    </div>
    </main>
    </div>
</body>

</html>
