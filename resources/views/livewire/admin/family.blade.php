<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Areas') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div
                    class="px-6 flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 py-4">
                    <div class="w-full md:w-1/5">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Buscar</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                                <input type="search" wire:model.live="search"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search" required="">
                            </div>

                        </form>
                    </div>
                    <div
                        class=" flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <div>
                                <div class="flex items-center justify-center  lg:mb-0 lg:justify-start">
                                    <span
                                        class=" text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Mostrar</span>
                                    <select wire:model.live="cant"
                                        class="mx-3 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-50 dark:focus:border-indigo-50 ">
                                        <option selected>10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>

                                    </select>
                                    <span
                                        class="text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">entradas</span>

                                </div>
                            </div>
                        </div>
                        <button type="button" wire:click="$set('modal' ,true)"
                            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-2 py-2 bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring-indigo-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Nueva Area
                        </button>
                    </div>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    @if (count($families))
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        NOMBRE
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        ACCIONES
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($families as $item)
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
                                            <a wire:click="edit({{ $item }})" href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                            @if ($item->categories->count() == 0)
                                                <a wire:click="delete({{ $item }})" href="#"
                                                    wire:confirm="Estas seguro, !No podras Revertir Esta accion : Eliminar¡?"
                                                    class="font-medium mx-3 text-blue-600 dark:text-blue-500 hover:underline">Eliminar</a>
                                            @endif

                                        </td>




                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @else
                        <h6 class="text-center my-5 text-gray-900 dark:text-white">Ningun registro encontrado</h6>
                    @endif
                    @if ($families->hasPages())
                        <div class="p-6">
                            {{ $families->links() }}

                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>


    <x-modal-form :head='$componentName = "Areas"' :id='$selected_id'>
        @include('livewire.admin.family-form')
    </x-modal-form>

</div>
