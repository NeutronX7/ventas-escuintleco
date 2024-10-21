<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $item = Item::find($request->id);
        $cart = session()->get('cart', []);

        if (!isset($cart[$item->id])) {
            $cart[$item->id] = [
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => 1
            ];
        } else {
            $cart[$item->id]['quantity']++;
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;

            if ($cart[$id]['quantity'] < 1) {
                $cart[$id]['quantity'] = 1;
            }

            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }

    public function confirm(Request $request)
    {
        $cart = session()->get('cart', []);
        $purchaseDetails = [];

        // Iterate through the cart items
        foreach ($cart as $id => $details) {
            // Find the item in the database
            $item = Item::find($id);

            if ($item) {
                // Subtract the quantity from the database
                $item->quantity -= $details['quantity'];
                $item->save(); // Save the updated item

                // Collect purchase details
                $purchaseDetails[] = [
                    'name' => $details['name'],
                    'quantity' => $details['quantity'],
                    'price' => $details['price'],
                    'total' => $details['price'] * $details['quantity']
                ];
            }
        }

        // Generate QR code data
        $qrData = json_encode($purchaseDetails);
        $qrCode = QrCode::size(250)->generate($qrData);

        // Clear the cart session
        session()->forget('cart');

        // Store the QR code and purchase details as view variables
        return view('purchase.confirmation', compact('qrCode', 'purchaseDetails'));
    }

    public function showConfirmation()
    {
        // Ensure the cart is empty to prevent re-display of the last confirmation
        if (session('cart')) {
            session()->forget('cart'); // Clear the cart after confirmation
        }

        return view('purchase.confirmation');
    }

}
