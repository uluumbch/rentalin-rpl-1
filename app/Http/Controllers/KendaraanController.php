<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();

        return view('admin.kendaraan', [
            'kendaraan' => $kendaraan,
        ]);
    }

    public function create()
    {
        return view('admin.tambah_kendaraan');
    }

    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $harga = $request->input('harga');

        $gambar = $request->file('gambar')->store('kendaraan', 'public');

        Kendaraan::create([
            'nama' => $nama,
            'harga' => $harga,
            'gambar' => $gambar,
        ]);

        return redirect()->route('admin.kendaraan.index');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        return view('admin.edit_kendaraan', [
            'kendaraan' => $kendaraan,
        ]);
    }

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        $nama = $request->input('nama');
        $harga = $request->input('harga');

        // Handle file upload jika ada
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('kendaraan', 'public');
            $kendaraan->gambar = $imagePath;
        }

        // Update data kendaraan
        $kendaraan->nama = $nama;
        $kendaraan->harga = $harga;
        $kendaraan->save();

        return redirect()->route('admin.kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        unlink(public_path('storage/'.$kendaraan->gambar));

        $kendaraan->delete();

        return redirect()->route('admin.kendaraan.index')->with('success', 'Kendaraan berhasil dihapus.');
    }
}
