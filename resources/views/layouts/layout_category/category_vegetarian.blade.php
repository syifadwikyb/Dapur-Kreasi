<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('asset/headerico.png') }}">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-white font-jaldi">
    <x-header class="absolute top-0 z-10"></x-header>
    <x-category.content_category_vegetarian :dataRecipes="$data"></x-category.content_category_vegetarian>
    <x-footer class="absolute bottom-0"></x-footer>
</body>

</html>