      
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
                <x-label for="email" >
                  Email
                </x-label>
                <x-input wire:model="email" type="email" id="email"  class="w-full"/>
                    @error('email')
                    <h1 class="text-red-500">{{$message}}</h1>
                    @enderror
                </div>

                <div class="mt-4" >
                  <x-label for="password" >
                    Contraseña
                  </x-label>
                  <x-input wire:model="password" type="password" id="password"  class="w-full"/>
                      @error('password')
                      <h1 class="text-red-500">{{$message}}</h1>
                      @enderror
                  </div>
  
                
               
            

             
                
  

  
                
</div>
      
          


  

  