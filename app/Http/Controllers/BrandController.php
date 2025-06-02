<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

public function index()
{
    $brands = Brand::all();
    return view('brands.index', compact('brands'));
}

class BrandController extends Controller
{
    //
}
