<link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Admin Revenue System
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <form action="{{ route('store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Accountant Name:</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        
                        <div>
                            <label for="amount" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Revenue Amount:</label>
                            <input type="text" id="amount" name="amount" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        
                        <div class="flex justify-center"> 
                        <button type="submit" class="inline-flex items-center px-4 py-2 border rounded-md shadow-sm text-sm font-medium text-black bg-indigo-600 hover:bg-black-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
    Submit
</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
