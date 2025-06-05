<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des marques</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-4">

    <nav class="bg-white shadow p-4">
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
    <div class="max-w-6xl mx-auto px-4 py-6">

        <div class="flex justify-between items-center mb-4">
            <a href="{{ route('bienvenue') }}" class="text-sm text-blue-600 hover:underline">
                ← Retour
            </a>

            <a href="{{ route('car-brands.create') }}"
                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md">
                Ajouter une marque
            </a>
        </div>

        <div class="max-w-2xl mx-auto mt-6">
            <h1 class="text-xl font-semibold text-center mb-6">Liste des marques</h1>
            <p class="text-center text-gray-600 mb-2">Nombre total de marques : {{ $brandsCount }}</p>

            @if ($brands->isEmpty())
                <p class="text-center text-gray-600">Aucune marque enregistrée.</p>
            @else
                <ul class="space-y-4">
                    @foreach ($brands as $brand)
                        <li class="bg-white border border-gray-200 p-4 rounded flex justify-between items-center">
                            <div>
                                <p class="font-semibold text-gray-800">{{ $brand->name }}</p>
                                <p class="text-sm text-gray-500">Pays : {{ $brand->country }}</p>
                            </div>
                            <div class="flex space-x-3">
                                <a href="{{ route('car-brands.edit', $brand) }}"
                                    class="text-blue-600 hover:underline">Modifier</a>
                                <form action="{{ route('car-brands.destroy', $brand) }}" method="POST"
                                    onsubmit="return confirm('Confirmer la suppression ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Supprimer</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>

                {{-- Pagination --}}
                <div class="mt-6">
                    {{ $brands->links() }}
                </div>
            @endif
        </div>

</body>

</html>
