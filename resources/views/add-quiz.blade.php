@extends('layout.app')

@section('content')

<div class="max-w-5xl mx-auto">
        <div class="bg-gray-200 flex justify-center py-10">
            <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">

                @if(!session('quizDetails'))
                <h2 class="text-2xl text-center text-gray-800 mb-6">Add Quiz</h2>

                <form action="/add-quiz" method="GET" class="space-y-4">

                    <div>
                        <input type="text" name="quiz" placeholder="Enter Quiz name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white text-gray-700 font-medium">
                    </div>
                    <div>
                        <select type="text" name="category_id" placeholder="Enter Quiz name" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white text-gray-700 font-medium">

                            @foreach($categories as $category)
                            <option value={{$category->id}}> {{$category->name}} </option>
                            @endforeach

                        </select>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-700 rounded-xl px-4 py-2 text-white">Add</button>
                </form>
                @else
                <p class="text-green-500 font-bold text-center">Quiz: {{session('quizDetails')->name}}</p>
                <p class="text-green-500 font-bold text-center">The number of MCQ's are added: {{$totalMCQs}}</p>
                    @if ($totalMCQs>0)
                    <p class="text-indigo-600 font-bold text-center"><a href="">Show All MCQ's</a></p>
                    @endif
                <h2 class="text-2xl text-center text-gray-800 my-4">Add MCQs</h2>

                <form action="/add-mcq" method="post" class="space-y-4">
                    @csrf

                    <div>
                        <textarea type="text" name="question" placeholder="Enter the question..."
                            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none"></textarea>
                            @error('question')
                                <div class="text-red-500">{{$message}}</div>
                            @enderror
                    </div>
                    <div>
                        <input type="text" name="a" placeholder="Enter first option"
                            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                            @error('a')
                                <div class="text-red-500">{{$message}}</div>
                            @enderror
                    </div>
                    <div>
                        <input type="text" name="b" placeholder="Enter second option"
                            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                            @error('b')
                                <div class="text-red-500">{{$message}}</div>
                            @enderror
                    </div>
                    <div>
                        <input type="text" name="c" placeholder="Enter third option"
                            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                            @error('c')
                                <div class="text-red-500">{{$message}}</div>
                            @enderror
                    </div>
                    <div>
                        <input type="text" name="d" placeholder="Enter fourth option"
                            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                            @error('d')
                                <div class="text-red-500">{{$message}}</div>
                            @enderror
                    </div>

                    <div>
                        <select name="correct_answer"
                            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                            <option value=" ">Select Right Answer</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                        @error('correct_answer')
                                <div class="text-red-500">{{$message}}</div>
                        @enderror
                    </div>

                    <button type="submit" value="add-more" name="submit"
                        class="w-full bg-blue-500 hover:bg-blue-700 rounded-xl px-4 py-2 text-white">Add more</button>
                    <button type="submit" value="done" name="submit"
                        class="w-full bg-green-500 hover:bg-green-700 rounded-xl px-4 py-2 text-white">Add and
                        Submit</button>
                    <a href="/end-quiz" class="w-full block text-center bg-red-500 hover:bg-red-800 rounded-xl px-4 py-2 text-white">Finish Quiz</a>
                </form>

                @endif
            </div>
        </div>
    </div>


    @endsection