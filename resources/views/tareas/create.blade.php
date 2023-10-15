<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear tarea') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg flex flex-col items-center p-4">
                <div class="mt-4">
                    <h3 class="text-white text-lg font-semibold">Registro de Tarea</h3>
                </div>
                <form action="{{route('tarea.store')}}" method="POST" class="w-1/2">
                    @csrf
                    <div class="my-4">
                        <x-label>Titulo</x-label>
                        <x-input type="text" placeholder="Ingresa el titulo" class="w-full" name="titulo" />
                    </div>
                    <div class="my-4">
                        <x-label>Descripcion</x-label>
                        <textarea type="text" placeholder="detalla la tarea" name="descripcion" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                        </textarea>
                    </div>
                    <div class="my-4">
                        <x-label>Fecha limite</x-label>
                        <x-input type="date" placeholder="Ingresa el titulo" class="w-full" name="fecha" />
                    </div>
                    <div class="my-4">
                        <x-button>Guardar</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
