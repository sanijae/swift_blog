<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Swift Blog</title>
</head>
<body>
<div class="bg-gray-900">
    @include('Layouts.navbar')
    <div class="flex justify-center">
        <div class="w-11/12 p-4 bg-white">
            <div class=" mt-2 mb-2 flex justify-between bg-gray-200">
                <div class="p-2 w-full md:w-2/3">
                    @foreach ($posts as $post)
                        <a href="/details/{{$post->id}}" class="block mt-2 mb-2 shadow-md p-5 bg-white rounded-md cursor-pointer hover:shadow-lg transition-shadow duration-300">
                            <div class="p-4">
                                <div class="flex items-center p-2">
                                    <h3 class="text-2xl">{{$post->title}}</h3>
                                </div>
                                <div class="p-2 mt-2 mb-2 shadow-lg">
                                    <img class="header_image w-full object-cover" style="height: 25em" src="{{$post->image}}" alt="Header image">
                                </div>
                                <div class="shadow-lg py-2">
                                    <p class="p-2">by {{$post->user->name}} created at {{$post->created_at->format('Y-m-d')}}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="hidden md:flex justify-end bg-gray-200 p-2 w-1/3">
                    <div class="flex flex-col p-4 w-full">
                        <h2 class="text-4xl bg-gray-400 p-6 w-full">Categories</h2>
                        <div class="w-full bg-gray-100 p-4 rounded-md shadow-md mt-2 mb-2">
                            <a href="/" class="text-2xl">Politics</a>
                        </div>
                        <div class="w-full bg-gray-100 p-4 rounded-md shadow-md mt-2 mb-2">
                            <a href="/" class="text-2xl">Educations</a>
                        </div>
                        <div class="w-full bg-gray-100 p-4 rounded-md shadow-md mt-2 mb-2">
                            <a href="/" class="text-2xl">Sciences</a>
                        </div>
                        <div class="w-full bg-gray-100 p-4 rounded-md shadow-md mt-2 mb-2">
                            <a href="/" class="text-2xl">Sports</a>
                        </div>
                        <div class="w-full bg-gray-100 p-4 rounded-md shadow-md mt-2 mb-2">
                            <a href="/" class="text-2xl">Fashions</a>
                        </div>
                        <div class="w-full bg-gray-100 p-4 rounded-md shadow-md mt-2 mb-2">
                            <a href="/" class="text-2xl">Business</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Layouts.footer')
</div>
</body>
</html>
