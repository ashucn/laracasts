<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.min.css">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
       
    </head>
    <body>
        <div id="app">

            <section class="hero is-primary is-medium">
                @include('layouts.header')

              <!-- Hero content: will be in the middle -->
              <div class="hero-body">
                <div class="container has-text-centered">
                </div>
              </div>
              <!-- Hero footer: will stick at the bottom -->
              <div class="hero-foot">
                @include('layouts.nav')
              </div>
            </section>

          <section>
              <div class="container">
              <router-view></router-view>
              </div>
          </section>
        </div>
            
        <script src="/js/app.js"></script>
    </body>
</html>
