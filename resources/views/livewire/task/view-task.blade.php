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
            <x-text-input value="{{ $task?->name }}" id="name" name="name" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('nome') }}" disabled />
        </div>

        <div class="mt-6">
            <x-input-label for="category" value="{{ __('Categorias') }}" />
            <select id="category" name="category"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                disabled>
                @foreach ($listCategorys as $category)
                    <option @selected($category->id == $task?->category_id) value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-6">
            <x-input-label for="status" value="{{ __('Status') }}" />
            <select disabled id="status" name="status"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                @foreach (App\Enums\StatusTaskEnum::cases() as $status)
                    <option @selected($status->value == $task?->status) value="{{ $status->value }}">{{ $status->label() }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-6">
            <x-input-label for="description" value="{{ __('Descrição') }}" />
            <textarea disabled id="description" name="description" rows="4"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"> {{ $task?->description }}</textarea>
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Fechar') }}
            </x-secondary-button>

        </div>
    </form>
</div>
