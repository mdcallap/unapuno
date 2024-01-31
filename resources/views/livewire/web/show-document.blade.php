<div class="text-justify">


   
      
      <aside aria-label="Related articles" class="py-8  bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 text-center  dark:text-white">Mas Documentos para : {{$area->name}}</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
    
                @foreach ($document as $item)
                    <article class="max-w-xs">
                        <a href="{{route('web.show.post',$item->id)}}">
                            <img src="https://cdn-icons-png.flaticon.com/512/1760/1760560.png" class="mb-5 rounded-lg h-56 max-w-full object-contain" alt="Image 1">
                        </a>
                        <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                            <a href="{{route('web.show.post',$item->id)}}">{{$item->title}}</a>
                        </h2>
                        <p class="mb-4 text-gray-500 dark:text-gray-400">{{ Str::limit($item->content, 120, '...')}}</p>
                        <a href="{{route('web.show.post',$item->id)}}" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                           {{$item->created_at}}
                        </a>
                    </article>
                @endforeach
             
            
            </div>
        </div>
      </aside>
      
      
    
    </div>
    