<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuTamu;

class BukuTamuController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'nama_tamu' => 'required|max:50',
            'alamat' => 'required|max:100',
            'email' => 'required|email|max:100',
            'keperluan' => 'required',
            'tanggal' => 'required|date',
        ]);

        BukuTamu::create($validated);

        return redirect()->back()->with('success', 'Data tamu berhasil disimpan!');
    }
}
