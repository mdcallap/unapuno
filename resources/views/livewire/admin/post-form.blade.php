      
<div >

  <div class="mb-4" >
    <x-label for="type" class="mb-2" >
      Tipo de Publicacion:
    </x-label>
      
        <div class="flex">
          <div class="flex items-center me-4">
              <input  wire:model="type" id="inline-radio" type="radio" value="0" name="type" class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label   for="type" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Noticia</label>
          </div>
          <div class="flex items-center me-4">
              <input   wire:model="type" id="inline-2-radio" type="radio" value="1" name="type" class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label  for="type" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">DOCUMENTO</label>
          </div>
        </div>
    @error('type')
        <h1 class="text-red-500">{{$message}}</h1>
        @enderror

       
    </div>

                
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

                      <x-label class="block text-sm font-medium text-gray-700 mb-2">Categoria: </x-label>
      
                                <select  wire:model="subcategory_id"class="w-full border-gray-300 mr-2 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value=""  disabled>Seleccione...</option>
                                    @foreach ($subcategories as $item)
                                      <option value="{{$item->id}}">{{$item->name}} </option>
                                  
                                      @endforeach
                                                                
                                </select> 
                                
                                @error('subcategory_id')
                                    <h1 class="text-red-500">{{$message}}</h1>
                              @enderror
                      </div>

                      <div class="mb-4" >
                        <x-label for="tags" class="mb-2" >
                          Etiquetas:
                        </x-label>

              
                          <div class="flex">
                            @foreach ($tags as $item)
                            <div class="flex items-center me-4">
                              <input id="inline-checkbox" type="checkbox" value="{{$item->id}}" wire:model="selectedTags" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                              <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> {{$item->name}}</label>
                          </div>
                            @endforeach
                            
                          
                          </div>
                          @error('selectedTags')
                          <h1 class="text-red-500">{{$message}}</h1>
                    @enderror

                        </div>



                    <div class="mb-4" >
                      <x-label for="file" class="mb-2" >
                        Archivo Adjunto:
                      </x-label>

             


                     
                      <input wire:model="file" wire:key="{{$filekey}}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                      
                      @error('file')
                          <h1 class="text-red-500">{{$message}}</h1>
                          @enderror
                      </div>


                      <div class="mb-4" >
                        <x-label for="status" class="mb-2" >
                          Estado de Publicacion:
                        </x-label>
                          
                        <div class="flex">
                          <div class="flex items-center me-4">
                              <input  wire:model="status" id="inline-radio" type="radio" value="0" name="status" class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                              <label   for="status" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Borrador</label>
                          </div>
                          <div class="flex items-center me-4">
                              <input   wire:model="status" id="inline-2-radio" type="radio" value="1" name="status" class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                              <label  for="status" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Publicado</label>
                          </div>
                        </div>
                        @error('status')
                            <h1 class="text-red-500">{{$message}}</h1>
                            @enderror
                        </div>


                        @if ($file && $type==0) 
                        <img src="{{ $file->temporaryUrl() }}">
                 
                        
                        @endif

                        @if ($doc )
                        <a href="{{ Storage::url($doc) }}" target="_blank" rel="noopener noreferrer">IR a archivo</a>
                       
           
                  
                        @endif

                        



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
      
          


  

  