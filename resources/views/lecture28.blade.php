@extends('layouts.app')

@section('content')
<div id="lec28">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Lecture 28: Dynamic CSS</div>

          <div class="panel-body">

            <div class="demo" @click="attachRed=!attachRed" :class="divClasses"></div>
            <div class="demo" :class="divClasses"></div>
            <div class="demo" :class="color"></div>

            <p><input v-model="color"></p>

          </div>
        </div>
      </div>
    </div>
  </div>
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
var vueThis = new Vue ({
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
