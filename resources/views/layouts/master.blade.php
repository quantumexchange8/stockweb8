<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulting - Business, Finance and Professional Services HTML 5 Template</title>
    <!-- fav icon -->
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- animated-css -->
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css">
    <!-- font-awesome-css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- owl-carrosel-css -->
    <link href="assets/owl-carrosel/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="assets/owl-carrosel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="assets/css/revolution/layers.css">
    <link rel="stylesheet" href="assets/css/revolution/navigation.css">
    <link rel="stylesheet" href="assets/css/revolution/settings.css">
    <!-- Revulation Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/rs/css/settings.css" media="screen" />
    <!-- offcanvas-menu-css -->
    <link href="assets/css/offcanvas-menu.css" rel="stylesheet" type="text/css">
    <!-- style-css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="@yield('body-class')">
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

    <!-- Scripts -->
    @include('layouts.partials.script')
</body>

</html>