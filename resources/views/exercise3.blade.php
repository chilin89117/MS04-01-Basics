@extends('layouts.app')

@section('content')
<div id="ex">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Exercise 3</div>

          <div class="panel-body">

            <button @click="value+=5">Plus 5</button>
            <button @click="value+=1">Plus 1</button>
            <p>Value: @{{value}}</p>
            <p>21? @{{result}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('custom_scripts')
<script>
var vueThis = new Vue ({
  el : '#ex',
  data: {
    value: 0,
  },
  computed: {
    result() {
      return this.value == 21 ? 'Done' : 'Not 21';
    },
  },
  watch: {
    result: function() {
      setTimeout(function() {
        vueThis.value = 0;
      }, 10000);
    },
  }
});
</script>
@endsection
