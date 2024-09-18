
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Profile</title>
</head>
<body>
    <div class="bg-gray-600 flex- flex-col min-h-screen">
        @include('Layouts.navbar')
        <div class="flex-grow flex justify-center items-center bg-gray-200">
            <div class="w-full max-w-lg flex flex-col p-4 bg-white rounded-md shadow-md my-6">
                <a href="/update-user-info" class=" my-2 p-4 flex justify-between items-center shadow-lg rounded-xl">
                   <div class="flex flex-col p-2">
                    <p>{{Auth::user()->name}}</p>
                    <p>{{Auth::user()->email}}</p>
                   </div>
                   <div class="p-2 ">
                    <i class="fa fa-user text-2xl"></i>
                   </div>
                </a>
                <div class="flex flex-col my-2 p-4">
                    <a href="/managePost/{{Auth::user()->id}}" class="my-4 shadow-lg rounded-lg p-4">
                        <p class="text-2xl text-gray-800">Manage posts</p>
                    </a>
                    <a href="#" class="my-4 shadow-lg rounded-lg p-4">
                        <p class="text-2xl text-gray-800">Notifications</p>
                    </a>
                    <a href="/update-password" class="my-4 shadow-lg rounded-lg p-4">
                        <p class="text-2xl text-gray-800">Manage password</p>
                    </a>
                    <a href="/logout" class="my-4 shadow-lg rounded-lg p-4">
                        <p class="text-2xl text-gray-800">Logout</p>
                    </a>
                </div>
            </div>
        </div>
        @include('Layouts.footer')
    </div>
</body>
</html>
