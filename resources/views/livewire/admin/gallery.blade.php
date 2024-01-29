<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Galeria de Imagenes') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div
                class="px-6 flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 py-4">
                <div class="w-full md:w-1/5">
                  
                </div>
                <div
                    class=" flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                    <div class="flex items-center space-x-3 w-full md:w-auto">
                        <div>
                          
                        </div>
                    </div>
                    <button type="button" wire:click="$set('modal' ,true)"
                        class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-2 py-2 bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring-indigo-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Nueva Imagen
                    </button>
                </div>
            </div>
      
                
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    @if (count($galeries))
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Imagen
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Descipcion
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        ACCIONES
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($galeries as $item)
                                    <tr
                                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->id }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $item->image }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->description }}
                                        </td>

                                        <td class="px-6 py-4">
                                           
                                  
                                                <a wire:click="delete({{ $item }})" href="#"
                                                    wire:confirm="Estas seguro, !No podras Revertir Esta accion : Eliminar¡?"
                                                    class="font-medium mx-3 text-blue-600 dark:text-blue-500 hover:underline">Eliminar</a>
                                        

                                        </td>




                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @else
                        <h6 class="text-center my-5 text-gray-900 dark:text-white">Ningun registro encontrado</h6>
                    @endif
                   
                </div>

            </div>
        </div>
    </div>


    

    <x-modal-form :head='$componentName="Galeria"' :id='$selected_id'>
        @include('livewire.admin.gallery-form')
    </x-modal-form> 

</div>
