<div>


<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->name}}">
                     
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->user->name}}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">Publicado:</p>
                            <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{$post->created_at}}</time></p>
                        </div>                    

                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$post->title}}</h1>
            </header>
           
            @if ($post->type==1 )
                <embed src="{{asset('storage/'.$post->file)}}" class="w-full h-1/3" type="">

                <br>
                <button onclick="window.open('{{asset('storage/'.$post->file)}}', '_blank');" style="display: block; margin: 0 auto;" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Ver Documento</button>
                <br>
            @else
            <figure class="mb-5"><img src="{{asset('storage/'.$post->file)}}" alt="">
            
            </figure>
            @endif
            
            <!--<h2>Contenido:</h2>-->
            <p>{{$post->content}}
            </p>
        </article>
    </div>
  </main>
  
  <aside aria-label="Related articles" class="py-8  bg-gray-50 dark:bg-gray-800">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Más Publicaciones</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">

            @foreach ($posts as $item)
                <article class="max-w-xs">
                    <a href="{{route('web.show.post',$item->id)}}">
                             
                        @if ($item->type==1 )
                        <img src="https://cdn-icons-png.flaticon.com/512/1760/1760560.png" class="mb-5 rounded-lg h-56 max-w-full object-contain" alt="Image 1">
                        @else
                        <img src="{{asset('storage/'.$item->file)}}" class="mb-5 rounded-lg h-56 max-w-full object-contain" alt="Image 1">
                        @endif
                        
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
