<?php

namespace App\Http\Controllers\PKM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PKM\PenelitianDanPengembanganPelaksana;

class PenelitianDanPengembanganPelaksanaController extends Controller
{
    public function index()
    {
        $data = PenelitianDanPengembanganPelaksana::latest()->get();
        return response()->json(['success' => true, 'data' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal_post' => 'required|date',
        ]);

        $data = PenelitianDanPengembanganPelaksana::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = PenelitianDanPengembanganPelaksana::find($id);

        if (!$data) {
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json(['success' => true, 'data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = PenelitianDanPengembanganPelaksana::find($id);

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
        $data = PenelitianDanPengembanganPelaksana::find($id);

        if (!$data) {
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan'], 404);
        }

        $data->delete();

        return response()->json(['success' => true, 'message' => 'Data berhasil dihapus']);
    }
}
