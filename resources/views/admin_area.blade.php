<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(count($stars) >=1)
                    <div class="flex flex-col" x-data="tabs('tab{{$stars[0]->id}}')">
                        <div class="flex mb-7 flex-wrap">
                            @foreach($stars as $star)
                            <button href="#tab{{$star->id}}" @click="toggleTab" class="basis-1/4 grow whitespace-nowrap border border-slate-500 bg-slate-300 focus focus:bg-white rounded hover:bg-gray-200 ">{{$star->name}}</button>
                            @endforeach
                        </div>
                        <div class="h-full">
                            @foreach($stars as $star)
                            <template x-if="isActive('tab{{$star->id}}')">
                                <div class="">
                                    <img src="{{$star->image}}" class="w-32 h-32 object-cover " alt="starImage">
                                    <p class="font-bold mb-1.5">{{$star->first_name}}</p>
                                    <p class="text-xs md:text-base">{{$star->description}}</p>
                                    <div class="flex"> <!-- nom de route avec en parametre l'id de la star qu'on souhaite modifier -->
                                        <a href="{{route ('admin.star.edit', $star->id)}}" class="w-40 border border-1 border-black bg-amber-300 hover:bg-amber-400 text-center"><button>Edit</button></a>
                                        <form action="{{ route('admin.star.destroy', $star->id) }}" method="post" class=""> <!-- nom de route avec en parametre l'id de la star qu'on souhaite supprimer -->
                                            @method('DELETE')
                                            @csrf
                                            <button class="w-40 border border-1 border-black bg-red-500 hover:bg-red-700" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                                        </form>
                                        <a href="{{route('admin.star.create')}}" class="w-40 border border-1 border-black bg-lime-400 hover:bg-lime-500 text-center"><button>Create</button></a>
                                    </div>
                                </div>
                            </template>
                            @endforeach
                        </div>
                    </div>
                    @else <!-- condition pour afficher le bouton créer si pas de stars en bdd -->
                    <a href="{{route('admin.star.create')}}" class="w-40 border border-1 border-black bg-lime-400 hover:bg-lime-500 text-center"><button>Create</button></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>