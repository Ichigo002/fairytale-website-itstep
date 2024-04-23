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
   <div class="container1">
          @include("header_nav")
   </div>

   <main>
   <form id="imageForm" action="{{ route('library.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <x-text-input id="title" class="block mt-1 w-full" type="title" name="title" required autofocus />
        <label for="desc">Short description:</label>
        <textarea id="desc" name="desc" rows="3" cols="30"></textarea>
        <label for="fileup">Choose many images with names s0, s1, s2 etc. s0 == cover page</label>
        <input type="file" id="fileup" name="fileup" multiple/>
    <button type="submit">Upload Images and create book.</button>
</form>

   </form>

   </main>

    @include("footer")
    </body>
</html>
