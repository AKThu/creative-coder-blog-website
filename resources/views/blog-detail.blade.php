<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Blog details</title>
</head>

<body>
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->body }}</p>
    <small>{{ $blog->uploaded_time }}</small>
    <p>
        <a href="/"> >See all Blogs< </a>
    </p>
</body>

</html>
