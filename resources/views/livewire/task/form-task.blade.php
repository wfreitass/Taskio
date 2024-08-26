<div>
    <form wire:submit="save" class="p-6 ">

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Tarefas') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Formulário de tarefas') }}
        </p>

        <div class="mt-6">
            <x-input-label for="name" value="{{ __('Nome') }}" />
            <x-text-input wire:model="taskForm.name" id="name" name="name" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('nome') }}" />
            <x-input-error :messages="$errors->get('taskForm.name')" class="mt-2" />
        </div>

        <div class="mt-6">
            <x-input-label for="category" value="{{ __('Categorias') }}" />
            <select wire:model="taskForm.category_id" id="category" name="category"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option @selected(true) hidden>Selecione a categoria</option>
                @foreach ($listCategorys as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('taskForm.category_id')" class="mt-2" />
        </div>

        <div class="mt-6">
            <x-input-label for="status" value="{{ __('Status') }}" />
            <select wire:model="taskForm.status" id="status" name="status"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option @selected(true) hidden>Selecione o status</option>
                @foreach (App\Enums\StatusTaskEnum::cases() as $status)
                    <option value="{{ $status->value }}">{{ $status->label() }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('taskForm.status')" class="mt-2" />
        </div>

        <div class="mt-6">
            <x-input-label for="description" value="{{ __('Descrição') }}" />
            <textarea wire:model="taskForm.description" id="description" name="description" rows="4"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
            <x-input-error :messages="$errors->get('taskForm.description')" class="mt-2" />
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancelar') }}
            </x-secondary-button>

            <x-primary-button class="ms-3">
                {{ __('Salvar') }}
            </x-primary-button>
        </div>
    </form>
</div>
