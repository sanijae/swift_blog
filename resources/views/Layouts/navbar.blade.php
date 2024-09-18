<nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <!-- Logo -->
            {{-- <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-10">
            </a> --}}
            <!-- Brand Name -->
            <a href="{{ url('/') }}" class="text-xl md:text-2xl md:font-bold text-gray-800 hover:text-blue-600">
                Swift blog
            </a>
        </div>
        <div class="flex-1 px-2 md:px-20">
            <form action="/" method="GET">
                <div class="relative">
                    <input type="text" name="query" placeholder="Search or Filter..."
                        class="w-full border border-gray-300 rounded-md py-2 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                    <button type="submit" class="absolute right-0 top-0 mt-2 mr-4 text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 11a4 4 0 118 0 4 4 0 01-8 0zM2 21l4.35-4.35" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <div class="flex space-x-4 items-center">
            @auth
                <a href="/profile/{{Auth::user()->id}}" class=" bg-gray-600 text-white p-2 rounded-lg flex items-center">
                   <i class="fa fa-user"></i>&nbsp;
                   <p class="hidden md:flex">{{ Auth::user()->name }}</p>
                </a>
                <form action="/create-post-form" method="get">
                    @csrf
                    <button type="submit"
                        class="hidden md:flex bg-blue-800 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-600 transition duration-200">
                        Create post
                    </button>
                    <button type="submit"
                    class="flex md:hidden bg-blue-800 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-600 transition duration-200">
                    <i class="fa fa-edit"></i>
                </button>
                </form>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit"
                        class="bg-gray-800 text-white py-2 px-4 rounded-md shadow-md hover:bg-green-600 transition duration-200">
                        Logout
                    </button>
                </form>
                @else
                <form action="/login-form" method="get">
                    @csrf
                    <button type="submit"
                         class="bg-blue-500 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-600 transition duration-200">
                         Login
                     </button>
                 </form>
                 <form action="/register-form" method="get">
                     @csrf
                     <button type="submit"
                         class="bg-green-500 text-white py-2 px-4 rounded-md shadow-md hover:bg-green-600 transition duration-200">
                         Register
                     </button>
                 </form>
            @endauth
        </div>
    </div>
</nav>
