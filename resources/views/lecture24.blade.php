@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">Lecture 24: Method / Compute / Watch</div>
@endsection

@section('content')
<div id="lec24">
  <button @click="counter++">Up</button>
  <button @click="counter--">Dn</button>
  <button @click="secondCounter++">Second</button>

  <p>@{{counter}} | @{{secondCounter}}</p>
  <p>@{{result()}} | @{{output}}</p>
</div>
@endsection

@section('custom_scripts')
<script>
var vm = new Vue ({
  el : '#lec24',
  data: {
    counter: 0,
    secondCounter: 0,
  },
  computed: {
    output() {
      console.log('COMPUTED');
      return this.counter > 5 ? 'Greater than 5' : 'Less than or equal to 5';
    },
  },
  methods: {
    result() {
      console.log('METHOD');
      return this.counter > 5 ? 'Greater than 5' : 'Less than or equal to 5';
    },
  },
  watch: {
    counter: function() {
      console.log('WATCH');
      setTimeout(function() {
        vm.counter = 0;
      }, 2000);
    },
  }
});
</script>
@endsection
