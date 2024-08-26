<?php

namespace App\Livewire\Task;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ViewTask extends Component
{
    public ?Task $task = null;
    public Collection $listCategorys;

    public function mount()
    {
        $this->listCategorys = Category::all();
    }


    #[\Livewire\Attributes\On('loadTaskView')]
    public function loadTaskView(Task $task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.task.view-task');
    }
}
