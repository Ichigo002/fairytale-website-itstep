<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('build/assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('build/assets/css/customlibrary.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('build/assets/css/book.css')}}" rel="stylesheet" type="text/css"/>

    </head>


    <body>
   <div class="container1">
        @include("header_nav")

     <br/>

    <main>
        <a href="{{ route('profile.edit') }}"><div class="grid_elements">
          <img src="{{asset('build/assets/images/book/frontcover.png')}}" alt="Thumbnail"/>
          <h3>Titolo </h3>
          <p>Breve descrizione</p>
        </div></a>
        <a href="{{ route('profile.edit') }}"><div class="grid_elements">
          <img src="{{asset('build/assets/images/book/frontcover.png')}}" alt="Thumbnail"/>
          <h3>Titolo </h3>
          <p>Breve descrizione</p>
        </div></a>
        <a href="{{ route('profile.edit') }}"><div class="grid_elements">
          <img src="{{asset('build/assets/images/book/frontcover.png')}}" alt="Thumbnail"/>
          <h3>Titolo </h3>
          <p>Breve descrizione</p>
        </div></a>
        <a href="{{ route('profile.edit') }}"><div class="grid_elements">
          <img src="{{asset('build/assets/images/book/frontcover.png')}}" alt="Thumbnail"/>
          <h3>Titolo </h3>
          <p>Breve descrizione</p>
        </div></a>

    </main>

    <br/>
    <br/>
    <br/>

    @include('footer')
    </body>
</html>
