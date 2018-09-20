@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">Lecture 68: Vue Instance 1</div>
@endsection

@section('content')
<section id="app1">
  <h1 ref="heading">@{{title}}</h1>
  <button @click="show" ref="myBtn">Show Paragraph</button>
  <p v-if="showParagraph">This is not always visible</p>
</section>

<section id="app2">
  <h1 ref="heading">@{{title}}</h1>
  <button @click="onChange">Change Vue 1 instance</button>
</section>
@endsection
