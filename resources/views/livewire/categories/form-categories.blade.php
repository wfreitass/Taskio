<div>
    <form wire:submit="save" class="p-6 ">

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Categorias') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Formulário de categorias') }}
        </p>

        <div class="mt-6">
            <x-input-label for="name" value="{{ __('Nome') }}" />
            <x-text-input wire:model="categoriesForm.name" id="name" name="name" type="text"
                class="mt-1 block w-3/4" placeholder="{{ __('nome') }}" />
            <x-input-error :messages="$errors->get('categoriesForm.name')" class="mt-2" />
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
