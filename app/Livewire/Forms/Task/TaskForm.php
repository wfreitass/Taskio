<?php

namespace App\Livewire\Forms\Task;

use App\Models\Category;
use App\Models\Task;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{
    /**
     *
     * @var Task|null
     */
    public ?Task $task = null;

    #[Validate('required|min:5', as: 'nome')]
    /**
     *
     * @var string
     */
    public string $name = "";

    #[Validate('required|min:5', as: 'descrição')]
    /**
     *
     * @var string
     */
    public string $description = "";

    #[Validate('required', as: 'categoria')]
    /**
     *
     * @var  Category|int|null
     */
    public Category|int|null $category_id;

    #[Validate('required', as: 'status')]
    /**
     *
     * @var string
     */
    public string $status = "";


    public function store()
    {
        $this->validate();
        Task::create($this->only(['name', "description", "category_id", "status"]));
    }

    /**
     *
     * @return void
     * 
     */
    public function update()
    {
        $this->validate();

        $this->task->update(
            $this->all()
        );
    }


    /**
     *
     * @param Task $task
     * 
     * @return void
     * 
     */
    public function setTask(Task $task)
    {
        $this->task = $task;

        $this->name = $task->name;
        $this->description = $task->description;
        $this->category_id = $task->category_id;
        $this->status = $task->status;
    }
}
