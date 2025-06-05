<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Modifier un Fournisseur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">

        <!-- Bouton retour -->
        <a href="{{ route('vehicle_suppliers.index') }}" class="inline-block mb-4 text-blue-600 hover:underline">
            ← Retour à la liste
        </a>

        <h1 class="text-xl font-bold mb-4">Modifier un Fournisseur</h1>

        <!-- Erreurs -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulaire -->
        <form method="POST" action="{{ route('vehicle_suppliers.update', $vehicleSupplier->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label class="block mb-1">Nom *</label>
            <input type="text" name="name" value="{{ old('name', $vehicleSupplier->name) }}" required
                class="w-full mb-4 p-2 border rounded">

            <label class="block mb-1">Téléphone</label>
            <input type="text" name="phone" value="{{ old('phone', $vehicleSupplier->phone) }}"
                class="w-full mb-4 p-2 border rounded">

            <label class="block mb-1">Photo actuelle</label>
            @if ($vehicleSupplier->photo)
                <img src="{{ asset('storage/' . $vehicleSupplier->photo) }}" alt="Photo"
                    class="h-20 w-20 object-cover rounded mb-4">
            @else
                <p class="text-sm text-gray-600 mb-4">Aucune photo</p>
            @endif

            <label class="block mb-1">Changer la photo</label>
            <input type="file" name="photo" accept="image/*" class="w-full mb-4 p-2 border rounded bg-gray-50">

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Mettre à jour
            </button>
        </form>
    </div>

</body>

</html>
