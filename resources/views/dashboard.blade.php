<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-600 p-3 tex-white">
                    {{session('success')}}
                </div>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4">
                <x-welcome />
                @forelse ($tareas as $tarea)
                    <div class="dark:text-white p-3">
                        <h3>{{$tarea->titulo}}</h3>
                        <p class="darl:text-white text-sm">{{$tarea->descripcion}}</p>
                        <p class="dark:text-white text-sm">{{$tarea->fecha}}</p>
                    </div>
                @empty
                    <div class="text-center dark:text-white text-gray-800 py-2">
                        <p>Sin Tareas</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    
        
    
       
    
</x-app-layout>
