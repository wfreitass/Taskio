<?php

namespace App\Livewire\Forms\Categories;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CategoriesForm extends Form
{
    /**
     *
     * @var Category|null
     */
    public ?Category $category = null;

    #[Validate('required|min:5|unique:categories', as: 'nome')]
    /**
     *
     * @var string
     */
    public string $name = '';

    /**
     *
     * @var bool
     */
    public bool $active = true;

    public function store()
    {
        $this->validate();
        Category::create($this->only(['name']));
    }

    /**
     *
     * @return void
     * 
     */
    public function update()
    {
        $this->validate();

        $this->category->update(
            $this->all()
        );
    }


    /**
     *
     * @param Category $category
     * 
     * @return void
     * 
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        $this->name = $category->name;
    }
}
