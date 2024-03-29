<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold  text-xl text-gray-800 leading-tight">
            <button onclick="location.href='{{ url('/profile') . ('/'). auth()->user()->id }}'" type="button"class="rounded-full  w-24  bg-gray-300 ">My Profile</button>
        </h2>
    </x-slot>

    <div class="py-6 " >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-600 border-b border-gray-200 dark:border-gray-800">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
