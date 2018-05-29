<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ERDMAN PRIVATE Jets</title>


	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="icon" type="image/png" href="favicon.png" />
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <script src="//maps.google.ru/maps/api/js?key=AIzaSyAXXZZwXMG5yNxFHN7yR4GYJgSe9cKKl7o&libraries=places&language=ru"></script>
</head>
<body>
    <div id='app'>
        @include('blocks.header')
        @include('blocks.last-flights')
        @include('blocks.aviapark')
        @include('blocks.destinations')
        @include('blocks.services')
        @include('blocks.contacts')
        @include('blocks.footer')
    </div>
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
