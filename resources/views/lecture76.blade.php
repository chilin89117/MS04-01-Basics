@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">76. Updates and Lifecycle</div>
@endsection

@section('content')
<img src="{{asset('Vue-lifecycle.png')}}" width="600" height="338">
<section id="app6">
  <h1>@{{title}}</h1>
  <button @click="title='Changed title!'">Update Title</button>
  <button @click="destroy">Destroy Instance</button>
</section>
@endsection
