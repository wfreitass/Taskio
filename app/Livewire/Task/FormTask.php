<?php

namespace App\Livewire\Task;

use App\Livewire\Forms\Task\TaskForm;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class FormTask extends Component
{

    /**
     *
     * @var TaskForm
     */
    public TaskForm $taskForm;

    public Collection|null $listCategorys;

    public function mount()
    {
        $this->listCategorys = Category::all();
    }

    #[\Livewire\Attributes\On('loadTask')]
    public function loadTask(?Task $task)
    {
        $this->taskForm->setTask($task);
    }

    #[\Livewire\Attributes\On('formReset')]
    /**
     *
     * @return void
     * 
     */
    public function formReset()
    {
        $this->taskForm->reset();
    }


    /**
     *
     * @return void
     * 
     */
    public function save()
    {
        $this->taskForm?->task ? $this->taskForm->update() :  $this->taskForm->store();

        $this->taskForm->reset();
        $this->dispatch('close');
        $this->dispatch('pg:eventRefresh-default');
    }


    public function render()
    {
        return view('livewire.task.form-task');
    }
}
