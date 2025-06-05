<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajouter un Fournisseur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">

        <!-- Bouton retour -->
        <a href="{{ route('vehicle_suppliers.index') }}" class="inline-block text-sm text-blue-600 hover:underline mb-4">
            ← Retour à la liste
        </a>

        <!-- Titre -->
        <h1 class="text-xl font-bold mb-4">Ajouter un Fournisseur</h1>

        <!-- Affichage des erreurs -->
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
        <form method="POST" action="{{ route('vehicle_suppliers.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Nom -->
            <label class="block mb-2">Nom *</label>
            <input type="text" name="name" value="{{ old('name') }}" required
                class="w-full mb-4 p-2 border rounded">

            <!-- Téléphone -->
            <label class="block mb-2">Téléphone</label>
            <input type="text" name="phone" value="{{ old('phone') }}" class="w-full mb-4 p-2 border rounded">

            <!-- Photo -->
            <label class="block mb-2">Photo</label>
            <input type="file" name="photo" accept="image/*" class="w-full mb-4 p-2 border rounded bg-gray-50">

            <!-- Bouton -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Enregistrer
            </button>
        </form>
    </div>

</body>

</html>
