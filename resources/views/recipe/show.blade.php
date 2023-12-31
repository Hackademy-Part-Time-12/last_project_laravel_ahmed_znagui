<x-layout>
    <div class="container ">
        <div class="row">
            <h2 class="my-5">{{$recipe->title }}</h2>
        </div>
    </div>

    <div class="container my-5 shadow">
        <div class="row">
            <div class="col-12 col-md-6 p-0">
                <img src="{{ Storage::url($recipe->image) }}" alt="{{ $recipe->title }}" class="img-fluid">
            </div>

            <div class="col-12 col-md-6 p-0">
                <p>{{ $recipe->user->name }}</p>
               {{--  <p>{{ $recipe->created_at(l , d/m/y) }}</p> --}}
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h4>Process</h4>
                <p>{{ $recipe->procedure }}</p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('recipe.index')  }}">Back To Recipes</a>
            </div>
        </div>
    </div>

</x-layout>