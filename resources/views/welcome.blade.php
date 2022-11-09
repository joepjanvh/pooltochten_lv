<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        @vite(['resources/css/app.css', 'resources/js/app.js'])
          <!-- Scripts -->

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <!-- div voor vak op pagina --> 
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <!-- div voor logo -->
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <x-application-logo class="block h-28 w-auto fill-current text-gray-600" />
                </div>

                <div class="mt-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">test</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <div class="flex align-top h-10 w-40 pl-2 inline-block">
                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 16 16" width="24px" height="24px"><path fill="none" stroke="#000000" stroke-miterlimit="10" d="M3.5,13.5h8c1.105,0,2-0.895,2-2v-8c0-1.105-0.895-2-2-2h-8c-1.105,0-2,0.895-2,2v8C1.5,12.605,2.395,13.5,3.5,13.5z"/><path d="M9.904,13.091V8.966h1.397l0.209-1.608H9.904V6.332c0-0.466,0.131-0.783,0.804-0.783l0.858-0.001V4.11c-0.149-0.02-0.658-0.063-1.251-0.063c-1.238,0-2.085,0.749-2.085,2.125v1.186L7,7.354v1.608l1.23,0.004v4.126H9.904z"/></svg>
                            <a href="https://www.facebook.com/pooltochten/" target="_blank" class="ml-1 underline">
                                Facebook
                            </a>
</div><div class="flex h-10 w-40 pl-2 inline-block">
                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 16 16" width="24px" height="24px"><path fill="none" stroke="#000000" stroke-miterlimit="10" d="M4.773,13.5h5.455c1.807,0,3.272-1.465,3.272-3.273V4.772c0-1.807-1.465-3.272-3.273-3.272H4.772C2.965,1.5,1.5,2.965,1.5,4.773v5.455C1.5,12.035,2.965,13.5,4.773,13.5z"/><path fill="none" stroke="#000000" stroke-miterlimit="10" d="M7.5 4.5A3 3 0 1 0 7.5 10.5A3 3 0 1 0 7.5 4.5Z"/><path d="M11.5 3A0.5 0.5 0 1 0 11.5 4A0.5 0.5 0 1 0 11.5 3Z"/></svg>
                            <a href="https://www.instagram.com/pooltochtenommen/?hl=nl" target="_blank" class="ml-1 underline">
                                Instagram
                            </a>
</div><div class="flex align-top h-10 w-40 pl-2 inline-block">
                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 16 16" width="24px" height="24px"><path d="M15,3.297c-0.525,0.226-1.05,0.395-1.633,0.451c0.583-0.338,1.05-0.903,1.283-1.523c-0.583,0.338-1.167,0.564-1.808,0.677C12.258,2.338,11.5,2,10.683,2C9.108,2,7.825,3.241,7.825,4.764c0,0.226,0,0.451,0.058,0.621c-3.008,0-5.07-1.692-6.47-3.385C1.121,2.395,1.005,2.903,1.005,3.41c0,0.959,0.525,1.805,1.283,2.313C1.821,5.667,1.355,5.554,1.005,5.385c0,0,0,0,0,0.056c0,1.354,0.992,2.482,2.275,2.708C3.046,8.205,2.813,8.262,2.521,8.262c-0.175,0-0.35,0-0.525-0.056c0.35,1.128,1.979,2.426,3.262,2.426C4.267,11.364,3.344,12,1.5,12c-0.233,0-0.047,0-0.5,0c1.283,0.79,2.8,1,4.375,1c5.308,0,8.167-4.231,8.167-7.897c0-0.113,0-0.226,0-0.338C14.125,4.369,14.592,3.862,15,3.297"/></svg>
                            <a href="https://twitter.com/pooltochten" target="_blank" class="ml-1 underline">
                                Twitter
                            </a>
                            </div>

                        </div>
                    </div>

                    <div class="ml-4 text-center text-xs text-gray-500 sm:text-right sm:ml-0">
                        Pooltochten 2022&#169; (version {{  date(" d/m/y H:i",FILEMTIME("updatefile")) }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
