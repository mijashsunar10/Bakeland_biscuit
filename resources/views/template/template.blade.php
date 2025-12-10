<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.Name','Laravel') }}</title>
     <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <!-- Styles -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
     <style>
      /* Ensure active color overrides other states */
    [data-active] {
      color: #D4A76A !important;
    }
        .no-top-margin {
    margin-top: 0 !important;
}


            /* testimonials */
              /* Card Flip Styles */
              .card-flip {
                  perspective: 1000px;
              }

              .card-inner {
                  position: relative;
                  width: 100%;
                  height: 100%;
                  transition: transform 0.7s;
                  transform-style: preserve-3d;
              }

              .card-flip:hover .card-inner {
                  transform: rotateY(180deg);
              }

              .card-front, .card-back {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  backface-visibility: hidden;
              }

              .card-back {
                  transform: rotateY(180deg);
              }
            /* testimonials */
            html {
    scroll-behavior: smooth;
}

 h1, h2, h3 {
        font-family: 'Playfair Display', serif;
    }
     </style>
     
</head>
<body class="min-h-screen flex flex-col">
    {{-- @php
        $headerCourses = App\Models\Course::all(); // Fetch all courses for the header
    @endphp --}}
{{-- <section id="header">
    @include('layouts.header',['courses' => $headerCourses])
  </section> --}}

<section id="header">
    @include('layouts.header')
  </section>
  <section id="pagecontent" >
    @yield('pagecontent')
  </section>
  <section id="footer">
    @include('layouts.footer')
  </section>
</body>
</html>