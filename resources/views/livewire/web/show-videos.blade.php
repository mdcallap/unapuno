<div>


   
      
    <aside aria-label="Related articles" class="py-8  bg-gray-50 dark:bg-gray-800">
      <div class="px-4 mx-auto max-w-screen-xl">
          <h2 class="mb-8 text-2xl font-bold text-gray-900 text-center  dark:text-white">Todos los Videos:</h2>
          <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
  
              @foreach ($videos as $item)
                  <article class="">
                    {!!$item->url!!}
                      <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                          <a href="">{{$item->description}}</a>
                      </h2>
                      
                      <a href="" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                         {{$item->created_at}}
                      </a>
                  </article>
              @endforeach
           
          
          </div>
      </div>
    </aside>
    
    
  
  </div>
  