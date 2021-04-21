<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin view') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as an Admin! <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit excepturi, praesentium repudiandae atque, at quod nostrum expedita laborum, aspernatur voluptatum aliquid odit cumque ad minima itaque vel omnis ipsam cupiditate!</p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
