@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">{{$mod}}</div>
@endsection

@section('content')
<div id="app">
  <component :is="'{{$mod}}'"></component>
</div>
@endsection
