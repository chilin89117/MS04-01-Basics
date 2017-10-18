@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">Lecture 68: Vue Instance 1</div>
@endsection

@section('content')
<div id="app1">
  <h1 ref="heading">@{{title}}</h1>
  <button @click="show" ref="myBtn">Show Paragraph</button>
  <p v-if="showParagraph">This is not always visible</p>
</div>

<div id="app2">
  <h1 ref="heading">@{{title}}</h1>
  <button @click="onChange">Change Vue 1 instance</button>
</div>
@endsection

@section('custom_scripts')
<script>
var data = {                      // Data defined outside Vue instances
  title: 'The VueJS Instance',
  showParagraph: false,
};

var vm1 = new Vue({            // First Vue instance
  el: '#app1',
  data: data,
  methods: {
    show() {
      this.showParagraph = true;
      this.updateTitle('The VueJS Instance (Updated)');
      console.log(this.$refs.myBtn);  // Accessing 'ref' element
    },
    updateTitle(title) {
      this.title = title;
    },
  },
  computed: {
    lowercaseTitle() {
      return this.title.toLowerCase();
    },
  },
  watch: {
    title(value) {
      alert('Title changed, new value: ' + value);
    },
  },
});

var vm2 = new Vue({            // Second Vue instance
  el: '#app2',
  data: {
    title: 'The second instance',
  },
  methods: {
    onChange() {
      vm1.title = 'Changed';
    },
  },
});

setTimeout(() => {
  vm1.title = 'Changed by timer!';
  // vm1.show();
}, 3000);

console.log(data === vm1.$data);   // Compare 'data' objects outside and inside Vue instance -> true

vm1.$refs.heading.innerText = 'Something else!';   // Caution: outside of Vue instance is not reactive
</script>
@endsection
