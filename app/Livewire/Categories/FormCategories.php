<?php

namespace App\Livewire\Categories;

use App\Livewire\Forms\Categories\CategoriesForm;
use App\Models\Category;
use Livewire\Component;

class FormCategories extends Component
{
    /**
     *
     * @var CategoriesForm
     */
    public CategoriesForm $categoriesForm;

    #[\Livewire\Attributes\On('loadCategory')]
    /**
     *
     * @param Category|null $category
     * 
     * @return void
     * 
     */
    public function loadCategory(?Category $category)
    {
        $this->categoriesForm->setCategory($category);
    }


    #[\Livewire\Attributes\On('formReset')]
    /**
     *
     * @return void
     * 
     */
    public function formReset()
    {
        $this->categoriesForm->reset();
    }

    /**
     *
     * @return void
     * 
     */
    public function save()
    {
        $this->categoriesForm?->category ? $this->categoriesForm->update() :  $this->categoriesForm->store();

        $this->categoriesForm->reset();
        $this->dispatch('close');
        $this->dispatch('pg:eventRefresh-default');
    }


    public function render()
    {
        return view('livewire.categories.form-categories');
    }
}
