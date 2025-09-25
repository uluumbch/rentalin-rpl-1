@extends('layouts.admin')
@section('content')
<main class="flex-1 p-6">
    <h1 class="text-3xl font-semibold">
        Dashboard
    </h1>

    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-4" action="{{ route('admin.kendaraan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                Nama Kendaraan
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="nama" type="text" placeholder="Masukkan nama kendaraan">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="harga">
                Harga
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="harga" type="number" placeholder="Masukkan harga">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="gambar">
                Gambar
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="gambar" type="file">
        </div>
        <div class="mb-4">
            <button
                class="bg-purple-800 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Tambah Kendaraan
            </button>
        </div>
    </form>
</main>
@endsection