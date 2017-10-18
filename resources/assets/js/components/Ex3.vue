<template>
  <div>
    <button @click="value+=5">Plus 5</button>
    <button @click="value+=1">Plus 1</button>
    <p>Value: @{{value}}</p>
    <p>21? @{{result}}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      value: 0,
    };
  },
  computed: {
    result() {
      return this.value == 21 ? 'Done' : 'Not 21';
    },
  },
  watch: {
    result: function() {
      setTimeout(function() {
        vm.value = 0;
      }, 10000);
    },
  },
};
</script>
