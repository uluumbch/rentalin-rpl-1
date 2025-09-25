@extends('layouts.app')
@section('content')
    <div class="flex justify-center items-center flex-col min-h-screen">
        <h1>Login</h1>
        <form class="space-y-4" action="{{ url('/login') }}" method="POST">
            @csrf
            <div>
                <label class="font-semibold block">
                    Email
                </label>
                <input type="email" name="email" class="bg-gray-200 rounded " />
                @error('login')
                    <p class="text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div>
                <label class="font-semibold block">
                    Password
                </label>
                <input type="password" name="password" class="bg-gray-200 rounded " />
            </div>
            <div>
                <button type="submit" class="bg-purple-800 rounded-xl px-2 py-1 text-white">
                    Login
                </button>
            </div>
        </form>
    </div>
@endsection
