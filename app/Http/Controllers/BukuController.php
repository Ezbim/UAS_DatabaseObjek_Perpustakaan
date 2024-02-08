<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return response()->json($bukus);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Judul' => 'required',
            'Penulis' => 'required',
        ]);
        
        $buku = Buku::create($request->all());
        return response()->json($buku, 201);
    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return response()->json($buku);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Judul' => 'required',
            'Penulis' => 'required',
        ]);
        
        $buku = Buku::findOrFail($id);
        $buku->update($request->all());
        return response()->json($buku, 200);
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return response()->json(['message' => 'Buku Berhasil Terhapus']);
    }
}
