<template>
  <div>
    <p v-if="cond==1">Condition 1</p>
    <p v-else-if="cond==2">Condition 2</p>
    <p v-else>Condition unknown</p>
    <input type="text" v-model="cond" placeholder="enter a number...">
    <hr>

    <h4>Foods:</h4>
    <ul>
      <li v-for="(food, index) in foods" :key="food">{{index}} -- {{food}}</li>
    </ul>
    <hr>

    <template v-for="(food, index) in foods">
    <!-- keys not used for <h4> and <p> in order to avoid duplication with <li> above -->
    <!-- so ignore errors -->
      <h4>{{index}}</h4>
      <p>{{food}}</p>
    </template>
    <hr>

    <h4>Persons:</h4>
    <ul>
      <li v-for="person in persons" :key="person.name">
        <template v-for="(val, key, idx) in person">
          <p :key="val">{{key}} : {{val}}  ({{idx}})</p>
        </template>
      </li>
    </ul>
    <hr>
    <span v-for="i in 10" :key="i"> {{i}} </span>
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
