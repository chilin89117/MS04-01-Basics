@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">Home</div>
@endsection

@section('content')
<section>
  <h3>Part 1 - Introduction</h3>
  <p><a href="{{url('/module/Lecture24')}}">Lecture 24. Method/Compute/Watch</a></p>
  <p><a href="{{url('/module/Lecture28')}}">Lecture 28. Dynamic CSS</a></p>
  <p><a href="{{url('/module/Lecture29')}}">Lecture 29. Dynamic CSS 2</a></p>
  <p><a href="{{url('/module/Lecture43')}}">Lecture 43. "v-if" and "v-for"</a></p>
  <p><a href="{{url('/module/Exercise3')}}">Exercise 3</a></p>
  <p><a href="{{url('/module/Exercise4')}}">Exercise 4</a></p>
  <p><a href="{{url('/module/exercise5')}}">Exercise 5</a></p>
</section>

<section>
  <h3>Part 2 - Vue Instance</h3>
  <p><a href="{{url('/lecture68')}}">Lecture 68. Vue Instance</a></p>
  <p><a href="{{url('/lecture70')}}">Lecture 70. Mounting a Template/Components Intro</a></p>
  <p><a href="{{url('/lecture76')}}">Lecture 76. Updates and Lifecycle</a></p>
</section>
@endsection
