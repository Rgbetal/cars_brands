<div class=" w-64 min-h-screen bg-gray-800 text-white flex flex-col p-4">
    <h2 class="text-xl font-bold mb-5">Menu</h2>

    <a href="{{ route('bienvenue') }}" class="mb-3 px-4 py-2 rounded hover:bg-gray-700 transition">
        Accueil
    </a>

    <a href="{{ route('car-brands.index') }}" class="mb-3 px-4 py-2 rounded hover:bg-gray-700 transition">
        Marque
    </a>

    <a href="{{ route('vehicle_suppliers.index') }}" class="mb-3 px-4 py-2 rounded hover:bg-gray-700 transition">
        Fournisseurs
    </a>

    <a href="{{ route('cars.index') }}" class="mb-3 px-4 py-2 rounded hover:bg-gray-700 transition">
        Véhicules
    </a>
    <a href="{{ route('cars.create') }}" class="mb-3 px-4 py-2 rounded hover:bg-gray-700 transition">
        Ajouter un véhicule
    </a>
</div>
