<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Blog details</title>
    <style>
        body {
            font-family: monospace;
            background-color: #fafafa;
            color: #121212;
        }

        .blog-body {
            white-space: pre-wrap;
        }
    </style>
</head>

<body>
    <h1>{{ $blog->title }}</h1>
    <p class="blog-body">{{ $blog->body }}</p>
    <small>{{ $blog->uploaded_time }}</small>
    <p>
        <a href="/"> >See all Blogs< </a>
    </p>
</body>

</html>
