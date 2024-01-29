      
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
    <x-label for="file" class="mb-2" >
      Imagen Adjunto:
    </x-label>


  
    <input wire:model="image" wire:key="{{$imagekey}}" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
    
    @error('image')
        <h1 class="text-red-500">{{$message}}</h1>
        @enderror
    </div>

    <x-label for="image" class="mb-2" >
      Vista Previa:
    </x-label>
    @if ($image) 
    <img src="{{ $image->temporaryUrl() }}">

    
    @endif


             
                
  

  
                
</div>
      
          


  

  