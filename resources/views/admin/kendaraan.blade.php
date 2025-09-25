@extends('layouts.admin')
@section('content')
    <main class="flex-1 p-6">
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
                        <img src="#"/>
                    </td>
                    <td>
                        Kijang Innova
                    </td>
                    <td>
                        200000
                    </td>
                    <td class="flex p-3">
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
