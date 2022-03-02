<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.star.store') }}" method="post" class="flex flex-col justify-center items-center my-5">
                    <input type="hidden" name="id">
                    <div class="mb-3 flex  items-center justify-center">
                        <label for="name" class="mr-6 lg:mr-12">Name:</label>
                        <input type="text" class="h-8" name="name" required>
                    </div>
                    <div class="mb-3 flex items-center justify-center">
                        <label for="first_name" class="mr-6 lg:mr-12">First name:</label>
                        <input type="text" class="h-8" name="first_name" required>
                    </div>
                    <div class="mb-3 flex  items-center justify-center">
                        <label for="name" class="mr-6 lg:mr-12">Image:</label>
                        <input type="url" class="h-8" name="image" required>
                    </div>
                    <div class="mb-3 flex flex-col items-center justify-center">
                        <label for="name" class="mr-6 lg:mr-12">Description:</label>
                        <textarea type="text" class="h-32 lg:h-40 lg:w-96" name="description" required></textarea>
                    </div>
                    @method('POST')
                    @csrf
                    <button class="basis-1/4 border border-1 border-black bg-amber-300 hover:bg-amber-400" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>