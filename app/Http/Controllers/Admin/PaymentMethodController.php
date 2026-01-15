<?php


// app/Http/Controllers/Admin/PaymentMethodController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaymentMethodController extends Controller
{
    public function index()
    {
        return view('admin.payment_methods.index', [
            'methods' => PaymentMethod::latest()->get()
        ]);
    }

    public function create()
    {
        return view('admin.payment_methods.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:payment_methods',
            'address' => 'required',
            'network' => 'nullable',
            'image' => 'nullable',
            'show' => 'boolean'
        ]);

        $data['slug'] = Str::slug($data['name']);

        PaymentMethod::create($data);

        return redirect()->route('admin.payment-methods.index')->with('success', 'Created');
    }

    public function edit(PaymentMethod $payment_method)
    {
        return view('admin.payment_methods.edit', compact('payment_method'));
    }

    public function update(Request $request, PaymentMethod $payment_method)
    {
        $data = $request->validate([
            'name' => 'required|unique:payment_methods,name,' . $payment_method->id,
            'address' => 'required',
            'network' => 'nullable',
            'image' => 'nullable',
            'show' => 'boolean'
        ]);

        $data['slug'] = Str::slug($data['name']);

        $payment_method->update($data);

        return redirect()->route('admin.payment-methods.index')->with('success', 'Updated');
    }

    public function destroy(PaymentMethod $payment_method)
    {
        $payment_method->delete();
        return back()->with('success', 'Deleted');
    }
}
