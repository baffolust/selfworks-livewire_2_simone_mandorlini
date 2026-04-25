<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/css/app.js'])

    <title>{{$title}}</title>
</head>

<body>

    <x-navbar />

    <x-masthead title="{{$title}}"/>

    {{$slot}}

</body>

</html>
