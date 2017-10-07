@extends('layouts.app')

@section('content')
<div id="lec24">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Lecture 24: Method / Compute / Watch</div>

          <div class="panel-body">

            <button @click="counter++">Up</button>
            <button @click="counter--">Dn</button>
            <button @click="secondCounter++">Second</button>

            <p>@{{counter}} | @{{secondCounter}}</p>
            <p>@{{result()}} | @{{output}}</p>
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
        vueThis.counter = 0;
      }, 2000);
    },
  }
});
</script>
@endsection
