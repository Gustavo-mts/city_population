<?php

namespace App\Http\Controllers;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function index(Request $request) {
        $invoice = Invoice::all();
        return $invoice;
    }

    public function create(Request $request) {
        $data = $request->only(['description', 'value', 'address_id', 'user_id']);
        $invoice = Invoice::create($data);
        return $invoice;
    }

    public function findOne(Request $request) {
        $invoice = Invoice::find($request->id);
        $invoice['user'] = $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    }
}
