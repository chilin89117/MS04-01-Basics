<template>
  <div>
    <div class="demo" :style="{'background-color': color}"></div>
    <div class="demo" :style="myStyle"></div>
    <div class="demo" :style="[myStyle, {height: width+'px'}]"></div>

    <p>Color: <input type="text" v-model="color"></p>
    <p>Width: <input type="text" v-model="width"></p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      color: '#ccc',
      width: 100,
    };
  },
  computed: {
    myStyle() {
      return {
        'background-color': this.color,
        width: this.width + 'px',
      };
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
</style>
