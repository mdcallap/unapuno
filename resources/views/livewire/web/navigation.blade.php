<div>
    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-2.5">
            <a href="{{route('web.home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('images/logo.png')}}" class="h-8" alt="Flowbite Logo" />
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SUSST - UNAP</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 ms-3 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col font-medium p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:mt-0 md:text-sm  md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 md:space-x-8 md:rtl:space-x-reverse">
                    <li>
                        <a href="{{route('web.home')}}"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent"
                            aria-current="page">Inicio</a>
                    </li>


                    <li>
                        <button id="multiLevelArea1" data-dropdown-toggle="multi-dropdown-area1"
                            class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">   S. U. de Seguridad y Salud en el Trabajo</button>



                        <!-- Dropdown menu 1-->
                        <div id="multi-dropdown-area1"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="multiLevelArea1">
                            
                                @foreach ($categories->where('family_id', 1) as $item)
                                <li>
                                    <button id="doubleDropdownButtonArea{{$item->id}}" data-dropdown-toggle="doubleDropdownArea{{$item->id}}"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$item->name}}<svg
                                            class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg></button>
                                    
                                        
                                        <div id="doubleDropdownArea{{$item->id}}"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="doubleDropdownButtonArea{{$item->id}}">
                                            @foreach ($item->subcategories as $items)
                                            <li>
                                                <a href="{{route('web.show.item',$items->id)}}"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"> {{$items->name}}</a>
                                            </li>
                                           
                                            @endforeach
                                           
                                        </ul>
                                    </div>

                                   
                                </li>
                                @endforeach
                               
                                
                            </ul>
                        </div>


                    </li>

                    <li>
                        <button id="multiLevelArea2" data-dropdown-toggle="multi-dropdown-area2"
                            class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">   Sistema de Gestión de Riesgos</button>



                        <!-- Dropdown menu 1-->
                        <div id="multi-dropdown-area2"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="multiLevelArea2">
                            
                                @foreach ($categories->where('family_id', 2) as $item)
                                <li>
                                    <button id="doubleDropdownButtonArea{{$item->id}}" data-dropdown-toggle="doubleDropdownArea{{$item->id}}"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$item->name}}<svg
                                            class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg></button>
                                    
                                        
                                        <div id="doubleDropdownArea{{$item->id}}"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="doubleDropdownButtonArea{{$item->id}}">
                                            @foreach ($item->subcategories as $items)
                                            <li>
                                                <a href="{{route('web.show.item',$items->id)}}"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"> {{$items->name}}</a>
                                            </li>
                                           
                                            @endforeach
                                           
                                        </ul>
                                    </div>

                                   
                                </li>
                                @endforeach
                               
                                
                            </ul>
                        </div>


                    </li>



                    <li>
                        <a href="{{route('web.posts')}}"
                            class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Publicaciones</a>
                    </li>
                    
                    <li>
                        <a href="{{route('web.feature')}}"
                            class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">A Cerca de Nosotros</a>
                    </li>
                    
                    <li>
                        <a href="{{route('web.contact')}}"
                            class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contáctanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>