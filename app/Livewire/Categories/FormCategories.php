<?php

namespace App\Livewire\Categories;

use App\Livewire\Forms\Categories\CategoriesForm;
use Livewire\Component;

class FormCategories extends Component
{
    public CategoriesForm $categoriesForm;


    public function save()
    {
        $this->categoriesForm->store();
    }

    public function render()
    {
        return view('livewire.categories.form-categories');
    }
}
