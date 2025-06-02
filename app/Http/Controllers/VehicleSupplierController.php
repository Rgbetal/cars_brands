<?php
namespace App\Http\Controllers;

use App\Models\VehicleSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehicleSupplierController extends Controller
{
    public function index()
    {
        $suppliers = VehicleSupplier::all();
        return view('vehicle_suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('vehicle_suppliers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'photo' => 'nullable|image|max:2048',
        ]);

        $supplier = new VehicleSupplier();
        $supplier->name = $validated['name'];
        $supplier->phone = $validated['phone'] ?? null;

        if ($request->hasFile('photo')) {
            $supplier->photo = $request->file('photo')->store('photos', 'public');
        }

        $supplier->save();

        return redirect()->route('vehicle_suppliers.index')->with('success', 'Fournisseur ajouté avec succès.');
    }

    public function edit(VehicleSupplier $vehicleSupplier)
    {
        return view('vehicle_suppliers.edit', compact('vehicleSupplier'));
    }

    public function update(Request $request, VehicleSupplier $vehicleSupplier)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'photo' => 'nullable|image|max:2048',
        ]);

        $vehicleSupplier->name = $validated['name'];
        $vehicleSupplier->phone = $validated['phone'] ?? null;

        if ($request->hasFile('photo')) {
            if ($vehicleSupplier->photo && Storage::disk('public')->exists($vehicleSupplier->photo)) {
                Storage::disk('public')->delete($vehicleSupplier->photo);
            }
            $vehicleSupplier->photo = $request->file('photo')->store('photos', 'public');
        }

        $vehicleSupplier->save();

        return redirect()->route('vehicle_suppliers.index')->with('success', 'Fournisseur mis à jour.');
    }

    public function destroy(VehicleSupplier $vehicleSupplier)
    {
        if ($vehicleSupplier->photo && Storage::disk('public')->exists($vehicleSupplier->photo)) {
            Storage::disk('public')->delete($vehicleSupplier->photo);
        }

        $vehicleSupplier->delete();

        return redirect()->route('vehicle_suppliers.index')->with('success', 'Fournisseur supprimé.');
    }
}
