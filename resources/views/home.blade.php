@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Home</div>

        <div class="panel-body">
          <section>
            <h3>Part 1 - Introduction</h3>
            <p><a href="{{url('/lec24')}}">24. Method/Compute/Watch</a></p>
            <p><a href="{{url('/lec28')}}">28. Dynamic CSS</a></p>
            <p><a href="{{url('/lec29')}}">29. Dynamic CSS 2</a></p>
            <p><a href="{{url('/lec43')}}">43. If/For</a></p>
            <p><a href="{{url('/exercise3')}}">Exercise 3</a></p>
            <p><a href="{{url('/exercise4')}}">Exercise 4</a></p>
            <p><a href="{{url('/exercise5')}}">Exercise 5</a></p>
          </section>

          <section>
            <h3>Part 2 - Vue Instance</h3>
            <p><a href="{{url('/lec68')}}">68. Vue Instance 1</a></p>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
