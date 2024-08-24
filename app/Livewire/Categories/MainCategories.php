<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class MainCategories extends Component
{
    public $category = null;

    public function openModal()
    {
        $this->dispatch('formReset');
        $this->dispatch('open-modal',  'form-category');
    }

    #[\Livewire\Attributes\On('openEditModal')]
    public function openEditModal($category)
    {
        $this->category = $category;
        $this->dispatch('loadCategory',  $category["id"]);
        $this->dispatch('open-modal',  'form-category');
    }


    public function render()
    {
        return view('livewire.categories.main-categories');
    }
}
