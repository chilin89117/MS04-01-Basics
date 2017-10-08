@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">Lecture 29: Dynamic CSS 2</div>
@endsection

@section('content')
<div id="lec29">
  <div class="demo" :style="{'background-color': color}"></div>
  <div class="demo" :style="myStyle"></div>
  <div class="demo" :style="[myStyle, {height: width+'px'}]"></div>

  <p>Color: <input type="text" v-model="color"></p>
  <p>Width: <input type="text" v-model="width"></p>
</div>

<style media="screen">
  .demo {
    width: 100px;
    height: 100px;
    background-color: #888;
    display: inline-block;
    margin: 10px;
  }
</style>
@endsection

@section('custom_scripts')
<script>
var vm = new Vue ({
  el : '#lec29',
  data: {
    color: '#ccc',
    width: 100,
  },
  computed: {
    myStyle() {
      return {
        'background-color': this.color,
        width: this.width + 'px',
      };
    },
  },
});
</script>
@endsection
