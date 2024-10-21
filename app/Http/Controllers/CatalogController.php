<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $suppliers = Supplier::all();
        $products = Product::all();

        return view('catalog.index', compact('clients', 'suppliers', 'products'));
    }
}
