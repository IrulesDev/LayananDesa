<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        Log::info('Store method called');
        Log::info($request->all());

        $request->validate([
            'name' => 'required',
            'keluarga_id' => 'required',
            'nik' => 'required|unique:penduduks,nik'
        ]);

        $penduduk = Penduduk::create([
            'name' => $request->name,
            'keluarga_id' => $request->keluarga_id,
            'nik' => $request->nik,
        ]);

        Log::info('Penduduk created: ' . $penduduk->id);

       return response()->json([
           'message' => 'Data ' . $penduduk->name . ' Berhasil Ditambahkan' ,
        //    'penduduk' => $penduduk
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

        Log::info('ini yang akan di update' . $penduduk);

        Log::info( $request->all() );     // ini cek data yang di update

        if (!$penduduk) {
            return response()->json(['message' => 'Penduduk not found'], 404);
        }

        Log::info('ini cek pont setelah if point' );
        

        $dataPenduduk = $request->validate([
            'name' => 'required',
            'keluarga_id' => 'nullable',
            'nik' => 'nullable'
        ]);

        Log::info('ini cek pont setelah validasi point' );    // ini cek data yang setelah di validasi 


        $penduduk->update($dataPenduduk);

        Log::info('ini cek pont setelah penduduk update' );     //cek penduduk update


        return response()->json([
            'message' => 'Data ' . $penduduk->name . ' Berhasil Update',
            'penduduk' => $penduduk
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
