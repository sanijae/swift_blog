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
<div class="bg-white">
    @include('Layouts.navbar')
    <div class="flex justify-center">
        <div class="w-11/12 p-4 bg-white">
            <div class=" mt-2 mb-2 flex justify-center">
                <div class="p-2 w-10/12">
                    @foreach ($posts as $post )
                        <div class="mt-2 mb-2 shadow-xl p-5">
                            <h3 class="text-2xl p-4 my-4">{{$post['title']}}</h3>
                            <img class="header_image" src="{{$post['image']}}" alt="Header image">
                            {{-- <p class="p-2" >{!! $post->content !!}</p> --}}
                            <div class="flex my-4 items-center">
                                <a class="text-sm p-3 bg-blue-700 text-gray-200 rounded-md" href="/get-edit-post/{{$post->id}}">Edit</a>
                                <form action="/delete/delete-post/{{$post->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-sm p-3 bg-red-600 text-gray-200 ml-1 rounded-md"> Delete </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('Layouts.footer')
</div>
</body>
</html>
