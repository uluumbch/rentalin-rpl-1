<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('admin.kendaraan', ['kendaraan' => $kendaraan]);
    }

    public function create()
    {
        return view('admin.tambah_kendaraan');
    }

    public function store(Request $request)
    {
        // Validasi input
        $nama = $request->input('nama');
        $harga = $request->input('harga');

        // Handle file upload jika ada
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('kendaraan', 'public');
            $validatedData['gambar'] = $imagePath;
        }

        // Simpan data kendaraan ke database
        Kendaraan::create(
            [
                'name' => $nama,
                'harga' => $harga,
                'gambar' => $imagePath,
            ]
        );

        return redirect()->route('admin.kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('admin.edit_kendaraan', ['kendaraan' => $kendaraan]);
    }

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        // Validasi input
        $nama = $request->input('nama');
        $harga = $request->input('harga');

        // Handle file upload jika ada
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('kendaraan', 'public');
            $kendaraan->gambar = $imagePath;
        }

        // Update data kendaraan
        $kendaraan->name = $nama;
        $kendaraan->harga = $harga;
        $kendaraan->save();

        return redirect()->route('admin.kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        
        unlink(public_path('storage/' . $kendaraan->gambar));

        $kendaraan->delete();

        return redirect()->route('admin.kendaraan.index')->with('success', 'Kendaraan berhasil dihapus.');
    }
}
