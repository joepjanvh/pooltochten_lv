<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold  text-xl text-gray-800 leading-tight">
            {{ __('Backend') }}
        </h2>
    </x-slot>
<!-- header part + username login confirm -->
    <div class="py-4 " >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-xs bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-800">
                    <b>{{ Auth::user()->name }}</b> is ingelogd in het Pooltochten Backend Systeem
                </div>
            </div>
        </div>
    </div>

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- div voor logo -->

<div class="grid grid-cols-9 gap-4">
        <div class="col-span-2 mt-4 p-4 bg-white dark:bg-gray-700 overflow-hidden shadow sm:rounded-lg">
            left column
        </div>
        
        <div class="col-span-7 mt-4 p-4 bg-white dark:bg-gray-700 overflow-hidden shadow sm:rounded-lg">
                <!-- container content here -->
                <div class="grid grid-cols-9 gap-4">
                    <div class="col-span-3 mx-auto "><img class="rounded-full h-28 w-28" src="site_img/profimg.jpg"></div>
                        <div class="col-span-6 ">
                            <div> <b>{{ Auth::user()->name }}</b></div>
                            <div class="flex">
                            <div class="mr-20"> <b>7</b> berichten</div>
                            <div class="mr-20"> <b>7</b> volgers</div>
                            <div class="mr-20"> <b>7</b> volgend</div>
                        </div>

                    </div>
                    
                    
                </div>

                <div class="border-t mt-8 border-gray-300"></div>
                    <div class="mt-8 grid grid-cols-3 gap-3  ">
                        <div class="p-2 col-span-1 mx-auto "><img class="hover:brightness-75 " src="site_img/profimg.jpg"></div>
                        <div class="p-2 col-span-1 mx-auto "><img class="hover:brightness-75 " src="site_img/profimg.jpg"></div>
                        <div class="p-2 col-span-1 mx-auto "><img class="hover:brightness-75 " src="site_img/profimg.jpg"></div>
                        <div class="p-2 col-span-1 mx-auto "><img class="hover:brightness-75 " src="site_img/profimg.jpg"></div>
                        <div class="p-2 col-span-1 mx-auto "><img class="hover:brightness-75 " src="site_img/profimg.jpg"></div>
                        <div class="p-2 col-span-1 mx-auto "><img class="hover:brightness-75 " src="site_img/profimg.jpg"></div>
                    </div>                
        
        </div>
</div>        

        <div class="ml-4 mt-2 text-center text-xs text-gray-500 sm:text-right sm:ml-0">
            Pooltochten 2022 &#169; 
        </div>
</div>
            
</x-app-layout>
