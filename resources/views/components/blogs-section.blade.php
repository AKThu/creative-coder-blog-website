@props(['blogs', 'categories'])
<div class="flex flex-col justify-center items-center p-6"
     id="blogs">

    {{-- Search Section --}}
    <x-search-section />

    {{-- Filter Section --}}
    <div class="flex flex-row gap-x-5">
        <x-dropdown-categories />
        <x-dropdown-authors />
    </div>


    {{-- Blogs --}}
    <div
         class="flex flex-row flex-wrap justify-center gap-10 mt-10 w-full 3xl:w-[2000px] 2xl:w-[1500px] xl:w-screen lg:w-screen">
        @foreach ($blogs as $blog)
            <x-blog-card :$blog />
        @endforeach
    </div>

    <div class="mt-10">
        {{ $blogs->links() }}
    </div>
</div>
