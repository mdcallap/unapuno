<section class="text-gray-600 body-font relative">
    <h2 class="mb-8 text-2xl font-bold text-gray-900 text-center mt-7  dark:text-white">Contáctanos</h2>
    <div class="container px-5 mx-auto flex sm:flex-nowrap flex-wrap">
        
      <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9129.824991349482!2d-70.01796755140475!3d-15.824054754958897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915d69babb63e6cf%3A0xf24057bf79de0852!2sUniversidad%20Nacional%20del%20Altiplano%20Puno!5e0!3m2!1ses!2spe!4v1706623411546!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9129.824991349482!2d-70.01796755140475!3d-15.824054754958897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915d69babb63e6cf%3A0xf24057bf79de0852!2sUniversidad%20Nacional%20del%20Altiplano%20Puno!5e0!3m2!1ses!2spe!4v1706623411546!5m2!1ses!2spe" style="filter: contrast(1.2) opacity(0.4);"></iframe>
        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">DIRECCIÓN</h2>
            <p class="mt-1">Universidad Nacional del Altiplano - Sub Unidad de Seguridad y Salud en el Trabajo</p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
            <a class="text-indigo-500 leading-relaxed">eaguilar@unap.edu.pe</a>
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">TELEFONO</h2>
            <p class="leading-relaxed">950 900 038 - 941 856 637</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full p-5">

        @if (session('status'))

        <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
              
                Gracias Por contactarnos, nos pondremos en contacto pronto.
            </div>
          
          </div>
 

        
        @endif

        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contactanos</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Dejanos un mensaje y te responderemos pronto.</p>
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-600">Nombre</label>
          <input wire:model="name" type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('name')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                
            @enderror
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
          <input wire:model="email" type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          @error('email')
          <span class="text-red-500 text-xs italic">{{ $message }}</span>
          
      @enderror
        </div>
        <div class="relative mb-4">
            <label for="phone" class="leading-7 text-sm text-gray-600">Telefono</label>
            <input wire:model="phone" type="number" id="phone" name="phone" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('phone')
          <span class="text-red-500 text-xs italic">{{ $message }}</span>
          
      @enderror 
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Mensaje</label>
          <textarea wire:model="message" id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            @error('message')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror   
        </div>
        <button  wire:click="send" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Enviar mensaje</button>
        <p class="text-xs text-gray-500 mt-3">No realice  spam y evite banneos</p>
      </div>
    </div>
  </section>