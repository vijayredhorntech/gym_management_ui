<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payment.index', compact('payments'));
    }

    public function create()
    {
        return view('payment.create');
    }

    public function store(PaymentRequest $request)
    {
        Payment::create($request->all());
        return redirect()->route('payment.index')->with('success', 'payment created successfully.');
    }

    public function edit(Payment $payment)
    {
        return view('payment.edit', compact('payment'));
    }

    public function update(PaymentRequest $request, Payment $payment)
    {
        $payment->update($request->all());
        return redirect()->route('payment.index')->with('success', 'payment updated successfully.');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payment.index')->with('success', 'payment deleted successfully.');
    }
}
