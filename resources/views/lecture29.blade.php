@extends('layouts.app')

@section('content')
<div id="lec29">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Lecture 29: Dynamic CSS 2</div>

          <div class="panel-body">

            <div class="demo" :style="{'background-color': color}"></div>
            <div class="demo" :style="myStyle"></div>
            <div class="demo" :style="[myStyle, {height: width+'px'}]"></div>

            <p>Color: <input type="text" v-model="color"></p>
            <p>Width: <input type="text" v-model="width"></p>
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
</style>
@endsection

@section('custom_scripts')
<script>
var vueThis = new Vue ({
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
