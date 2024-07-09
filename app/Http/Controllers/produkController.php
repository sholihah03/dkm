<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('layouts.produk');
        $produk = Produk::all();
        return view('layouts.produk', compact('produk'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $produk = Produk::where('name', 'LIKE', "%{$query}%")->get();
        return view('layouts.produk', compact('produk'));
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
        //
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
