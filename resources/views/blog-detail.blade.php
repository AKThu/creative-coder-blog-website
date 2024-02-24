<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Blog details</title>
    @vite('resources/css/app.css')
</head>

<body
      class="font-roboto bg-gradient-to-b from-primary-background via-tertiary-background to-secondary-background text-white">
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
                           class="bg-lightblue1 text-black2 px-2 py-1 rounded-full">
                            {{ $blog->category->name }}
                        </a>
                    </p>
                    <p>Author -
                        <a
                           href="/?author={{ $blog->author->username }}"
                           class="bg-lightblue1 text-black2 px-2 py-1 rounded-full">
                            {{ $blog->author->name }}
                        </a>
                    </p>
                </div>
            </div>

            {{-- See all Blogs Button --}}
            <a href="/">
                <p
                   class="bg-lightblue1 hover:bg-blue1 hover:drop-shadow-md rounded-md p-2 text-center text-black2 hover:text-white font-bold select-none">
                    > See all Blogs <
                      </p>
            </a>
        </div>
    </div>
</body>

</html>
