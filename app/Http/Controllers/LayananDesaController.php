<?php

namespace App\Http\Controllers;

use App\Models\LayananDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LayananDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = LayananDesa::all();
        return response()->json($layanan);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'requered',
            'pengajuan_id' => 'requered',
        ]);
        $layanan = LayananDesa::create([
            'name' => $request->name,
            'pengajuan_id' => $request->pengajuan_id,
        ]);
        return response()->json([
            'message' => 'Data' . $layanan->name . 'Berhasil Ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $layanan = LayananDesa::find($id);
        
        if (!$layanan) {
            return response()->json(['message' => 'Layanan desa not found'], 404);
        }


        return response()->json($layanan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Log::info('sebelum ip,plementasi');

        $layanan = LayananDesa::find($id);

        Log::info('ini yang akan di update' . $layanan);

        Log::info( $request->all() );     // ini cek data yang di update

        if (!$layanan) {
            return response()->json(['message' => 'Layanan Desa not found'], 404);
        }

        Log::info('ini cek pont setelah if point' );
        

        $layananDesa = $request->validate([
            'name' => 'required',
            'pengajuan_id' => 'required'
        ]);

        Log::info('ini cek pont setelah validasi point' );    // ini cek data yang setelah di validasi 


        $layanan->update($layananDesa);

        Log::info('ini cek pont setelah Lyayanan Desa update' );     //cek penduduk update


        return response()->json([
            'message' => 'Data ' . $layanan->name . ' Berhasil Update',
            'layanan' => $layanan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanan = LayananDesa::find($id);

        if (!$layanan) {
            return response()->json(['message' => 'Penduduk not found'], 404);
        }

        $layanan->delete();

        return response()->json(['message' => $layanan->name .' deleted successfully']);
    }
}
