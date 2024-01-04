<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('acceuil.css')}}">
</head>
<body>
    {{-- debut heder --}}
@include('header')

    {{-- fin header --}}


{{-- debut contenu --}}
@yield('corps')
@yield('access')
@yield('ordi')
@yield('smart')
@yield('propos')
@yield('contact')
@yield('compte')
@yield('connexion')
@yield('achete')
@yield('panier')
{{-- fin contenu --}}



{{-- debut footer --}}

@include('footer')
{{-- fin footer --}}


    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>