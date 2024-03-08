{{-- Dropdown button --}}
<div class="relative inline-block text-left mb-5">

    {{-- Button --}}
    <div>
        <button type="button"
                class="group inline-flex justify-center gap-x-1.5 rounded-md bg-primary-background px-3 py-2 text-sm text-white hover:text-primary-background shadow-sm ring-1 ring-inset ring-lightblue1 hover:bg-lightblue1"
                id="menu-button-categories" aria-expanded="true" aria-haspopup="true">
            {{ request('category') ? $categories->firstWhere('slug', request('category'))->name : 'Categories' }}
            <svg class="-mr-1 h-5 w-5 fill-white group-hover:fill-primary-background" viewBox="0 0 20 20"
                 fill="currentColor"
                 aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                      clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    {{-- Category list --}}
    {{-- Hidden on default. Visible on clicking Button --}}
    <div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-primary-background shadow-lg ring-1 ring-lightblue1 ring-opacity-25 focus:outline-none"
         style="visibility: hidden"
         id="menu-categories"
         role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
        <div class="py-1" role="none">
            <a href="/?{{ $otherUrlParameters }}"
               class="text-white hover:text-primary-background block px-4 py-2 text-sm hover:bg-lightblue1"
               role="menuitem"
               tabindex="-1"
               id="menu-item-0">All categories</a>
            @foreach ($categories as $category)
                <a href="/?category={{ $category->slug }}{{ $otherUrlParameters }}"
                   class="text-white hover:text-primary-background block px-4 py-2 text-sm hover:bg-lightblue1"
                   role="menuitem"
                   tabindex="-1"
                   id="menu-item-0">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>

</div>
