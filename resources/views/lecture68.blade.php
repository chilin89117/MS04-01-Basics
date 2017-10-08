@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Lecture 68: Vue Instance 1</div>

        <div class="panel-body">

          <div id="app1">
            <h1 ref="heading">@{{title}}</h1>
            <button @click="show" ref="myBtn">Show Paragraph</button>
            <p v-if="showParagraph">This is not always visible</p>
          </div>

          <div id="app2">
            <h1 ref="heading">@{{title}}</h1>
            <button @click="onChange">Change Vue 1 instance</button>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('custom_scripts')
<script>
var data = {                      // Data defined outside Vue instances
  title: 'The VueJS Instance',
  showParagraph: false,
};

var vThis1 = new Vue({            // First Vue instance
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

var vThis2 = new Vue({            // Second Vue instance
  el: '#app2',
  data: {
    title: 'The second instance',
  },
  methods: {
    onChange() {
      vThis1.title = 'Changed';
    },
  },
});

setTimeout(function() {
  vThis1.title = 'Changed by timer!';
  // vThis1.show();
}, 3000);

console.log(data === vThis1.$data);   // Compare 'data' objects outside and inside Vue instance -> true

vThis1.$refs.heading.innerText = 'Something else!';   // Caution: outside of Vue instance is not reactive
</script>
@endsection
