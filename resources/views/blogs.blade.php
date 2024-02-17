<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Home</title>
</head>

<body class="blue">
    <h1>My blogs</h1>
    @foreach ($blogs as $blog)
        <h3>
            <a href="/blogs/{{ $blog->slug }}">
                {{ $blog->title }}
            </a>
        </h3>
        <p>{{ $blog->intro }}</p>
        <p><small>Category - <a href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></small>
        </p>
        <p><a href=""><small>Uploaded - {{ $blog->updated_at ??= '3mins ago' }} </small></a></p>
    @endforeach

</body>

</html>
