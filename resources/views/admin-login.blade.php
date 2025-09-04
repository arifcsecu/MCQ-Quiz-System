@extends('layout.app')

@section('hideNavbar', true)

@section('content')
<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
        <h2 class="text-2xl text-center text-gray-800 mb-6">Admin Login</h2>
        @error('user')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <form action="admin-login" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="admin" class="text-gray-600 mb-1">Admin name</label>
                <input type="text" name="name" id="admin" placeholder="Enter Admin name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password" class="text-gray-600 mb-1">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Admin password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-700 rounded-xl px-4 py-2 text-white">Login</button>
        </form>
    </div>
</body>
@endsection