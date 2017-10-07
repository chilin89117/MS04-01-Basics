<!DOCTYPE html>
<html lang="{{config('app.locale')}}">

  @include('inc.head')

  <body>

    @include('inc.nav')

    @yield('content')

    @include('inc.scripts')

    @yield('custom_scripts')

  </body>
</html>
