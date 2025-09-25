@extends('layouts.admin')
@section('content')
    <main class="flex-1 p-6">
        <a href="{{ route('admin.kendaraan.create') }}" class="bg-purple-800 text-white px-2 py-1 mb-2 rounded inline-block">
            Tambah Kendaraan
        </a>

        <table class="w-full">
            <thead class="bg-gray-500 text-white">
                <tr>
                    <th>
                        Gambar
                    </th>
                    <th>
                        Nama
                    </th>
                    <th>
                        Harga
                    </th>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kendaraan as $item)
                <tr class="text-center">
                    <td>
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->name }}" class="w-20 mx-auto" />
                    </td>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ $item->harga }}
                    </td>
                    <td class="flex gap-1 justify-center">
                        <a href="{{ route('admin.kendaraan.edit', $item->id) }}" class="bg-purple-800 px-3 py-2 text-white mt-2">
                            Edit
                        </a>
                        <form action="{{ route('admin.kendaraan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-800 px-3 py-2 text-white mt-2">
                                Hapus
                            </button>
                        </form>
                    </td>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
