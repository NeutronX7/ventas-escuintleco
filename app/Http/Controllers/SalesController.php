<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('sales', compact('items'));
    }
}
