
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Categories</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar name={{$name}}></x-navbar>

    <div class="bg-gray-200 flex justify-center py-10">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
        <h2 class="text-2xl text-center text-gray-800 mb-6">Add Category</h2>

        <form action="/add-category" method="POST" class="space-y-4">
            @csrf
            <div>
                <input type="text" name="Category" id="admin" placeholder="Enter Category name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            </div>           
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-700 rounded-xl px-4 py-2 text-white">Add</button>
        </form>
    </div>
    </div>
</body>
</html>
