@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">76. Updates and Lifecycle</div>
@endsection

@section('content')
<img src="{{asset('Vue-lifecycle.png')}}" width="600" height="338">
<div id="app1">
  <h1>@{{title}}</h1>
  <button @click="title='Changed title!'">Update Title</button>
  <button @click="destroy">Destroy Instance</button>
</div>
@endsection

@section('custom_scripts')
<script>
vm1 = new Vue({
  el: '#app1',
  data: {
    title: 'VueJS Instance 1',
  },
  beforeCreate() {
    console.log('beforeCreate()');
  },
  created() {
    console.log('created()');
  },
  beforeMount() {
    console.log('beforeMount()');
  },
  mounted() {
    console.log('mounted()');
  },
  beforeUpdate() {                  // Will not trigger if no changes are to be made...
    console.log('beforeUpdate()');  // ... even if the button is clicked
  },
  updated() {                       // Will not trigger if no changes are to be made...
    console.log('updated()');       // ... even if the button is clicked
  },
  beforeDestroy() {
    console.log('beforeDestroy()');
  },
  destroyed() {
    console.log('destroyed()');
  },
  methods: {
    destroy() {
      this.$destroy();
    },
  },
});
</script>
@endsection
