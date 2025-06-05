<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Tableau de bord - Cars Heaven</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Barre de navigation -->
    <nav class="bg-white p-4 shadow flex justify-between items-center">
        <a href="{{ url('/') }}" class="flex items-center gap-2 text-xl font-bold">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-8">
            Cars Heaven
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">
                Se déconnecter
            </button>
        </form>
    </nav>

    <div class="flex">
        <!-- Menu latéral -->
        @include('components.sidebar')

        <!-- Contenu principal -->
        <main class="flex-1 p-4">
            <h1 class="text-xl font-bold text-center mb-6">📊 Tableau de bord</h1>

            <!-- Cartes statistiques -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-4 rounded shadow text-center">
                    <p class="text-gray-500 text-sm">Marques enregistrées</p>
                    <p class="text-lg font-bold text-blue-600">{{ $brandsCount }}</p>
                </div>
                <div class="bg-white p-4 rounded shadow text-center">
                    <p class="text-gray-500 text-sm">Fournisseurs</p>
                    <p class="text-lg font-bold text-green-600">{{ $suppliersCount }}</p>
                </div>
                <div class="bg-white p-4 rounded shadow text-center">
                    <p class="text-gray-500 text-sm">Véhicules enregistrés</p>
                    <p class="text-lg font-bold text-indigo-600">{{ $carsCount }}</p>
                </div>
                <div class="bg-white p-4 rounded shadow text-center">
                    <p class="text-gray-500 text-sm">Véhicules vendus</p>
                    <p class="text-lg font-bold text-yellow-600">{{ $carsSold }}</p>
                </div>
            </div>

            <!-- Lien vers la liste des véhicules -->
            <a href="{{ route('cars.index') }}"
                class="inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
                Voir les véhicules
            </a>
        </main>
    </div>

</body>

</html>
