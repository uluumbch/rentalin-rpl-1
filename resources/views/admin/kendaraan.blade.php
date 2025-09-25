@extends('layouts.admin')
@section('content')
    <main class="flex-1 p-6">
        <a href="" class="bg-purple-800 text-white px-2 py-1 mb-2 rounded inline-block">
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
                <tr class="text-center">
                    <td>
                        <img src="#" />
                    </td>
                    <td>
                        Kijang Innova
                    </td>
                    <td>
                        200000
                    </td>
                    <td class="flex gap-1">
                        <a href="" class="bg-purple-800 px-3 py-2 text-white mt-2">
                            Edit
                        </a>
                        <a href="" class="bg-red-800 px-3 py-2 text-white mt-2">
                            Hapus
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
@endsection
