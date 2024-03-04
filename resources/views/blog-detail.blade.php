<x-layout>
    <div class="flex flex-row justify-center items-center">
        <div class="felx flex-col justify-center items-center min-h-screen p-6 w-full md:w-3/4 lg:w-4/5 2xl:w-[1200px]">
            {{-- Blog Title --}}
            <h1 class="text-6xl text-white font-thin select-none mb-5">{{ $blog->title }}</h1>

            {{-- Blog Body --}}
            <div class="mb-5 selection:bg-lightblue1 selection:text-black2">
                <p>{{ $blog->body }}</p>
                <div class="flex flex-col sm:flex-row justify-between text-sm font-medium leading-8 mt-5">
                    <p>Category -
                        <a
                           href="/?category={{ $blog->category->slug }}"
                           class="bg-yellow-400 hover:bg-yello-500 text-gray-700 hover:text-white px-2 py-1 rounded-full">
                            {{ $blog->category->name }}
                        </a>
                    </p>
                    <p>Author -
                        <a
                           href="/?author={{ $blog->author->username }}"
                           class="text-white px-2 py-1 rounded-full">
                            {{ $blog->author->name }}
                        </a>
                    </p>
                </div>
            </div>

            {{-- See all Blogs Button --}}
            <a href="/">
                <p
                   class="bg-primary-background hover:bg-lightblue1 ring-1 ring-lightblue1 text-white hover:text-gray-700 hover:drop-shadow-lg-blue rounded-md p-2 text-center font-bold select-none">

                    > See all Blogs <
                      </p>
            </a>
        </div>
    </div>

</x-layout>
