<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::with(['category', 'supplier', 'user'])->latest()->paginate(10);

        return view('product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Category::all();
        $suppliers = Supplier::all();
        return view('product.create', compact('kategoris', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'a' => 'required|numeric|exists:categories,id',
            'b' => 'required|numeric|exists:suppliers,id',
            'c' => 'required|string|min:3',
            'd' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'e' => 'required|numeric',
            'f' => 'required|numeric',
            'g' => 'required|string|min:3'
        ]);

        Product::create([
            'category_id' => $request->a,
            'supplier_id' => $request->b,
            'name' => $request->c,
            'price' => $request->e,
            'stock' => $request->f,
            'description' => $request->g,
            'user_id' => Auth::user()->id,
            'slug' => Str::slug($request->c, '-'),
        ]);

        return to_route('product.index')->with('success', 'Data berhasil ditambahkan');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
