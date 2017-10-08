@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">Lecture 70: Mounting a Template/Components Intro</div>
@endsection

@section('content')
<p>Open console log ...</p>
<div id="app1">
  <h1 ref="heading">@{{title}}</h1>
  <hello></hello>
  <hello></hello>
</div>

<div id="app2"></div>

<div id="app3"></div>
@endsection

@section('custom_scripts')
<script>
Vue.component('hello', {
  template: '<h1>Hello from template in a component!</h1>',
});

var data = {                  // Data defined outside Vue instances
  title: 'The VueJS Instance',
};

var vm1 = new Vue({           // First Vue instance
  data: data,
});

vm1.$mount('#app1');          // Mount the element outside the instance
console.log(vm1.$el);

var vm2 = new Vue({           // Create a 2nd instance with a template
  template: '<h1>Mounted from template</h1>',
});

vm2.$mount('#app2');          // Mount element '#app2' with template
console.log(vm2.$el);

var vm3 = new Vue({           // Create a 3rd instance with a template
  template: '<h1>Appended from plain JavaScript</h1>',
});

vm3.$mount();                 // Append template with plain JavaScript
console.log(vm3.$el);
document.getElementById('app3').appendChild(vm3.$el);
</script>
@endsection
