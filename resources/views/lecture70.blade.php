@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">Lecture 70: Mounting a Template/Components Intro</div>
@endsection

@section('content')
<p>Make sure to open console log to view results...</p>
<section id="app3">
  <h1 ref="heading">Ref: @{{title}}</h1>
  <hello></hello>
  <hello></hello>
</section>

<section id="app4"></section>

<section id="app5"></section>
@endsection
