<x-layout>
    <div class="container">
        <div class="row">
           <h2 class="text-center my-5">Your Recipes</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @forelse ($recipes as $recipe)
            <div class="col-12 col-md-3 my-3">
              <x-card :recipe="$recipe" />
            </div>
            @empty
                <p class="text-center">No recepies here. <a href="{{ route('recipe.create') }}" class="btn text-decoration-none btn-secondary" >Add One</a></p>
            @endforelse
        </div>
    </div>
</x-layout>