      
<div >

  <div class="mb-4" >
    <x-label for="name" >
      Descripción:
    </x-label>
    <x-input wire:model="description" type="text" id="description"  class="w-full"/>
        @error('description')
        <h1 class="text-red-500">{{$message}}</h1>
        @enderror
    </div>


    
    <div class="mb-4" >
      <x-label for="url" class="mb-2" >
        Url:
      </x-label>
      <textarea wire:model="url" id="url" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Insertar vídeo..."></textarea>
          @error('url')
          <h1 class="text-red-500">{{$message}}</h1>
          @enderror
      </div>
    


    


             
                
  

  
                
</div>
      
          


  

  