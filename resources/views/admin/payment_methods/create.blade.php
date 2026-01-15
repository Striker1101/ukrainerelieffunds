@extends('layouts.admin')

@section('content')
    <div class="max-w-lg p-8 mx-auto bg-white shadow-xl rounded-2xl ring-1 ring-gray-200">
        <h2 class="mb-6 text-2xl font-bold text-center text-blue-900">
            {{ isset($payment_method) ? 'Edit Payment Method' : 'Add Payment Method' }}
        </h2>

        <form method="POST"
            action="{{ isset($payment_method)
                ? route('admin.payment-methods.update', $payment_method)
                : route('admin.payment-methods.store') }}"
            class="space-y-6">

            @csrf
            @isset($payment_method)
                @method('PATCH')
            @endisset

            {{-- Name --}}
            <div>
                <label class="block mb-2 font-medium text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name', $payment_method->name ?? '') }}"
                    class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter method name" required>
                @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Address --}}
            <div>
                <label class="block mb-2 font-medium text-gray-700">Address</label>
                <input type="text" name="address" value="{{ old('address', $payment_method->address ?? '') }}"
                    class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter address" required>
                @error('address')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Network --}}
            <div>
                <label class="block mb-2 font-medium text-gray-700">Network</label>
                <input type="text" name="network" value="{{ old('network', $payment_method->network ?? '') }}"
                    class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter network (optional)">
                @error('network')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Show --}}
            <div class="flex items-center gap-3">
                <input type="checkbox" name="show" value="1" class="w-5 h-5 text-blue-600 border-gray-300 rounded"
                    {{ old('show', $payment_method->show ?? true) ? 'checked' : '' }}>
                <label class="font-medium text-gray-700">Show</label>
            </div>

            {{-- Submit Button --}}
            <div>
                <button type="submit"
                    class="w-full py-3 text-lg font-semibold text-white transition transform bg-yellow-500 rounded-lg shadow-md hover:bg-yellow-600 hover:scale-105">
                    {{ isset($payment_method) ? 'Update Method' : 'Add Method' }}
                </button>
            </div>

        </form>
    </div>
@endsection
