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
        <link href="{{asset('build/assets/css/customlibrary.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('build/assets/css/book.css')}}" rel="stylesheet" type="text/css"/>

    </head>


    <body>
   <div class="container1">
     <header>
      <div class="logo">
       <img class="logo-img" src="{{asset('build/assets/images/book/frontcover.png')}}"/>
      </div>
      <div class="menu-bar">
       <p class="menu-items">Registrazione</p>
       <p class="menu-items">Libri</p>
       <p class="menu-items">Negozio</p>
       <p class="menu-items"><a href="{{ route('profile.edit') }}">{{ __('Profilo') }}</a></p>
      </div>
     </header>

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

    <footer>
      <div class="footer_items">
        <h3>Infromatzione</h3>
      </div>
      <div class="footer_items">
        <h3>Link veloci</h3>
      </div>
      <div class="footer_items">
        <h3>ultime voci</h3>
      </div>
    </footer>
      <div class="lower_footer">
        <p>Kacper i Wiktor inc. - Copyright Claim</p>
      </div>
    </body>
</html>
