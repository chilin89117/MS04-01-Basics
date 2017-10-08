@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">Lecture 28: Dynamic CSS</div>
@endsection

@section('content')
<div id="lec28">
  <div class="demo" @click="attachRed=!attachRed" :class="divClasses"></div>
  <div class="demo" :class="divClasses"></div>
  <div class="demo" :class="color"></div>

  <p><input v-model="color"></p>
</div>

<style media="screen">
  .demo {
    width: 100px;
    height: 100px;
    background-color: #888;
    display: inline-block;
    margin: 10px;
  }

  .red {background-color: red;}
  .green {background-color: green;}
  .blue {background-color: blue;}
</style>
@endsection

@section('custom_scripts')
<script>
var vm = new Vue ({
  el : '#lec28',
  data: {
    attachRed: false,
    color: 'green',
  },
  computed: {
    divClasses() {
      return {red: this.attachRed, blue: !this.attachRed};
    },
  },
});
</script>
@endsection
