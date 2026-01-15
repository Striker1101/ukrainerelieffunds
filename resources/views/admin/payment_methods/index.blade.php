@extends('layouts.admin')

@section('content')
    <div class="flex items-center justify-between p-6 mb-6">
        <h2 class="text-2xl font-semibold text-blue-900">Payment Methods</h2>
        <a href="{{ route('admin.payment-methods.create') }}"
            class="px-4 py-2 text-white bg-yellow-500 rounded-lg shadow hover:bg-yellow-600">
            Add Method
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-100">
                <tr>
                    <th class="px-6 py-3 text-sm font-medium text-left text-blue-900 uppercase">Name</th>
                    <th class="px-6 py-3 text-sm font-medium text-left text-blue-900 uppercase">Network</th>
                    <th class="px-6 py-3 text-sm font-medium text-left text-blue-900 uppercase">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($methods as $method)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $method->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $method->network ?? '-' }}</td>
                        <td class="flex gap-2 px-6 py-4">
                            <a href="{{ route('admin.payment-methods.edit', $method) }}"
                                class="px-3 py-1 text-sm text-white bg-blue-500 rounded-lg hover:bg-blue-600">
                                Edit
                            </a>

                            <form method="POST" action="{{ route('admin.payment-methods.destroy', $method) }}"
                                onsubmit="return confirm('Are you sure you want to delete this?');">
                                @csrf
                                @method('DELETE')
                                <button class="px-3 py-1 text-sm text-white bg-red-500 rounded-lg hover:bg-red-600">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if ($methods->isEmpty())
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                            No payment methods found.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
