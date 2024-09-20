<x-layout>

   <x-slot:title>
      Services
   </x-slot>
 
<div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <h1>Services</h1>
    </div>
</div>

<div class="container-fluid p-0">

    @foreach ($services as $service)
    <article class="services">
        <div class="container p-4">
            <h2 class="text-center text-warning">{{$service->nom}}</h2>
            <div @class(["row", "row-cols-2", "align-items-center", "flex-row-reverse" =>  ($loop->index  % 2 ) - 1 == 0])>
                <div class="col">
                    <p class="text-justify">
                        {{$service->description}}
                        <!-- Venez vous posez à notre restauration, vous relaxer et en même temps savourez de délicieux repas que vous soyez en famille, en couple ou entre amies pendant votre excursion dans notre parc. -->
                    </p>
                </div>
                <div class="col">
                    <img class="w-100 rounded" src="{{$service->image}}" />
                    <!-- <img class="w-100 rounded" alt="restaurant" src="/imgs/restaurant.jpg"/> -->
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="#" class="btn btn-warning">Nos menus</a>
            </div>
        </div>
    </article>
    @endforeach
    
</div>

</x-layout>
