<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Reno</title>
</head>

<body>
    @include('particle.header');
   @yield('container')
   @include('particle.sidebar');
   @include('particle.footer');
</body>

</html>