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

                    <div class="mt-2 mb-2 shadow-md p-5">
                        <div class="flex justify-between items-center mt-2 mb-2 shadow-lg py-4 px-2 bg-white">
                            <div>
                                <h3 class="text-2xl">{{$post->user->name}}</h3>
                                <p class="text-sm text-gray-400">Author</p>
                            </div>
                            <p class="p-2 text-xl text-gray-500">Posted at {{$post->created_at->format('Y-m-d')}}</p>
                        </div>
                        <div class="p-6 bg-white">
                            <h3 class="text-2xl">{{$post['title']}}</h3>
                            <p class="p-2" >{!! $post->content !!}</p>
                        </div>
                        {{-- <div class="flex mt-2 mb-2">
                            <p class="text-xl p-2 bg-blue-700 text-gray-200 mr-1 rounded-md"> <a href="/get-edit-post/{{$post->id}}">Edit</a> </p>
                            <form action="/delete/delete-post/{{$post->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-xl p-2 bg-red-600 text-gray-200 ml-1 rounded-md"> Delete </button>
                            </form>
                        </div> --}}
                    </div>
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
