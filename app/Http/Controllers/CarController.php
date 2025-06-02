<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarBrand;
use App\Models\VehicleSupplier;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with(['brand', 'supplier'])->latest()->get();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $brands = CarBrand::all();
        $suppliers = VehicleSupplier::all();
        return view('cars.create', compact('brands', 'suppliers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'model' => 'required|string|max:255',
            'car_brand_id' => 'required|exists:car_brands,id',
            'vehicle_supplier_id' => 'required|exists:vehicle_suppliers,id',
        ]);

        Car::create($validated);

        return redirect()->route('cars.index')->with('success', 'Véhicule ajouté avec succès.');
    }
}
