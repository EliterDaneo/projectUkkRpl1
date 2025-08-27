<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Supplier::latest()->paginate(10);

        return view("supplier.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100|string|unique:suppliers,name',
            'address' => 'required|min:3|max:100|string',
            'phone' => 'required|min:3|max:100|string',
        ]);

        Supplier::create($request->all());

        return redirect()->route('supplier.index')->with('create', 'Supplier Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:100|string',
            'address' => 'required|min:3|max:100|string',
            'phone' => 'required|min:3|max:100|string',
        ]);

        $supplier = Supplier::find($id);

        $supplier->update($request->all());

        return redirect()->route('supplier.index')->with('update', 'Supplier Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = Supplier::find($id);

        $supplier->delete();

        return redirect()->route('supplier.index')->with('hapus', 'Supplier Berhasil Dihapus');
    }
}
