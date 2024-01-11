      
<div >

  <div class="mb-4" >

    <x-label class="block text-sm font-medium text-gray-700 mb-2">Familias: </x-label>

              <select  wire:model.live="subcategory.family_id" class="w-full border-gray-300 mr-2 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                  <option value="" disabled>Seleccione...</option>
                  @foreach ($families as $item)
                    <option value="{{$item->id}}">{{$item->name}} </option>
                
                    @endforeach
                                              
              </select> 
              
              @error('subcategory.family_id')
                  <h1 class="text-red-500">{{$message}}</h1>
            @enderror
    </div>

    <div class="mb-4" >

      <x-label class="block text-sm font-medium text-gray-700 mb-2">Categoria  </x-label>

                <select  wire:model.live="subcategory.category_id" class="w-full border-gray-300 mr-2 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    <option value="" disabled>Seleccione...</option>
                    @foreach ($this->categories as $item)
                      <option value="{{$item->id}}">{{$item->name}} </option>
                  
                      @endforeach
                                                
                </select> 
                @dump($subcategory)
                
                @error('subcategory.category_id')
                    <h1 class="text-red-500">{{$message}}</h1>
              @enderror
      </div>

       <div >
        <x-label for="name" class="mb-2" >
          Nombre
        </x-label>
        <x-input wire:model="subcategory.name" type="text" id="name"  class="w-full"/>
            @error('subcategory.name')
            <h1 class="text-red-500">{{$message}}</h1>
            @enderror
        </div>
        
       
    

     
        

@dump($this->categories)

        
</div>

  




