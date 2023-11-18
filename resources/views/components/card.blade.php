<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ Storage::url($recipe->image) }}" class="img-fluid rounded-start" alt="{{ $recipe->title }}">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $recipe->title }}</h5>
          
          <div class="card-footer">
            <p class="card-text">{{ $recipe->created_at->diffForHumans() }}</p>
          </div>
        </div>
      </div>

      <a href="{{ route('recipe.show', $recipe) }}" class="btn btn-info text-decoration-none">Show</a>
    </div>
  </div>