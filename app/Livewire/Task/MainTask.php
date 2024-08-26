<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Livewire\Component;

class MainTask extends Component
{

    public $task = null;

    public function openModal()
    {
        $this->dispatch('formReset');
        $this->dispatch('open-modal',  'form-task');
    }

    #[\Livewire\Attributes\On('openEditModal')]
    public function openEditModal($task)
    {

        $this->task = $task;
        $this->dispatch('loadTask', $task["id"]);
        $this->dispatch('open-modal',  'form-task');
    }


    #[\Livewire\Attributes\On('viewTaskModal')]
    public function viewTaskModal(Task $task)
    {
        $this->task = $task;
        $this->dispatch('loadTaskView', $task);
        $this->dispatch('open-modal',  'view-task');
    }



    public function render()
    {
        return view('livewire.task.main-task');
    }
}
