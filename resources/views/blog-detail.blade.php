<x-layout>

    <div class="flex flex-col items-center min-h-screen p-6">
        <div class="w-full md:w-4/5 lg:w-3/5 2xl:w-2/5">
            <!-- Blog cover -->
            <img src="/assets/images/blog-cover.jpg" alt="blog-cover" />

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
            <x-comments :$blog />
        </div>
    </div>

</x-layout>
