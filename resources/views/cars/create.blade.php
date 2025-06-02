<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Ajouter un véhicule</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="max-w-xl w-full bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-6 text-center">Ajouter un véhicule</h1>

        <form method="POST" action="{{ route('cars.store') }}">
            @csrf

            <div class="mb-4">
                <label for="model" class="block mb-1 font-semibold">Modèle</label>
                <input id="model" type="text" name="model" class="w-full border p-2 rounded" required
                    value="{{ old('model') }}">
                @error('model')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="car_brand_id" class="block mb-1 font-semibold">Marque</label>
                <select id="car_brand_id" name="car_brand_id" class="w-full border p-2 rounded" required>
                    <option value="">-- Choisir une marque --</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ old('car_brand_id') == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>
                @error('car_brand_id')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label for="vehicle_supplier_id" class="block mb-1 font-semibold">Fournisseur</label>
                <select id="vehicle_supplier_id" name="vehicle_supplier_id" class="w-full border p-2 rounded" required>
                    <option value="">-- Choisir un fournisseur --</option>
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}"
                            {{ old('vehicle_supplier_id') == $supplier->id ? 'selected' : '' }}>
                            {{ $supplier->name }}
                        </option>
                    @endforeach
                </select>
                @error('vehicle_supplier_id')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                Enregistrer
            </button>
        </form>
    </div>

</body>

</html>
