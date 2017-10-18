@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">Home</div>
@endsection

@section('content')
<section>
  <h3>Part 1 - Introduction</h3>
  <p><a href="{{url('/lec24')}}">24. Method/Compute/Watch</a></p>
  <p><a href="{{url('/lec28')}}">28. Dynamic CSS</a></p>
  <p><a href="{{url('/lec29')}}">29. Dynamic CSS 2</a></p>
  <p><a href="{{url('/lec43')}}">43. "v-if" and "v-for"</a></p>
  <p><a href="{{url('/module/Exercise3')}}">Exercise 3</a></p>
  <p><a href="{{url('/module/Exercise4')}}">Exercise 4</a></p>
  <p><a href="{{url('/module/exercise5')}}">Exercise 5</a></p>
</section>

<section>
  <h3>Part 2 - Vue Instance</h3>
  <p><a href="{{url('/lec68')}}">68. Vue Instance</a></p>
  <p><a href="{{url('/lec70')}}">70. Mounting a Template/Components Intro</a></p>
  <p><a href="{{url('/lec76')}}">76. Updates and Lifecycle</a></p>
  <!-- <p><a href="{{url('/new')}}">New</a></p> -->
</section>
@endsection
