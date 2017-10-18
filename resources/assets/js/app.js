require('./bootstrap');

import Vue from 'vue';
import Exercise3 from './components/Ex3.vue';
import Exercise4 from './components/Ex4.vue';
import Exercise5 from './components/Ex5.vue';
import Lecture24 from './components/Lect24.vue';
import Lecture28 from './components/Lect28.vue';
import Lecture29 from './components/Lect29.vue';
import Lecture43 from './components/Lect43.vue';

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
