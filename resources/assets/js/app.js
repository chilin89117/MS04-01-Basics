require('./bootstrap');

import Vue from 'vue';
import Exercise3 from './components/Ex3.vue';
import Exercise4 from './components/Ex4.vue';
import Exercise5 from './components/Ex5.vue';

new Vue ({
  el : '#app',
  components: {
    Exercise3,
    Exercise4,
    Exercise5,
  },
});
