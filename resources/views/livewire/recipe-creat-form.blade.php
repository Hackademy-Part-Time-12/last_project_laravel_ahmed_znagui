<form class="shadow p-5" wire:submit.revent="store">
    @csrf
    @if (session('message'))
        <div class="alert alert-message text-success text-center bg-success">
            {{ session('message') }}    
        </div>    
    @endif                  
    <div class="mb-3">
        <label for="title" class="form-label" >Title</label>
        <input type="title" class="form-control" id="title" wire:model="title" >
      
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="image" class="form-label" >image</label>
        <input type="file" class="form-control" id="image" wire:model="image" >
      
        @error('image')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="title" class="form-label" >Process</label>
        <textarea class="form-control" id="procedure" wire:model="procedure" cols="30" rows="5"></textarea>
      
        @error('procedure')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

 
    <button type="submit" class="btn btn-primary">Add recipe</button>
</form>