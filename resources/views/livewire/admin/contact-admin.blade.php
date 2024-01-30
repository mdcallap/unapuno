<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mesajes de Contacto') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
              


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    @if (count($contacts))
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nombres
                                    </th>
                                  
                                    <th scope="col" class="px-6 py-3">
                                        Telefono
                                    </th>

            

                                    <th scope="col" class="px-6 py-3">
                                        Fecha
                                    </th>


                                    <th scope="col" class="px-6 py-3">
                                        ACCIONES
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($contacts as $item)
                                    <tr
                                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->id }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $item->name }}
                                        </td>
                                  
                                        <td class="px-6 py-4">
                                            {{ $item->phone }}
                                        </td>
                                        
                                        <td class="px-6 py-4">
                                            {{ $item->created_at }} 
                                        </td>


                                        <td class="px-6 py-4">


                                            <a wire:click="view({{ $item }})" href="#"
                                               
                                                class="font-medium mx-3 text-blue-600 dark:text-blue-500 hover:underline">Ver Mensaje</a>


                                        </td>




                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @else
                        <h6 class="text-center my-5 text-gray-900 dark:text-white">Ningún registro encontrado</h6>
                    @endif

                </div>

            </div>
        </div>
    </div>




    <x-modal-form :head="$componentName = 'Contacto'" :id='$selected_id'>
        @include('livewire.admin.contact-form')
    </x-modal-form>

</div>
