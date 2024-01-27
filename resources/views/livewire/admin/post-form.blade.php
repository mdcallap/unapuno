      
<div >

                
               <div class="mb-4" >
                <x-label for="title" class="mb-2" >
                  Titulo:
                </x-label>
                <x-input wire:model="title" type="text" id="title"  class="w-full"/>
                    @error('title')
                    <h1 class="text-red-500">{{$message}}</h1>
                    @enderror
                </div>

             


                  <div class="mb-4" >
                    <x-label for="content" class="mb-2" >
                      Contenido:
                    </x-label>
                    <textarea wire:model="content" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Escribe la Descipcion..."></textarea>
                        @error('content')
                        <h1 class="text-red-500">{{$message}}</h1>
                        @enderror
                    </div>



                    <div class="mb-4" >
                      <x-label for="file" class="mb-2" >
                        Archivo Adjunto:
                      </x-label>

             


                     
                      <input wire:model="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                      
                      @error('file')
                          <h1 class="text-red-500">{{$message}}</h1>
                          @enderror
                      </div>


                      @if ($file) 
                      <img src="{{ $file->temporaryUrl() }}">
                        @endif

                      <div class="mb-4" >
                        <x-label for="status" class="mb-2" >
                          Estado de Publicacion:
                        </x-label>
                          
                            <div class="flex">
                              <div class="flex items-center me-4">
                                  <input id="inline-radio" type="radio" value="1" name="inline-radio-group" class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                  <label   wire.model="status" for="inline-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Publicado</label>
                              </div>
                              <div class="flex items-center me-4">
                                  <input id="inline-2-radio" type="radio" value="2" name="inline-radio-group" class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                  <label  wire.model="status" for="inline-2-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Borrador</label>
                              </div>
                            </div>
                        @error('status')
                            <h1 class="text-red-500">{{$message}}</h1>
                            @enderror
                        </div>




             {{--  <div class="mb-4" >


                <x-label class="block text-sm font-medium text-gray-700 mb-2">Titulo: </x-label>

                          <select  wire:model="family_id"class="w-full border-gray-300 mr-2 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                              <option value="" selected>Seleccione...</option>
                              @foreach ($family as $item)
                                <option value="{{$item->id}}"  {{$item->checked==1 ? 'disabled': ''}}>{{$item->name}} </option>
                            
                                @endforeach
                                                          
                          </select> 
                          
                          @error('family_id')
                              <h1 class="text-red-500">{{$message}}</h1>
                        @enderror
                </div> --}}

                
               
            

             
                
  

  
                
</div>
      
          


  

  