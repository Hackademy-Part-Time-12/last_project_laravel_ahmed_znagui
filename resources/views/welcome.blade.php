<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <h2 class="display-3">Last recepies</h2>
                <a href="{{ route('recipe.index') }}" class="">Recepies</a>
            </div>
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