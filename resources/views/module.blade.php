@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">{{$mod}}</div>
@endsection

@section('content')
<section id="app">
  <component :is="'{{$mod}}'"></component>
</section>
@endsection
