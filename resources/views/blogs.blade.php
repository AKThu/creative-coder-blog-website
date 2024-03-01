{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Home</title>
</head>

<body>
    <h1>MyBlogs</h1>
    @foreach ($blogs as $blog)
        <div>
            <h3>
                <a href="/blogs/{{ $blog->slug }}">
                    {{ $blog->title }}
                </a>
            </h3>
            <p>{{ $blog->intro }}</p>
            <div>
                <p>Category - <a href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></p>
                <p>Author - <a href="/authors/{{ $blog->author->name }}">{{ $blog->author->name }}</a></p>
                <p>Uploaded - {{ $blog->updated_at ??= '3mins ago' }}</p>
            </div>
        </div>
    @endforeach

</body>

</html> --}}





<x-layout>
    <x-hero />
    <x-blog-section :blogs="$blogs" :categories="$categories" />
    <x-subscribe />
</x-layout>
