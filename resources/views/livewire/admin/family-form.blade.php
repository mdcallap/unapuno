      
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
                
               
            

             
                
  

  
                
</div>
      
          


  

  