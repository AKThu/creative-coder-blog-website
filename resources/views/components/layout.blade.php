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
      class="font-roboto bg-gradient-to-b from-primary-background via-secondary-background to-primary-background text-white min-h-screen">

    <x-nav />

    {{ $slot }}

    <x-footer />

    <script src="/js/scripts.js"></script>
</body>

</html>
