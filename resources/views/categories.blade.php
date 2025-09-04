@extends('layout.app')

@section('title') Catagories @endsection

@section('content')

<div class="max-w-7xl mx-auto">

    <div class="max-w-5xl mx-auto">
        @if(session('category'))
        <div class="bg-green-800 text-white text-2xl pl-4">{{session('category')}}</div>
        @endif

        @if(session('deleteCategory'))
        <div class="bg-red-700 text-white text-2xl pl-4">{{session('deleteCategory')}}</div>
        @endif

        <div class="bg-gray-200 flex justify-center py-10">
            <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
                <h2 class="text-2xl text-center text-gray-800 mb-6">Add Category</h2>

                <form action="/add-category" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <input type="text" name="category" id="admin" placeholder="Enter Category name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                        @error('category')
                        <div class="text-red-500">{{$message}}</div>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-700 rounded-xl px-4 py-2 text-white">Add</button>
                </form>
            </div>
        </div>
    </div>

    <div class="max-w-200 mx-auto p-4">
        <h1 class="text-2xl text-blue-700 pb-4">Category List</h1>
        <ul class="border border-gray-200 rounded p-4">


            <li class="pb-4">
                <ul class="flex justify-between items-center text-2xl font-semibold">
                    <li class="w-30">S. No</li>
                    <li class="w-70">Name</li>
                    <li class="w-70">Creator</li>
                    <li class="w-30">Action</li>
                </ul>
            </li>


            @foreach ($categories as $category)
            <li class="even:bg-gray-200">
                <ul class="flex justify-between items-center space-y-2">
                    <li class="w-30">{{$category->id}}</li>
                    <li class="w-70 pl-3">{{$category->name}}</li>
                    <li class="w-70 pl-5">{{$category->creator}}</li>
                    <li class="w-30 pl-2 flex items-center">Delete <a href="category/delete/{{$category->id}}"><svg
                                xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
                            </svg></a></li>
                </ul>
            </li>

            @endforeach
        </ul>
    </div>
</div>
@endsection