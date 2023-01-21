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
        <div class="relative sm:flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class=" fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <!-- <button onclick="location.href='{{ url('/backend') }}'" type="button"class="rounded-full  w-24  bg-gray-300 ">My Profile</button> --> 
                        <!-- <a href="{{ url('/backend') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --> 
                        <button onclick="location.href='{{ url('/profile') . ('/'). auth()->user()->id }}'" type="button"class="rounded-full  w-24  bg-gray-300 ">My Profile</button>
                    @else
                        <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--> 
                        <button onclick="location.href='{{ route('login') }}'" type="button"class="rounded-full w-24  bg-gray-300 ">Login</button>
                        @if (Route::has('register'))
                            
                            <!--  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>-->
                             <button onclick="location.href='{{ route('register') }}'" type="button"class="rounded-full  w-24  bg-gray-300 ">Register</button>
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
                            1
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            2
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            3
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            4
                        </div>
                    </div>
                </div>
                <div class="mt-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="p-6 grid grid-cols-1 md:grid-cols-2 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        vakje

                    </div>
                </div>
                

                <div class="sm:flex justify-center mt-4 sm:items-center sm:justify-between">
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

                    <div class=" ml-4 text-center text-xs text-gray-500 sm:text-right sm:ml-0">
                        Pooltochten 2023&#169; (version {{  date(" d/m/y H:i",FILEMTIME("updatefile")) }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
