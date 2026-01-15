{{-- resources/views/admin/lock.blade.php --}}
@extends('layouts.admin-auth')

@section('content')
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="w-full max-w-sm p-8 bg-white shadow-lg rounded-2xl">

            <div class="mb-6 text-center">
                <h1 class="text-2xl font-bold text-gray-800">
                    Admin Access
                </h1>
                <p class="mt-1 text-sm text-gray-500">
                    Enter password to continue
                </p>
            </div>

            <form method="POST" action="{{ route('admin.unlock') }}" class="space-y-4">
                @csrf

                <div>
                    <input type="password" name="password" placeholder="Admin password"
                        class="w-full border-gray-300 rounded-lg focus:border-black focus:ring-black" required>
                    @error('password')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button class="w-full bg-black text-white py-2.5 rounded-lg hover:bg-gray-800 transition">
                    Unlock
                </button>
            </form>

        </div>
    </div>
@endsection
