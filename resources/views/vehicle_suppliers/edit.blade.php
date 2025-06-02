<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Modifier un Fournisseur</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">

    <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Modifier un Fournisseur</h2>

        @if ($errors->any())
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 p-4 rounded">
                <ul class="list-disc pl-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('vehicle_suppliers.update', $vehicleSupplier->id) }}"
            enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 font-semibold">Nom <span class="text-red-500">*</span></label>
                <input type="text" name="name" value="{{ old('name', $vehicleSupplier->name) }}" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div>
                <label class="block text-gray-700 font-semibold">Téléphone</label>
                <input type="text" name="phone" value="{{ old('phone', $vehicleSupplier->phone) }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div>
                <label class="block text-gray-700 font-semibold">Photo actuelle</label>
                @if ($vehicleSupplier->photo)
                    <img src="{{ asset('storage/' . $vehicleSupplier->photo) }}" alt="Photo"
                        class="h-20 w-20 object-cover rounded-full mb-2" />
                @else
                    <p>Aucune photo</p>
                @endif
            </div>

            <div>
                <label class="block text-gray-700 font-semibold">Changer la photo</label>
                <input type="file" name="photo" accept="image/*"
                    class="w-full px-4 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div>
                <button type="submit"
                    class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
                    Mettre à jour
                </button>
            </div>
        </form>
    </div>

</body>

</html>
