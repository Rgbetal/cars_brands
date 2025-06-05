<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ma Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="max-w-6xl mx-auto px-4 py-6">

        <!-- Bouton retour -->
        <a href="{{ route('bienvenue') }}" class="inline-block mb-4 text-sm text-blue-600 hover:underline">
            ← Retour
        </a>

        <div class="max-w-6xl mx-auto px-4 py-6">
            <div class="flex justify-between mb-4">
                <h1 class="text-xl font-bold">Fournisseurs</h1>
                <a href="{{ route('vehicle_suppliers.create') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter</a>
            </div>

            @if (session('success'))
                <div class="mb-4 text-green-600">{{ session('success') }}</div>
            @endif

            <table class="w-full table-auto border">
                <thead>
                    <tr class="bg-gray-100">
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($suppliers as $supplier)
                        <tr class="text-center">
                            <td>
                                @if ($supplier->photo)
                                    <img src="{{ asset('storage/' . $supplier->photo) }}"
                                        class="h-12 w-12 object-cover rounded-full mx-auto">
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $supplier->name }}</td>
                            <td>{{ $supplier->phone }}</td>
                            <td>
                                <a href="{{ route('vehicle_suppliers.edit', $supplier->id) }}"
                                    class="text-blue-600">Modifier</a>
                                <form action="{{ route('vehicle_suppliers.destroy', $supplier->id) }}" method="POST"
                                    class="inline-block" onsubmit="return confirm('Supprimer ?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-600 ml-2">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Aucun fournisseur</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
</body>

</html>
