<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tiny.cloud/1/2mvbuy33xuusgt9tm8ctp0eaepme6v5mvkito3cs0sq4eqyo/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#content',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image',  // Add link and image buttons
            toolbar_mode: 'floating',
            height: 300,
            menubar: false,
            images_upload_url: '/upload-image',  // Define your image upload URL here
            images_upload_handler: function (blobInfo, success, failure) {
                // Custom image upload handler if required
            }
        });
    </script>
    @vite('resources/css/app.css')
    <title>Edit Post</title>
</head>
<body class="flex flex-col min-h-screen bg-gray-200">
    @include('Layouts.navbar')
    <div class="flex justify-center items-center flex-grow mt-6 mb-6">
        <form action="/edit/edit-post/{{$post->id}}" method="post" class="w-full max-w-screen-md bg-white rounded-lg flex flex-col shadow-lg p-6">
            <h3 class="text-3xl mb-6 text-center">Edit a post</h3>
            @csrf
            @method('PUT')
            <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-2">
                <div class="w-full">
                    <label class="block text-lg" for="name">Title</label>
                    <input class="p-3 mt-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="title" id="" value="{{$post->title}}" placeholder="Title" />
                </div>
                <div class="w-full">
                    <label class="block text-lg" for="image">Image</label>
                    <input class="p-3 mt-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="image" id="" value="{{$post->image}}" placeholder="Header Image" />
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-lg" for="content">Content</label>
                <textarea class="p-3 mt-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="content" id="content" placeholder="Content">{{$post->content}}</textarea>
            </div>
            <div class="my-2 p-2">
                <button type="submit" class="p-2 bg-blue-800 text-xl rounded-md text-gray-200">Save changes</button>
            </div>
        </form>
    </div>
    @include('Layouts.footer')
</body>
</html>
