<template>
  <div>
    <div class="demo" @click="attachRed=!attachRed" :class="divClasses"></div>
    <div class="demo" :class="divClasses"></div>
    <div class="demo" :class="color"></div>

    <div class="form-group">
      <label for="in">Red, Green or Blue for 3rd box: </label>
      <input id="in" class="form-control" v-model="color">
    </div>

  </div>
</template>

<script>
export default {
  data() {
    return {
      attachRed: false,
      color: 'green',
    };
  },
  computed: {
    divClasses() {
      return {red: this.attachRed, blue: !this.attachRed};
    },
  },
};
</script>

<style scoped>
  .demo {
    width: 100px;
    height: 100px;
    background-color: #888;
    display: inline-block;
    margin: 10px;
  }

  .red {background-color: red;}
  .green {background-color: green;}
  .blue {background-color: blue;}
</style>
