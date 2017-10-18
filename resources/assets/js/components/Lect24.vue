<template>
  <div>
    <button @click="counter++">Up</button>
    <button @click="counter--">Dn</button>
    <button @click="secondCounter++">Second</button>

    <p>{{counter}} | {{secondCounter}}</p>
    <p>{{result()}} | {{output}}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      counter: 0,
      secondCounter: 0,
    };
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
      setTimeout(() => {
        this.counter = 0;
      }, 5000);
    },
  }
};
</script>
