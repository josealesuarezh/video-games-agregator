<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Games</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex items-center justify-between px-4 py-6">
            <div class="flex items-center">
                <a href="/">
                    <img src="{{ Vite::asset('resources/img/logo2.png') }}" alt="video games" class="w-32 flex-none">
                </a>
                <ul class="flex ml-16 space-x-8">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 rounded-full text-sm pl-8 px-3 w-64 focus:shadow-blue-600 outline-2 py-1"
                           placeholder="Search...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div class="ml-6">
                    <a href="#"><img src="http://www.gravatar.com/avatar" alt="avatar" class="rounded-full w-8"></a>
                </div>
            </div>
        </nav>
    </header>
    <main class="py-8 ">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Power By <a href="" class="underline hover:text-gray-400">IGDB API</a>
        </div>

    </footer>


    <script src="https://kit.fontawesome.com/bb98f681f4.js" crossorigin="anonymous"></script>
</body>
</html>
