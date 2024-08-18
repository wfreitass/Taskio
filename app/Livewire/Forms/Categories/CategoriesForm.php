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
    public ?Category $category;

    #[Validate('required|min:5', as: 'nome')]
    /**
     *
     * @var string
     */
    public $name = '';

    /**
     *
     * @var bool
     */
    public $active = true;

    public function store()
    {
        $this->validate();
        dd($this->all());
    }

    /**
     *
     * @return [type]
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
     * @return [type]
     * 
     */
    public function setPost(Category $category)
    {
        $this->category = $category;

        $this->name = $category->name;
    }
}
