<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('paymentpage');
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'name_on_card' => 'required|string|max:255',
            'card_number' => 'required|digits:16',
            'expiry_month' => 'required|digits:2',
            'expiry_year' => 'required|digits:4',
            'cvv' => 'required|digits:3',
        ]);

        // Process the payment logic here

        return back()->with('success', 'Payment processed successfully!');
    }
}
