<x-layout>
    <div class="container-fluid mx-1 cont-recipe">
        <div class="row justify-content-end ">
            <div class="col-6">
                
                <h2 class="text-custom text-center">Last recipies</h2>
            </div>
        </div>

       
    </div>
     <div class="row">
            <div class="col-12 col-md-12 text-center">
                <a href="{{ route('recipe.index') }}" class="btn ">Recipies</a>
            </div>
        </div> 
    {{-- <div class="container">
        <div class="row">
            @forelse ($recipes as $recipe)
            <div class="col-12 col-md-3 my-3">
              <x-card :recipe="$recipe" />
            </div>
            @empty
                <p class="text-center">No recepies here. <a href="{{ route('recipe.create') }}" class="btn text-decoration-none btn-secondary" >Add One</a></p>
            @endforelse
        </div>
    </div> --}}
</x-layout>