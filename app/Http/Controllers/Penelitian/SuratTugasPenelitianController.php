<?php

namespace App\Http\Controllers\Penelitian;

use App\Http\Controllers\Controller;
use App\Models\Penelitian\SuratTugasPenelitian;
use Illuminate\Http\Request;

class SuratTugasPenelitianController extends Controller
{
    public function index()
    {
        $data = SuratTugasPenelitian::latest()->get();
        return response()->json(['success' => true, 'data' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal_post' => 'required|date',
        ]);

        $data = SuratTugasPenelitian::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = SuratTugasPenelitian::find($id);

        if (!$data) {
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json(['success' => true, 'data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = SuratTugasPenelitian::find($id);

        if (!$data) {
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan'], 404);
        }

        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal_post' => 'required|date',
        ]);

        $data->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diupdate',
            'data' => $data
        ]);
    }

    public function destroy($id)
    {
        $data = SuratTugasPenelitian::find($id);

        if (!$data) {
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan'], 404);
        }

        $data->delete();

        return response()->json(['success' => true, 'message' => 'Data berhasil dihapus']);
    }
}
