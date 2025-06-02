<?php

namespace App\Http\Controllers;

use App\Models\CarBrand;
use Illuminate\Http\Request;

class CarBrandController extends Controller
{
   public function index()
{

    $brands = CarBrand::paginate(10);
    $brandsCount = $brands->count(); // 🔧 On ajoute le comptage ici

    return view('car_brands.index', compact('brands', 'brandsCount'));
}


    public function create()
    {
        return view('car_brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        CarBrand::create($request->only('name', 'country'));

        return redirect()->route('car-brands.index')->with('success', 'Marque ajoutée avec succès.');
    }

    public function edit(CarBrand $carBrand)
    {
       
        return view('car_brands.edit', compact('carBrand'));
    }

    public function update(Request $request, CarBrand $carBrand)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $carBrand->update($request->only('name', 'country'));

        return redirect()->route('car-brands.index')->with('success', 'Marque mise à jour.');
    }

    public function destroy(CarBrand $carBrand)
    {
        $carBrand->delete();

        return redirect()->route('car-brands.index')->with('success', 'Marque supprimée.');
    }
}
