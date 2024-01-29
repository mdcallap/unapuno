      
<div >

  
              <div class="mb-4"  >
                <x-label for="name" >
                  Nombre
                </x-label>
                <x-input disabled wire:model="name" type="text" id="name"  class="w-full"/>
                    @error('name')
                    <h1 class="text-red-500">{{$message}}</h1>
                    @enderror
                </div>

                <div class="mb-4"  >
                  <x-label for="phone" >
                    Telefono
                  </x-label>
                  <x-input disabled wire:model="phone" type="text" id="phone"  class="w-full"/>
                      @error('phone')
                      <h1 class="text-red-500">{{$message}}</h1>
                      @enderror
                  </div>

                  <div class="mb-4"  >
                    <x-label for="email" >
                      Email
                    </x-label>
                    <x-input disabled wire:model="email" type="text" id="email"  class="w-full"/>
                        @error('email')
                        <h1 class="text-red-500">{{$message}}</h1>
                        @enderror
                    </div>


    

                


                  <div class="mb-4" >
                    <x-label for="message" class="mb-2" >
                      Mensaje:
                    </x-label>
                    <textarea disabled wire:model="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Escribe la Descipcion..."></textarea>
                        @error('message')
                        <h1 class="text-red-500">{{$message}}</h1>
                        @enderror
                    </div>

                  


                 
                
  

  
                
</div>
      
          


  

  