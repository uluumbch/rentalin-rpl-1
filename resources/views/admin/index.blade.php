@extends('layouts.admin')
@section('content')
<main class="flex-1 p-6">
    <h1 class="text-3xl font-semibold">
        Dashboard
    </h1>

    <p>
        Selamat datang, {{ auth()->user()->name }}
    </p>

    <div class="grid grid-cols-2 gap-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <p class="text-lg font-semibold">
                Jumlah Kendaraan
            </p>
            <p class="text-3xl font-bold">
                6
            </p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <p class="text-lg font-semibold">
                Jumlah Admin
            </p>
            <p class="text-3xl font-bold">
                {{ $jumlah_admin }}
            </p>
        </div>



    </div>
</main>
@endsection