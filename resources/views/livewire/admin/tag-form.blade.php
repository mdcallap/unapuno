      
<div >
    

               <div >
                <x-label for="name" >
                  Nombre
                </x-label>
                <x-input wire:model="name" type="text" id="name"  class="w-full"/>
                    @error('name')
                    <h1 class="text-red-500">{{$message}}</h1>
                    @enderror
                </div>

                
               <div class="mt-4" >
                <x-label for="color" >
                  Color
                </x-label>
                <x-input wire:model="color" type="text" id="color"  class="w-full"/>
                    @error('color')
                    <h1 class="text-red-500">{{$message}}</h1>
                    @enderror
                </div>
                
               
            

             
                
  

  
                
</div>
      
          


  

  