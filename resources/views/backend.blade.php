<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold  text-xl text-gray-800 leading-tight">
            {{ __('Backend') }}
        </h2>
    </x-slot>

    <div class="py-4 " >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-xs bg-white dark:bg-gray-600 border-b border-gray-200 dark:border-gray-800">
                    <b>{{ Auth::user()->name }}</b> is ingelogd in het Pooltochten Backend Systeem
                </div>
            </div>
        </div>
    </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- div voor logo -->



                <div class="mt-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold">Test</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                
                                <div class="ml-4 text-lg leading-7 font-semibold">Laracasts
                                </div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                
                                <div class="ml-4 text-lg leading-7 font-semibold">Laravel News</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                  
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   
                                   </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sm:flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                           

                        </div>
                    </div>

                    <div class="ml-4 text-center text-xs text-gray-500 sm:text-right sm:ml-0">
                        Pooltochten 2022 &#169; 
                    </div>
                </div>
            </div>
</x-app-layout>
