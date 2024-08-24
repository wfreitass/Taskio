<section class="space-y-6">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categorias') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800">
                    <x-primary-button x-data=""
                        x-on:click.prevent="$wire.openModal()">{{ __('Criar categoria') }}</x-primary-button>
                </div>
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <livewire:categories.category-table />
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modal --}}
    <x-modal name="form-category" :show="$errors->isNotEmpty()" focusable>
        <livewire:categories.form-categories :category="$category" />
    </x-modal>
    {{-- /modal --}}
</section>
