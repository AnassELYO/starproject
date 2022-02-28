<style>
    .container {
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .stars img {
        height: 200px;
        width: 200px;
        border-radius: 100%;
    }

    .stars {
        display: flex;
        flex-direction: column;
        background-color: darkgreen;
        width: 80%;
    }

    .star{
        display: flex;
        background-color: darkgray;
    }

    .stars button{
        width: 25%;
    }

    li {
        list-style: none;
    }
    
    .menu {
        display: flex;
    }
</style>
<script src="../js/script.js" defer></script>
<script src="../js/app.js" defer></script>

<div class="container" >
    <div class="stars" x-data="tabs('tab{{$stars[0]->id}}')">
        @foreach($stars as $star)
        <div class="menu">
            <button href="#tab{{$star->id}}" @click="toggleTab">{{$star->name}}</button>
        </div>
        <template x-if="isActive('tab{{$star->id}}')">
            <div class="star">
                <img src="{{$star->image}}" alt="starImage">
                <p>{{$star->first_name}}</p>
                <p>{{$star->description}}</p>
            </div>
        </template>
        @endforeach
    </div>
    
</div>
