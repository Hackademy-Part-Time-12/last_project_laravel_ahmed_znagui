<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class RecipeCreatForm extends Component
{

    use WithFileUploads;
    

    public $title;
    public $image;
    public $procedure;

    protected $rules = [
        'title' => 'required|min:3',
        'image' => 'required|image|mimes:jpeg,png,jpg,webp,avif',
        'procedure' => 'required|min:3|max:100',    
    ];
    
    public function store(){

        $this->validate();
        
        Auth::user()->recipes()->create([
            'title' => $this->title,
            'image' => $this->image->store('public/recipes'),
            'procedure' => $this->procedure,

        ]);

        session()->flash('message', 'Recipe created successfully.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.recipe-creat-form');
    }
}
