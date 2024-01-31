      
<div >

              <div class="mb-4" >

                <x-label class="block text-sm font-medium text-gray-700 mb-2">Área: </x-label>

                          <select  wire:model="family_id"class="w-full border-gray-300 mr-2 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                              <option value="" selected>Seleccione...</option>
                              @foreach ($family as $item)
                                <option value="{{$item->id}}"  {{$item->checked==1 ? 'disabled': ''}}>{{$item->name}} </option>
                            
                                @endforeach
                                                          
                          </select> 
                          
                          @error('family_id')
                              <h1 class="text-red-500">{{$message}}</h1>
                        @enderror
                </div>

               <div >
                <x-label for="name" class="mb-2" >
                  Nombre
                </x-label>
                <x-input wire:model="name" type="text" id="name"  class="w-full"/>
                    @error('name')
                    <h1 class="text-red-500">{{$message}}</h1>
                    @enderror
                </div>
                
               
            

             
                
  

  
                
</div>
      
          


  

  