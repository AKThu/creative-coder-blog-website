<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body
      class="font-roboto bg-gradient-to-b from-primary-background via-secondary-background to-primary-background text-white">
    <div class="flex flex-col justify-center items-center p-6">

        {{-- Big Heading --}}
        <h1 class="text-6xl font-thin mb-5 select-none">MyBlogs</h1>

        {{-- Search Section --}}
        <form action="/"
              class="w-3/4 sm:w-1/2 md:w-5/12 lg:w-2/5 2xl:w-[500px] flex flex-row justify-center items-center mb-8 p-1 rounded-md shadow-sm bg-lightblue1">

            {{-- Input area --}}
            <input
                   value="{{ request('search') }}"
                   type="text"
                   name="search"
                   placeholder="search blogs..."
                   class="w-full p-2 rounded-md bg-lightblue1 focus:outline-none focus:bg-lightblue1 placeholder:text-gray-500 select-none text-black">

            {{-- Submit button --}}
            <button type="submit"
                    class="p-2 fill-primary-background hover:fill-white hover:drop-shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="24px" height="24px">
                    <path
                          d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z" />
                </svg>
            </button>

        </form>

        {{-- Current Filter Item --}}
        @if (request('category') || request('author'))
            <p class="select-none mb-5">Filtered by
                <span class="bg-lightblue1 text-black2 px-3 py-1 rounded-full">{{ request('category') }}</span>
                <span class="bg-lightblue1 text-black2 px-3 py-1 rounded-full">{{ request('author') }}</span>
            </p>
        @endif

        {{-- Blogs --}}
        <div class="flex flex-row flex-wrap justify-center gap-10 w-full 2xl:w-[1500px]">
            @foreach ($blogs as $blog)
                {{-- Container for one blog --}}
                <div
                     class="group flex flex-col justify-between bg-tertiary-background hover:bg-lightblue1 text-white hover:text-black2 hover:drop-shadow-md shadow-md rounded-lg w-[300px] h-[400px] py-3 px-5">
                    <a href="/blogs/{{ $blog->slug }}">

                        {{-- Container for Title & Intro --}}
                        <div>
                            <h3 class="text-2xl font-medium">{{ $blog->title }}</h3>
                            <hr class="border-[1px] border-gray-300 group-hover:border-black2 my-2">
                            <p>{{ $blog->intro }}</p>
                        </div>

                        {{-- Container for Category, Author and Uploaded Time --}}
                        <div class="text-sm font-medium leading-8 mt-5">
                            <p>Category -
                                <a
                                   href="/?category={{ $blog->category->slug }}"
                                   class="bg-lightblue1 group-hover:bg-tertiary-background text-black2 group-hover:text-white px-2 py-1 rounded-full">
                                    {{ $blog->category->name }}
                                </a>
                            </p>
                            <p>Author -
                                <a
                                   href="/?author={{ $blog->author->username }}"
                                   class="bg-lightblue1 group-hover:bg-tertiary-background text-black2 group-hover:text-white px-2 py-1 rounded-full">
                                    {{ $blog->author->name }}
                                </a>
                            </p>
                            <p>Uploaded - {{ $blog->updated_at ??= '3mins ago' }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</body>

</html>
