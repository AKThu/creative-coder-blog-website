<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Home</title>
    <style>
        .main-header {
            text-align: center;
        }

        .blog-title a {
            text-decoration: none;
            font-size: 1.5rem;
        }

        .blog-container {
            background-color: antiquewhite;
            padding: 4px 20px;
            margin: 20px 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <h1 class="main-header">My blogs</h1>
    @foreach ($blogs as $blog)
        <div class="blog-container">
            <h3 class="blog-title">
                <a href="/blogs/{{ $blog->slug }}">
                    {{ $blog->title }}
                </a>
            </h3>
            <div class="blog-body">
                <p class="blog-intro">{{ $blog->intro }}</p>
                <small>
                    <p>Category - <a href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></p>
                    <p>Author - <a href="/authors/{{ $blog->user->name }}">{{ $blog->user->name }}</a></p>
                    <p>Uploaded - {{ $blog->updated_at ??= '3mins ago' }}</p>
                </small>
            </div>
        </div>
    @endforeach

</body>

</html>
