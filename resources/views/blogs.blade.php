<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Home</title>
    <style>
        body {
            font-family: monospace;
            background-color: #fafafa;
            color: #121212;
        }

        a,
        a:link,
        a:visited {
            text-decoration: none;
            color: #121212;
        }

        a:hover {
            color: skyblue;
        }

        .main-header {
            text-align: center;
            font-size: 2.5rem;
        }

        .blog-title a {
            text-decoration: none;
            font-size: 2rem;
        }

        .blog-container {
            background-color: #eaeaea;
            padding: 4px 20px;
            margin: 20px 40px;
            border-radius: 10px;
        }

        .blog-container:hover {
            box-shadow: 4px 4px 4px gray;
            background-color: #cacaca;
            margin: 20px 20px;
        }

        .blog-intro {
            font-size: 1rem;
        }

        .blog-info-container {
            font-size: smaller;
        }

        p .category {
            background-color: rgb(214, 88, 88);
            color: #fafafa;
            padding: 4px 6px;
            border-radius: 10px;
        }

        p .category:hover {
            box-shadow: 2px 2px 3px gray;
        }
    </style>
</head>

<body>
    <h1 class="main-header">MyBlogs</h1>
    @foreach ($blogs as $blog)
        <div class="blog-container">
            <h3 class="blog-title">
                <a href="/blogs/{{ $blog->slug }}">
                    {{ $blog->title }}
                </a>
            </h3>
            <p class="blog-intro">{{ $blog->intro }}</p>
            <div class="blog-info-container">
                <p>Category - <a href="/categories/{{ $blog->category->slug }}"
                       class="category">{{ $blog->category->name }}</a></p>
                <p>Author - <a href="/authors/{{ $blog->author->name }}">{{ $blog->author->name }}</a></p>
                <p>Uploaded - {{ $blog->updated_at ??= '3mins ago' }}</p>
            </div>
        </div>
    @endforeach

</body>

</html>
