<div>


   
      
    <aside aria-label="Related articles" class="py-8  bg-gray-50 dark:bg-gray-800">
      <div class="px-4 mx-auto max-w-screen-xl">
          <h2 class="mb-8 text-2xl font-bold text-gray-900 text-center  dark:text-white">Todos la Galeria:</h2>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($chunks as $item)
                <div class="grid gap-4">
                    @foreach ($item as $elemento)
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="{{ asset('storage/' . $elemento->image) }}" alt="">
                        </div>
                     @endforeach
                </div>
            @endforeach
            
        </div>
      </div>
    </aside>
    
    
  
  </div>
  