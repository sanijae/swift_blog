<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Update user</title>
</head>
<body class="flex flex-col min-h-screen bg-gray-200">
    <!-- Navbar -->
    @include('Layouts.navbar')

    <!-- Main Content (Register Form) -->
    <div class="flex-grow flex justify-center items-center">
        <form action="/updateUser" method="post" class="w-full max-w-md bg-white flex flex-col shadow-lg p-6 rounded-lg">
            <h3 class="text-3xl mb-6 text-center">Update user form</h3>
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-lg">Name</label>
                <input class="p-3 mt-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="name" placeholder="Name" />
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg">Email</label>
                <input class="p-3 mt-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" name="email" placeholder="Email" />
            </div>
            <div class="mt-4">
                <button type="submit" class="w-full bg-blue-800 text-white text-2xl py-3 rounded-lg hover:bg-blue-700 transition duration-200">Update</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    @include('Layouts.footer')
</body>
</html>
