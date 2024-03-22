@props(['blogs'])
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
         class="flex flex-row flex-wrap justify-center gap-10 mt-10 w-full 3xl:w-[2000px] 2xl:w-[1400px] lg:w-[98vw]">
        @forelse ($blogs as $blog)
            <x-blog-card :$blog />
        @empty
            <x-no-result />
        @endforelse
    </div>

    <div class="mt-10">
        {{ $blogs->links() }}
    </div>
</div>
