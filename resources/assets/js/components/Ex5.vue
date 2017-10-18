<template>
  <div>
    <button type="button" @click="show=!show">Toggle</button>
    <p v-if="show">You either see me...</p>
    <p v-else>...or me</p>
    <hr>
    <h3>My List:</h3>
    <ul>
      <li v-for="(item, index) in myList">{{index}} : {{item}}</li>
    </ul>
    <hr>
    <h3>Book:</h3>
    <template v-for="(val, key, idx) in book">
      <p>{{idx}}: {{key}} - {{val}}</p>
    </template>
    <hr>
    <h3>Test Object:</h3>
    <ul>
      <li v-for="value in testObject">
        <template v-if="Array.isArray(value)">
          <ul>
            <li v-for="x in value">{{x}}</li>
          </ul>
        </template>
        <template v-else>{{value}}</template>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      show: true,
      myList: ['Vue', 'Laravel', 'Oracle', 'AWS', 'Machine Learning'],
      book: {title: 'Lord of the Rings', author: 'J.R.R. Tolkiens', books: '3'},
      testObject: {name: 'TESTOBJECT', data: [1.67,1.33,0.98,2.21]},
    };
  },
};
</script>
