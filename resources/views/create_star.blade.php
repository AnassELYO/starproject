<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.star.store') }}" method="post" enctype="multipart/form-data" class="flex flex-col justify-center items-center my-5">
                    <input type="hidden" name="id">
                    <div class="mb-3 flex  items-center justify-center">
                        <label for="name" class="mr-6 lg:mr-12">Name:</label>
                        <input type="text" class="h-8 @error('name') is-invalid @enderror" name="name" required>
                        @error('name')
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 flex items-center justify-center">
                        <label for="first_name" class="mr-6 lg:mr-12">First name:</label>
                        <input type="text" class="h-8 @error('first_name') is-invalid @enderror" name="first_name" required>
                        @error('first_name')
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 flex  items-center justify-center">
                        <label for="name" class="mr-6 lg:mr-12">Image:</label>
                        <input type="file" class="h-8 @error('image') is-invalid @enderror" name="image" accept="image/png, image/jpeg">
                        @error('image')
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 flex flex-col items-center justify-center">
                        <label for="name" class="mr-6 lg:mr-12">Description:</label>
                        <textarea type="text" class="h-32 lg:h-40 lg:w-96 @error('description') is-invalid @enderror" name="description" required></textarea>
                        @error('description')
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">{{ $message }}</div>
                        @enderror
                    </div>
                    @method('POST')
                    @csrf
                    <button class="basis-1/4 border border-1 border-black bg-amber-300 hover:bg-amber-400" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>