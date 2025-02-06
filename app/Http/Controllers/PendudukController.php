<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penduduk = Penduduk::all();
        return response()->json($penduduk);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $penduduk = Penduduk::create([
            'name' => $request->name,
        ]);

       return response()->json([
           'message' => 'Data ' . $penduduk->name . ' Berhasil Ditambahkan',
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penduduk = Penduduk::find($id);
        
        if (!$penduduk) {
            return response()->json(['message' => 'Pendukuk not found'], 404);
        }


        return response()->json($penduduk);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penduduk = Penduduk::find($id);

        if (!$penduduk) {
            return response()->json(['message' => 'Pondok not found'], 404);
        }

        $dataPenduduk = $request->validate([
            'name' => 'required'
        ]);

        $penduduk->update($dataPenduduk);

        return response()->json([
            'message' => 'Data ' . $penduduk->name . ' Berhasil Update',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penduduk = Penduduk::find($id);

        if (!$penduduk) {
            return response()->json(['message' => 'Penduduk not found'], 404);
        }

        $penduduk->delete();

        return response()->json(['message' => $penduduk->name .' deleted successfully']);
    }
}
