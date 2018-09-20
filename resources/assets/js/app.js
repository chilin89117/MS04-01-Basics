require('./bootstrap');

import Vue from 'vue';
import Exercise3 from './components/Ex3.vue';
import Exercise4 from './components/Ex4.vue';
import Exercise5 from './components/Ex5.vue';
import Lecture24 from './components/Lect24.vue';
import Lecture28 from './components/Lect28.vue';
import Lecture29 from './components/Lect29.vue';
import Lecture43 from './components/Lect43.vue';

// Part 1 uses '#app', Part 2 uses '#app1' to '#app6'
let appElement = document.getElementsByTagName('section')[0].getAttribute('id');

switch(appElement) {
  case 'app': {                     // Using components in Part 1
    new Vue ({
      el : '#app',
      components: {
        Exercise3,
        Exercise4,
        Exercise5,
        Lecture24,
        Lecture28,
        Lecture29,
        Lecture43,
      },
    });
    break;  
  }

  case 'app1': {                    // Lecture 68         
    var data = {                    // Data defined outside Vue instances
      title: 'The VueJS Instance',
      showParagraph: false,
    };
    
    var vm1 = new Vue({             // First Vue instance
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
  }
  break;
  case 'app3': {                    // Lecture 70
    Vue.component('hello', {
      template: '<h3>&lt;hello&gt; template in an external component</h3>',
    });
    
    var data = {                    // Data defined outside Vue instances
      title: 'This title is externally defined',
    };
    
    var vm3 = new Vue({             // First Vue instance
      data: data,
    });
    
    vm3.$mount('#app3');            // Mount the element outside the instance
    console.log(vm3.$el);
    
    var vm4 = new Vue({             // Create a 2nd instance with a template
      template: '<h1>Mounted with template</h1>',
    });
    
    vm4.$mount('#app4');            // Mount element '#app4' with template
    console.log(vm4.$el);
    
    var vm5 = new Vue({             // Create a 3rd instance with a template
      template: '<h1>Append template from plain JavaScript</h1>',
    });
    
    vm5.$mount();                   // Append template with plain JavaScript
    console.log(vm5.$el);
    document.getElementById('app5').appendChild(vm5.$el);
  }
  break;
  case 'app6': {                    // Lecture 76
    const vm6 = new Vue({
      el: '#app6',
      data: {
        title: 'VueJS Instance 6',
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
  }
  break;
  default: {}
}
