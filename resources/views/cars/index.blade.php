@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-6">Liste des véhicules</h1>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('cars.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4 inline-block">
            + Ajouter un véhicule
        </a>

        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-2">Modèle</th>
                    <th class="p-2">Marque</th>
                    <th class="p-2">Fournisseur</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cars as $car)
                    <tr class="border-b">
                        <td class="p-2">{{ $car->model }}</td>
                        <td class="p-2">{{ $car->brand->name }}</td>
                        <td class="p-2">{{ $car->supplier->name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="p-4 text-center text-gray-500">Aucun véhicule enregistré.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
