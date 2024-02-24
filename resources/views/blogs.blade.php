<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Home</title>
</head>

<body>
    <h1>MyBlogs</h1>
    <form action="/">
        <input
               value="{{ request('search') }}"
               type="text"
               name="search"
               placeholder="search blogs...">
        <button type="submit">Search</button>
    </form>
    @foreach ($blogs as $blog)
        <div>
            <h3>
                <a href="/blogs/{{ $blog->slug }}">
                    {{ $blog->title }}
                </a>
            </h3>
            <p>{{ $blog->intro }}</p>
            <div>
                <p>Category - <a href="/?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a></p>
                <p>Author - <a href="/?author={{ $blog->author->username }}">{{ $blog->author->name }}</a></p>
                <p>Uploaded - {{ $blog->updated_at ??= '3mins ago' }}</p>
            </div>
        </div>
    @endforeach

</body>

</html>
