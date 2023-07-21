<p class="text-3xl text-center">Our Latest Blogs!</p>

<div class="container mx-auto p-10">
    <ul class="grid grid-cols-1 gap-1 sm:grid-cols-2 md:grid-cols-3 md:gap-8">
        @foreach($posts as $post)
      <li class="bg-white dark:bg-gray-800 rounded-lg shadow-xl">
          <a href="{{ route('posts.show', $post->slug) }}" class="group max-w-sm mx-auto overflow-hidden bg-white rounded-lg hover:shadow-lg dark:bg-gray-800 hover:bg-gray-200 transition duration-500 ease-in-out">
            <img
            class="object-cover object-center w-full h-44 opacity-90 rounded-lg group-hover:opacity-100 transition duration-500 ease-in-out"
             src="{{ asset('storage/photos/'. $post->image) }}" alt="avatar">

             <div class="mt-2">
            <div class="flex items-center px-3 py-3 bg-gray-900 rounded-lg rounded-b-none">
                <h1 class="mx-3 text-lg font-semibold text-white group-hover:text-yellow-400">read more</h1>
                <svg class="w-3.5 h-3.5 ml-1 text-white fill-current group-hover:text-yellow-400" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
               

                
            </div>

            <div class="px-6 py-4 group-hover:bg-gray-200 dark:group-hover:bg-gray-700 rounded-lg transition duration-500 ease-in-out">
                <h1 class="text-xl font-semibold text-gray-800 dark:text-white transition duration-500 ease-in-out dark:group-hover:text-blue-200">{{ $post->title }}</h1>

                <p class="py-2 text-gray-700 dark:text-gray-400">
                   {{ Str::limit($post->body, 90)}}
                </p>
            </div>
             </div>
          </a>
    </li>
    @endforeach
    </ul>
  </div>