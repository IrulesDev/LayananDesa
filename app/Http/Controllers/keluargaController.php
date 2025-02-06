<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;

class keluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keluarga = Keluarga::all();
        return response()->json($keluarga);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_kk' => 'requered',
        ]);
        $keluarga = keluarga::create([
            'no_kk' => $request->no_kk,
        ]);
        return response()->json([
            'message' => 'Data' . $keluarga->no_kk . 'Berhasil Ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $keluarga = keluarga::find($id);

        if (!$keluarga){
            return response()->json(['message' => 'keluarga not found'],404);
        }
        return response()->json($keluarga);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $keluarga = keluarga::find($id);

        if (!$keluarga){
            return response()->json(['message' => 'keluarga not found'],404);
        }

        $dataKeluarga = $request->validate([
            'no_kk' => 'required'
        ]);

        $keluarga->update($dataKeluarga); //update data

        return response()->json([
            'message' => 'Data' . $keluarga->no_kk . 'Berhasil Diubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keluarga = keluarga::find($id);

        if (!$keluarga){
            return response()->json(['messege' => 'keluarga not found'],404);
        }

        $keluarga->delete(); //delete data

        return response()->json([
            'message' => 'Data' . $keluarga->no_kk . 'Berasil Dihapus'
        ]);
    }
}
