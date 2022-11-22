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
                    <b>{{ Auth::user()->name }}</b> met gebruikersnaam <b>{{ Auth::user()->username }}</b> is ingelogd in het Pooltochten Backend Systeem
                </div>
            </div>
        </div>
    </div>

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- div voor logo -->

<div class="grid grid-cols-9 gap-4">
        <div class="hidden sm:block col-span-2 mt-4 p-4 bg-white dark:bg-gray-700 overflow-hidden shadow sm:rounded-lg">
            left column
        </div>
        
        <div class="col-span-9 sm:col-span-7 mt-4 p-4 bg-white dark:bg-gray-700 overflow-hidden shadow sm:rounded-lg">
                <!-- container content here -->
                <div class="grid grid-cols-9 gap-4">
                    <div class="col-span-3 mx-auto "><img class="rounded-full h-28 w-28" src="../site_img/profimg.jpg"></div>
                        <div class="col-span-6 ">
                            <div class="grid grid-cols-8">
                                <div class="col-span-6 font-bold"> {{ $user->username ?? 'N/A'}}</div>
                                <div class="col-span-2 text-sm text-blue-500 font-semibold"><a href="/p/create">Add New Post</a></div>
                            </div>    
                                


                            <div class="grid-cols-1 grid grid-flow-row-dense sm:grid-cols-3 flex">
                                <div class="mr-20 col-span-1"> <b>{{ $user->posts->count() }}</b> berichten</div>
                                <div class="mr-20 col-span-1"> <b>7</b> volgers</div>
                                <div class="mr-20 col-span-1"> <b>7</b> volgend</div>
                            
                            </div>
                            <div class="pt-2 text-sm font-bold"> {{ $user->profile->title ?? 'N/A'}}    </div>
                            <div class="pt-0 text-sm"> {{ $user->profile->description ?? 'N/A' }}     </div>
                            <div class="pt-2 text-blue-500 text-sm"><a href="{{ $user->profile->url ?? 'N/A'}}" alt="Visit {{ $user->profile->url  ?? 'N/A'}}" target="_blank" > {{ $user->profile->url ?? 'N/A' }}</a>     </div>

                    </div>
                    
                    
                </div>

                <div class="border-t mt-8 border-gray-300"></div>
                    <div class="grid-cols-1 mt-8 grid sm:grid-cols-3 gap-3  ">
                        @foreach($user->posts as $post)
                        <div class="p-2 col-span-1 mx-auto ">
                            <a href="#">
                            
                                <img class="object-cover aspect-square hover:brightness-75 " src="/storage/{{ $post->image }}">
                            </a>
                            <div class="relative bottom-20 h-20 left-0 right-0 px-4 py-2 bg-gray-800 opacity-50">
                                <h3 class="text-xl text-white font-bold">
                                    {{ $post->hike }}</h3>
                                <p class="text-sm text-gray-300">{{ $post->caption }}</p>
                            </div>
                        </div>

                        @endforeach
                              
                    </div>                
        
        </div>
</div>        

        <div class="ml-4 mt-2 text-center text-xs text-gray-500 sm:text-right sm:ml-0">
            Pooltochten 2022 &#169; 
        </div>
</div>
            
</x-app-layout>
