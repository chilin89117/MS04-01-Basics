@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">Exercise 3</div>
@endsection

@section('content')
<div id="ex">
  <button @click="value+=5">Plus 5</button>
  <button @click="value+=1">Plus 1</button>
  <p>Value: @{{value}}</p>
  <p>21? @{{result}}</p>
</div>
@endsection

@section('custom_scripts')
<script>
var vm = new Vue ({
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
        vm.value = 0;
      }, 10000);
    },
  }
});
</script>
@endsection
