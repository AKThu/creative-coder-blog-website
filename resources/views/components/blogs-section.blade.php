@props(['blogs', 'categories'])
<div class="flex flex-col justify-center items-center p-6"
     id="blogs">

    {{-- Search Section --}}
    <x-search-section />

    {{-- Filter Section --}}
    <x-dropdown-buttons :$categories />

    {{-- Blogs --}}
    <div
         class="flex flex-row flex-wrap justify-center gap-10 w-full 3xl:w-[2000px] 2xl:w-[1500px] xl:w-[1000px] lg:w-screen">
        @foreach ($blogs as $blog)
            <x-blog-card :$blog />
        @endforeach
    </div>

</div>
