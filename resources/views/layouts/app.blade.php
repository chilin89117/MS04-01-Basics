<!DOCTYPE html>
<html lang="{{config('app.locale')}}">

  @include('inc.head')

  <body>

    @include('inc.nav')

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">

            @yield('panel-heading')

            <div class="panel-body">

              @yield('content')

            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>

  </body>
</html>
