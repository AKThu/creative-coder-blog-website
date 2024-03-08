@props(['blog'])
{{-- Container for one blog --}}

<div
     class="group flex flex-col justify-between bg-primary-background ring-1 hover:ring ring-lightblue1 text-white hover:drop-shadow-lg-blue rounded-lg w-full sm:w-3/5 lg:w-2/5 xl:w-1/4 min-h-fit py-6 px-6">

    {{-- Container for Blog cover, Title & Intro --}}
    <div>
        <!-- Blog cover -->
        <img src="/assets/images/blog-cover.jpg" alt="blog-cover" />

        <!-- Blog title -->
        <h3 class="text-2xl font-medium my-2">{{ $blog->title }}</h3>

        <div class="flex flex-row justify-between text-sm text-gray-500">
            <!-- Author -->
            <a href="/?author={{ $blog->author->username }}{{ request('category') ? '&category=' . request('category') : '' }}"
               class="hover:text-gray-300">
                {{ $blog->author->name }}
            </a>
            <!-- Uploaded time -->
            <p>
                {{ $blog->updated_at->diffForHumans() }}
            </p>
        </div>

        <!-- just a line -->
        <hr class="border border-lightblue1 my-2">

        <!-- Blog intro -->
        <p>{{ $blog->intro }}</p>
    </div>

    {{-- Container for Category, Author and Uploaded Time --}}
    <div class="flex flex-col justify-between text-sm font-medium leading-8 mt-3">
        <!-- Category -->
        <p class="mb-3">
            <a
               href="/?category={{ $blog->category->slug }}"
               class="bg-yellow-400 hover:bg-yellow-500 text-gray-700 hover:text-white px-2 py-1 rounded-full">
                {{ $blog->category->name }}
            </a>
        </p>

        <a href="/blogs/{{ $blog->slug }}"
           class="block w-full bg-primary-background hover:bg-lightblue1 text-white hover:text-gray-700 ring-1 ring-lightblue1 text-center py-1 rounded-lg">
            Read More
        </a>
    </div>
</div>
