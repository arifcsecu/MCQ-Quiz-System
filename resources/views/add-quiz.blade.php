<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quiz Page</title>
    @vite('resources/css/app.css')
</head>

<body class="max-w-7xl mx-auto">
    <x-navbar name={{$name}}></x-navbar>

    <div class="bg-gray-200 flex justify-center py-10">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
            <h2 class="text-2xl text-center text-gray-800 mb-6">Add Quiz</h2>

            <form action="/add-quiz" method="GET" class="space-y-4">

                <div>
                    <input type="text" name="quiz" placeholder="Enter Quiz name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                </div>
                <div>
                    <select type="text" name="category_id" placeholder="Enter Quiz name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">

                        @foreach($categories as $category)
                        <option value={{$category->id}}> {{$category->name}} </option>
                        @endforeach

                    </select>
                </div>
                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-700 rounded-xl px-4 py-2 text-white">Add</button>
            </form>
        </div>
    </div>
</body>

</html>