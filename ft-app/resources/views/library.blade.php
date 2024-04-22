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
        <link href="{{asset('build/assets/css/book.css')}}" rel="stylesheet" type="text/css"/>

    </head>


    <body>
    <img class="container1-img" src="{{asset('build/assets/images/view.jpg')}}"/>
   <div class="container1">
     <header>
      <div class="logo">
       <img class="logo-img" src="{{asset('build/assets/images/Thumbnail.png')}}"/>
      </div>
      <div class="menu-bar">
       <p class="menu-items">Registrazione</p>
       <p class="menu-items">Libri</p>
       <p class="menu-items">Negozio</p>
       <p class="menu-items"><a href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></p>
      </div>
     </header>
     <div class="LowerHeader">
        <p>BIBLA librarsh kjfshkjf</p>
     </div>
   </div>

      <br/>
      <br/>

    <main> <p class="ultimo_libro">ultimo libro</p>

      <br/>

<div class="book">  <!--Flipbook-->
  <div class="page">
    <div class="front cover" style="background: radial-gradient(circle farthest-corner at 80% 20%, hsl(150 80% 20% / .3) 0%, hsl(170 60% 10% / .1) 100%),
    hsl(231, 32%, 29%) url('{{asset('build/assets/images/book/frontcover.png')}}') 50% / cover;">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s1.jpg" alt="Img 1"/>
    </div>
  </div>
  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s2.jpg" alt="Img 1"/>
    </div>
    <div class="back">
      <img src="build/assets/images/book/s3.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s4.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s5.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s6.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s7.jpg" alt="Img 1">
    </div>
  </div>
  
  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s8.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s9.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s10.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s11.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s12.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s13.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s14.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s15.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s16.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s17.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s18.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s19.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s20.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s21.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s22.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s23.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s24.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s25.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s26.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s27.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s28.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s29.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s30.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s31.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s32.jpg" alt="Img 1">
    </div>
    <div class="back">
      <img src="build/assets/images/book/s33.jpg" alt="Img 1">
    </div>
  </div>

  <div class="page">
    <div class="front">
      <img src="build/assets/images/book/s34.jpg" alt="Img 2">
    </div>
    <div class="back cover" style="background: radial-gradient(circle farthest-corner at 80% 20%, hsl(150 80% 20% / .3) 0%, hsl(170 60% 10% / .1) 100%),
    hsl(231, 32%, 29%) url('{{asset('build/assets/images/book/backcover.jpg')}}') 50% / cover;">
      <h3></h3>
      <p><br>
      <br><br>
      <br></p>
    </div>
  </div>
</div>
</div> <script src="{{ URL::asset('build/assets/js/book.js') }}" type="text/javascript"></script>

    </main>

    <br/>
    <br/>
    <br/>

    <footer>
      <div class="footer_items">
        <h3>Infromatzione</h3>
      </div>
      <div class="footer_items">
        <h3>szybkie linki</h3>
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
