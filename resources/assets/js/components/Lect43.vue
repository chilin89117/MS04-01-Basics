<template>
  <div>
    <p v-if="cond==1">Condition 1</p>
    <p v-else-if="cond==2">Condition 2</p>
    <p v-else>Condition unknown</p>
    <input type="text" v-model="cond" placeholder="enter a number...">
    <hr>

    <h4>Foods:</h4>
    <ul>
      <li v-for="(food, index) in foods">{{index}} -- {{food}}</li>
    </ul>
    <hr>

    <template v-for="(food, index) in foods">
      <h4>{{index}}</h4>
      <p>{{food}}</p>
    </template>
    <hr>

    <h4>Persons:</h4>
    <ul>
      <li v-for="person in persons">
        <template v-for="(val, key, idx) in person">
          <p>{{key}} : {{val}}  ({{idx}})</p>
        </template>
      </li>
    </ul>
    <hr>
    <span v-for="i in 10"> {{i}} </span>
  </div>
</template>

<script>
export default {
  data() {
    return {
      cond: 1,
      foods: ['burgers', 'pizza', 'ice cream', 'cake'],
      persons: [
        {name: 'Abbie', age: 27, gender: 'F'},
        {name: 'Tiff', age: 35, gender: 'F'},
      ],
    };
  },
};
</script>
