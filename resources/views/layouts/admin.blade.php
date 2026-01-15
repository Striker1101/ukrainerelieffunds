<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div x-data="{ open: false }" class="flex min-h-screen">

        {{-- Mobile overlay --}}
        <div x-show="open" @click="open = false" class="fixed inset-0 z-20 bg-black/50 md:hidden">
        </div>

        {{-- Sidebar --}}
        <aside :class="open ? 'translate-x-0' : '-translate-x-full'"
            class="fixed z-30 w-64 text-white transition-transform duration-200 transform bg-blue-900 md:static md:translate-x-0">

            <div class="p-6 text-xl font-bold bg-blue-800">
                Admin Panel
            </div>

            <nav class="p-4 space-y-2">
                <a href="{{ route('admin.payment-methods.index') }}" class="block px-4 py-2 rounded hover:bg-blue-700">
                    Payment Methods
                </a>
            </nav>
        </aside>

        {{-- Main --}}
        <div class="flex flex-col flex-1 gap-4">

            {{-- Header --}}
            <header class="flex items-center justify-between px-6 py-4 bg-white shadow">
                <button @click="open = true" class="text-2xl font-bold text-blue-700 md:hidden">
                    ☰
                </button>

                <h1 class="text-lg font-semibold text-blue-900">
                    Dashboard
                </h1>

                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="px-4 py-2 text-sm text-white bg-yellow-500 rounded hover:bg-yellow-600">
                        Logout
                    </button>
                </form>
            </header>

            {{-- Content --}}
            <main class="flex-1 bg-gray-100">
                @yield('content')
            </main>

        </div>
    </div>

    {{-- Alpine for sidebar --}}
    <script src="https://unpkg.com/alpinejs" defer></script>

</body>

</html>
