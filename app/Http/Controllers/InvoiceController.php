<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceRequest;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoice.index', compact('invoices'));
    }

    public function create()
    {
        return view('invoice.create');
    }

    public function store(InvoiceRequest $request)
    {
        Invoice::create($request->all());
        return redirect()->route('invoice.index')->with('success', 'invoice created successfully.');
    }

    public function edit(Invoice $invoice)
    {
        return view('invoice.edit', compact('invoice'));
    }

    public function update(InvoiceRequest $request, Invoice $invoice)
    {
        $invoice->update($request->all());
        return redirect()->route('invoice.index')->with('success', 'invoice updated successfully.');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoice.index')->with('success', 'invoice deleted successfully.');
    }
}
