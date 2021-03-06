@extends('layouts.base')

@section('content')
<div class="mb-3 md:pr-36 flex justify-center">
    <h1 class="font-bold text-3xl">Profile Browser</h1>
</div>@if(count($stars) >=1)
<!-- condition pour ne pas afficher d'erreur si pas de stars en bdd -->
<div class="flex" x-data="tabs('tab{{$stars[0]->id}}')">
    <!-- Permet d'afficher le premier element récuperer de la bdd -->
    <div class="flex flex-col">
        @foreach($stars as $star)
        <button href="#tab{{$star->id}}" @click="toggleTab" class=" pl-2 flex flex-start max-h-20 whitespace-nowrap border border-slate-500 rounded-l-lg bg-slate-300 focus focus:bg-white rounded hover:bg-gray-200 ">{{$star->name}}</button>
        @endforeach
        <!-- la fonction toggleTab permet d'afficher l'element sur le quel on click en changeant la valeur de tab -->
    </div>
    <div class="h-full">
        <!-- Je reboucle sur mon tableau de données pour séparer les div pour le "design" -->
        @foreach($stars as $star)
        <template x-if="isActive('tab{{$star->id}}')">
            <!-- isActive permet d'afficher l'element actif -->
            <div class="max-w-lg ml-6 max-h-12">
                <img src="{{$star->image}}" class="w-32 h-32 object-cover float-left rounded-extraLarge" alt="starImage">
                <p class="font-bold mb-1.5">{{$star->first_name}}</p>
                <p class="text-xs md:text-base">{{$star->description}}</p>
            </div>
        </template>
        @endforeach
    </div>
</div>
@endif
@endsection