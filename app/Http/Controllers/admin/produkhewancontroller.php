<?php

namespace App\Http\Controllers\admin;

use App\Models\Produkhewan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class produkhewancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produkhewan = Produkhewan::all();
        return view('admin.produkhewan.index', compact('produkhewan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produkhewan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('produk_images', 'public');
        } else {
            $imagePath = null;
        }

        Produkhewan::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('produkhewan')->with('success', 'Produk berhasil ditambahkan.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produkhewan = Produkhewan::findOrFail($id);
    return view('admin.produkhewan.edit', compact('produkhewan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $produkhewan = Produkhewan::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($produkhewan->image) {
                Storage::delete('public/' . $produkhewan->image);
            }

            $image = $request->file('image');
            $imagePath = $image->store('produk_images', 'public');
        } else {
            $imagePath = $produkhewan->image;
        }

        $produkhewan->update([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('produkhewan')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produkhewan = Produkhewan::findOrFail($id);
        if ($produkhewan->image) {
            Storage::delete('public/' . $produkhewan->image);
        }
        $produkhewan->delete();

        return redirect()->route('produkhewan')->with('success', 'Produk berhasil dihapus.');
    }
}
