@extends('layouts.app')
@section('content')
    <div class="mt-4">
        <div class="flex items-center justify-between  mx-6">
            <h2 class="font-semibold text-2xl">
                Pilih mobil yang cocok untuk kamu.
            </h2>
        </div>

        <div class="grid grid-cols-3 gap-3">
            @for ($i = 0; $i < 6; $i++)
                <div class="shadow-md">
                    <img src="{{ asset('gambar/honda-brio.png') }}" class="h-52 w-2/3 object-cover mx-auto" />
                    <div class="p-4">
                        <div class="flex justify-between">
                            <h3 class="font-semibold text-xl">
                                Honda Brio
                            </h3>
                            <p>
                                Rp125.000/hari
                            </p>
                        </div>
                    </div>
                    <a class="text-center block bg-purple-800 m-2 text-white rounded-lg py-2">
                        Sewa Sekarang
                    </a>
                </div>
            @endfor
        </div>

    </div>
@endsection
