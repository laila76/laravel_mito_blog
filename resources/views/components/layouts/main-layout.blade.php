@props(['title'])
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Mito | {{ $title }} </title>
    <!-- import tailwind -->
    @vite('resources/css/app.css')

</head>

<body>
    @include('partials._navbar')
    @include('partials._session')
    {{ $slot }}
</body>

</html>
