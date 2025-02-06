<?php

namespace App\Http\Controllers;

use App\Models\PengajuanLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PengajuanLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuan = PengajuanLayanan::all();
        return response()->json($pengajuan);
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
        ]);

        $pengajuan = PengajuanLayanan::create([
            'name' => $request->name,
        ]);

        Log::info('Pengajuan created: ' . $pengajuan->id);

       return response()->json([
           'message' => 'Data ' . $pengajuan->name . ' Berhasil Ditambahkan' ,
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Pengajuan = PengajuanLayanan::find($id);

        if (!$Pengajuan){
            return response()->json(['message' => 'pengajuan not found'],404);
        }
        return response()->json($Pengajuan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengajuan = PengajuanLayanan::find($id);

        if (!$pengajuan){
            return response()->json(['message' => 'pengajuan not found'],404);
        }

        $dataPengajuan = $request->validate([
            'name' => 'required'
        ]);

        $pengajuan->update($dataPengajuan); //update data

        return response()->json([
            'message' => 'Data' . $pengajuan->name . 'Berhasil Diubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengajuan = PengajuanLayanan::find($id);

        if (!$pengajuan){
            return response()->json(['messege' => 'perangkat not found'],404);
        }

        $pengajuan->delete(); //delete data

        return response()->json([
            'message' => 'Data' . $pengajuan->name . 'Berasil Dihapus'
        ]);
    }
}
