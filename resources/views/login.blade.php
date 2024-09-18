<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body class="bg-gray-200 min-h-screen flex flex-col">
    @include('Layouts.navbar')
    <div class="flex-grow flex justify-center items-center">
        <form action="/login" method="post" class="w-full max-w-md bg-white flex flex-col shadow-lg p-6 rounded-lg">
            <h3 class="text-3xl mb-6 text-center">Login Form</h3>
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-lg">Email</label>
                <input class="p-3 mt-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" name="loginemail" placeholder="Email" />
            </div>
            <div class="mb-4">
                <label for="password" class="block text-lg">Password</label>
                <input class="p-3 mt-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="loginpassword" placeholder="Password" />
            </div>
            <div class="mt-4">
                <button type="submit" class="w-full bg-blue-800 text-white text-2xl py-3 rounded-lg hover:bg-blue-700 transition duration-200">Login</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    @include('Layouts.footer')
</body>
</html>
