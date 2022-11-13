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
                    
                        <div class="col-span-6 ">
                            <div class="text-xl mb-4">Add new Image</div>

                           <form action="/p" enctype="multipart/form-data" method="POST">
                            @csrf
                                <div>
                                    <x-input-label for="caption" :value="__('Image Caption ')" />
                
                                    <x-text-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" required autofocus />
                
                                    <x-input-error :messages="$errors->get('caption')" class="mt-2" />
                                </div>

                                <div>
                                    <x-input-label for="hike" :value="__('Pick Hike ')" />
                                    <select id="hike" class="block mt-1 w-full" type="text" name="hike" :value="old('hike')" required autofocus size="1">
                                        <option value="">Selecteer categorie</option>
                                        <option value="A-Hike">A-Hike</option>
                                        <option value="B-Hike">B-Hike</option>
                                        <option value="C-Hike">C-Hike</option>
                                        <option value="D-Hike">D-Hike</option>
                                        <option value="E-Hike">E-Hike</option>
                                        <option value="F-Hike">F-Hike</option>
                                        <option value="Werkploeg">Werkploeg</option>
                                        <option value="Kookploeg">Kookploeg</option>
                                        <option value="Thema">Thema</option>
                                        <option value="VK">VK</option>
                                        <option value="Algemeen">Algemeen</option>
                                    </select>

                                    
                                   


                                    <x-input-error :messages="$errors->get('hike')" class="mt-2" />
                                </div>

                                <div class="pt-4">
                                    <x-input-label for="image" :value="__('Image upload ')" />
                
                                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus />
                
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>

                                <x-primary-button class="ml-0 mt-4">
                                    Upload
                                </x-primary-button>
                           </form>
                            





                    </div>
                    
                    
                </div>

                <div class="border-t mt-8 border-gray-300"></div>
                            
        
        </div>
</div>        

        <div class="ml-4 mt-2 text-center text-xs text-gray-500 sm:text-right sm:ml-0">
            Pooltochten 2022 &#169; 
        </div>
</div>
            
</x-app-layout>
